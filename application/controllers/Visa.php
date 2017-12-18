<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class visa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation', 'session', 'encryption') );
		$this->load->helper( array('url', 'html') );
		$this->load->database();
		$this->load->model('visa_model', 'visa_mdl');
	}

	public function save_visa($visa_id = null) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			$this->load->model('Media_model', 'media_mdl');
			
			// Form validation
			$this->form_validation->set_rules('visa_title', 'visa Title', 'required', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('visa_content', 'visa Content', 'required', array('required' => 'You must provide a %s.'));

			// set validation html
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

			if ($this->form_validation->run() == FALSE) {

				// Call members registration form
				$this->__get_entry_form();

			} else {

				$visa_args = array();
				if (is_numeric($visa_id)) {	
					$visa_args['visa_id'] = $visa_id;
				}

				$thumbnail = $this->input->post('thumbnail_id');
				if ( $thumbnail != '' ) {
					$visa_args['visa_thumbnail_id'] = $thumbnail;
				}

				$visa_args['visa_title'] = $this->input->post('visa_title');
				$visa_args['visa_price'] = $this->input->post('visa_price');
				$visa_args['visa_content'] = $this->input->post('visa_content');

				$save_visa = $this->visa_mdl->save_visa($visa_args);
				if ($save_visa) {
					$target_url = $this->input->post('target_url');
					if ( is_numeric($visa_id) ) {
						redirect($target_url);
					} else {
						redirect($target_url . $save_visa);
					}
				} else {
					echo '<h1>Error</h1>';
				}

			}

		} else {
			$this->__get_login_form();
		}

	}

	/** -----------------------------------------------------------------------------------------
	 * PRIVATE METHODS
	 */
	private function __get_entry_form($page_title = 'Error Registration', $entry_action = 'failed') {
		$data['page_title'] = $page_title;
		$data['entry_action'] = $entry_action;
		$data['media_lists'] = $this->media_mdl->get_datas();
		$this->load->view('header', $data);
		$this->load->view('administrator/dashboard/sidebar_view');
		$this->load->view('administrator/visa/Error_view');
		$this->load->view('administrator/dashboard/media_dialog');
		$this->load->view('footer');
	}

	private function __get_login_form($page_title = 'J.Aguirre Travel and Tours &mdash; User Log In') {

		$data['page_title'] = $page_title;
		$this->load->view('header',$data);
		$this->load->view('Login_view');
		$this->load->view('footer');

	}

}

?>	