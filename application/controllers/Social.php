<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Social extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation') );
		$this->load->helper( array( 'url', 'html', 'form' ) );
		$this->load->database();
		$this->load->model('Social_model', 'social_mdl');
	}

	public function save_accounts($social_id = null) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			$args = array();
			$args['social_facebook'] = $this->input->post('facebook');
			$args['social_twitter'] = $this->input->post('twitter');
			$args['social_linkedin'] = $this->input->post('linkedin');
			$args['social_google_plus'] = $this->input->post('googleplus');
			// Targer Url
			$target_url = $this->input->post('target_url');
			if ( is_numeric($social_id) ) {
				// update
				$save_result = $this->social_mdl->save_accounts( $args, $config_id );
				if ( $save_result ) {
					redirect( $target_url );
				}
			} else {
				// add
				$save_result = $this->social_mdl->save_accounts( $args );
				if ( $save_result ) {
					redirect( $target_url );
				}
			}
			

		} else {
			redirect('/');
		}

	}

}
?>