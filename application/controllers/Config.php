<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config extends CI_Controller {

	public $current_user_session_id;
	public $current_user_session_role;

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation') );
		$this->load->helper( array( 'url', 'html', 'form' ) );
		$this->load->database();
		$this->load->model('Config_model', 'cnfg_mdl');
		$this->current_user_session_id = $this->session->CE_sess_user_id;
		$this->current_user_session_role = $this->session->CE_sess_user_role;
	}

	public function save_settings($config_id) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			$args = array();
			$args['conf_site_name'] = $this->input->post('site_title');
			$args['conf_site_description'] = $this->input->post('site_description');
			$args['conf_featured_message'] = $this->input->post('featured_message');
			$args['conf_about'] = $this->input->post('about');
			$args['conf_contact_info'] = $this->input->post('contact_info');
			$args['conf_copyright_message'] = $this->input->post('copyright_message');
			$args['conf_edited_by'] = $this->current_user_session_id;
			$save_result = $this->cnfg_mdl->save_settings( $args, $config_id );
			if ( $save_result ) {
				redirect( $this->input->post('target_url') );
			}

		} else {
			redirect('/');
		}

	}

}
?>