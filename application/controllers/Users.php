<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

	public $current_user_session_id;
	public $current_user_session_role;

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation') );
		$this->load->helper( array( 'url', 'html', 'form' ) );
		$this->load->database();
		$this->load->model('User_model','usr_mdl');
		$this->current_user_session_id = $this->session->CE_sess_user_id;
		$this->current_user_session_role = $this->session->CE_sess_user_role;
	}

	public function login() {

		if ( !$this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			// do action

			// call login to action
			$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));

			if ($this->form_validation->run() == FALSE) {

				// set validation html
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

				$data['page_title'] = "Sign In Error!";
				$this->load->view('header',$data);
				$this->load->view('Login_view');
				$this->load->view('footer');

			} else {

				// get values
				$usr_name = $this->input->post('username');
				$usr_password = $this->input->post('password');

				$salt_param = '$6$rounds=5000$' . $this->config->item('salt_str') . '$';
				$usr_password = crypt( $usr_password, $salt_param );

				$get_usr_credentials = $this->usr_mdl->get_user_credentials( array('user_name'=>$usr_name,'user_password'=>$usr_password) );
				if ( $get_usr_credentials != null ) {

					// set session
					$session_datas = array(
						'user_id'	=>	$get_usr_credentials->user_id,
						'user_name'	=>	$get_usr_credentials->user_name,
						'user_role'	=>	$get_usr_credentials->user_role
					);
					$this->user_security->register_session_data( $session_datas, 'CE_sess_' );
					$target_url = !empty($this->input->post('target_url')) ? $this->input->post('target_url') : '/administrator/';
					redirect( $target_url );

				} else {

					$data['invalid'] = "Invalid Username or Password.";
					$this->load->view('header', $data);
					$this->load->view('Login_view');
					$this->load->view('footer');

				}

			}	

		} else {
			// do redirect
			redirect( site_url( '/administrator/' ) );
		}
		
	}

	public function getUserById( $id ) {

	}

	// Saving the User
	public function save_user( $user_id = null ) {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$this->load->model('User_model', 'usr_mdl');
			$this->load->model('Media_model', 'media_mdl');
			$salt_param = '$6$rounds=5000$' . $this->config->item('salt_str') . '$';

			if (is_numeric($user_id)) {
				// Update
				// call login to action
				// This is when the user edits his own account settings
				$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'You must provide a %s.'));
				if ($this->form_validation->run() == FALSE) {

					// set validation html
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

					$this->__get_entry_form();

				} else {

					// Initialize argument
					$args = array();
					$args['user_name'] = $this->input->post('username');
					$args['user_edited_by'] = $this->current_user_session_id;

					// Get input passwords
					$new_password = $this->input->post('password');
					$current_password = $this->input->post('cpassword');
					if ( $new_password != '' && $current_password != '' ) {
						if ( $this->usr_mdl->comparePassword( $current_password, $user_id ) ) {
							// Correct current password
							$args['user_password'] = crypt( $new_password, $salt_param );
						} else {
							// Incorrect Password
							$this->__get_entry_form('Current Password incorrect');
						}
					}
					$args['user_img_id'] = $this->input->post('thumbnail_id');
					if ( $this->usr_mdl->save_user( $args, $user_id ) ) {
						redirect( $this->input->post('target_url') );
					}
				}
			} else {
				// Add
				$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required', array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('user_role', 'User Role', 'required', array('required' => 'You must provide a %s.'));
				if ($this->form_validation->run() == FALSE) {
					
					// set validation html
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

					$this->__get_entry_form();

				} else {

					// Get Password
					$password = $this->input->post('password');
					$cpassword = $this->input->post('cpassword');

					// Check if Passwords Matched
					if ( $password == $cpassword ) {
						// Matched
						$args = array();
						$args['user_name'] = $this->input->post('username');
						$args['user_password'] = crypt( $password, $salt_param );
						$args['user_img_id'] = $this->input->post('thumbnail_id');
						$args['user_role'] = $this->input->post('user_role');
						$args['user_created_by'] = $this->current_user_session_id;
						$args['user_edited_by'] = $this->current_user_session_id;

						if ( $this->usr_mdl->save_user( $args ) ) {

							redirect( $this->input->post('target_url') );
						}
					} else {
						// Did not match
						$this->__get_entry_form('Passwords did not match');
					}

				}
				
			}
		} else {
			// do redirect
			redirect( base_url( '/' ) );
		}	

	}

	/** -----------------------------------------------------------------------------------------
	 * PRIVATE METHODS
	 */
	private function __get_entry_form($error = FALSE, $page_title = 'J.Aguirre Travel and Tours') {
		$data['page_title'] = $page_title;
		$data['media_lists'] = $this->media_mdl->get_datas();
		if ( $error == TRUE && is_string($error) ) {
			$data['err_msg'] = $error;
		}
		$this->load->view('header', $data);
		$this->load->view('administrator/dashboard/sidebar_view');
		$this->load->view('administrator/user/Error_view');
		$this->load->view('administrator/dashboard/media_dialog');
		$this->load->view('footer');
	}

	// Login Form
	private function __get_login_form($page_title = 'J.Aguirre Travel and Tours &mdash; User Log In') {

		$data['page_title'] = $page_title;
		$this->load->view('header',$data);
		$this->load->view('Login_view');
		$this->load->view('footer');

	}

}

?>	