<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promo extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation', 'session', 'encryption') );
		$this->load->helper( array('url', 'html') );
		$this->load->database();
		$this->load->model('Promo_model', 'prmo_mdl');
	}

	public function save_promo($promo_id = null) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			$this->load->model('Media_model', 'media_mdl');

			// Form validation
			$this->form_validation->set_rules('promo_title', 'Promo Title', 'required', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('promo_content', 'Promo Content', 'required', array('required' => 'You must provide a %s.'));

			// set validation html
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

			if ($this->form_validation->run() == FALSE) {

				// Call members registration form
				$this->__get_entry_form();

			} else {

				$promo_args = array();
				if (is_numeric($promo_id)) {	
					$promo_args['promo_id'] = $promo_id;
				}

				$thumbnail = $this->input->post('thumbnail_id');
				if ( $thumbnail != '' ) {
					$promo_args['promo_thumbnail_id'] = $thumbnail;
				}

				$promo_args['promo_title'] = $this->input->post('promo_title');
				$promo_args['promo_content'] = $this->input->post('promo_content');

				$save_promo = $this->prmo_mdl->save_promo($promo_args);
				if ($save_promo) {
					$target_url = $this->input->post('target_url');
					if ( is_numeric($promo_id) ) {
						redirect($target_url);
					} else {
						redirect($target_url . $save_promo);
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
	private function __get_entry_form($page_title = 'J.Aguirre Travel and Tours', $entry_action = 'failed') {
		$data['page_title'] = $page_title;
		$data['entry_action'] = $entry_action;
		$data['media_lists'] = $this->media_mdl->get_datas();
		$this->load->view('header', $data);
		$this->load->view('administrator/dashboard/sidebar_view');
		$this->load->view('administrator/promo/Error_view');
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