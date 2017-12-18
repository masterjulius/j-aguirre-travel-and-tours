<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->helper( array( 'url' ) );
		$this->load->helper( array( 'url', 'html' ) );
		$this->load->database();
		$this->load->model('Media_model', 'media_mdl');
		$this->load->model('Config_model', 'config_mdl');
	}

	public function index() {
		$this->load->model('Promo_model', 'prmo_mdl');
		$this->load->model('Visa_model', 'visa_mdl');
		$this->load->model('Social_model', 'social_mdl');
		$data['promo_lists'] = $this->prmo_mdl->get_datas();
		$data['visa_lists'] = $this->visa_mdl->get_datas();
		$data['config_metadatas'] = $this->config_mdl->get_config_settings();
		$social_details = $this->social_mdl->get_social_accounts();
		$data['social_links'] = array(
			'facebook'	=>	$social_details != false ? $social_details->social_facebook : '',
			'twitter'	=>	$social_details != false ? $social_details->social_twitter : '',
			'linkedin'	=>	$social_details != false ? $social_details->social_linkedin : '',
			'googleplus'=>	$social_details != false ? $social_details->social_google_plus : ''
		);

		$this->load->view('header', $data);
		$this->load->view('Navbar_home');
		$this->load->view('Home_view');
		$this->load->view('footer_home');
	}

	public function promos() {
		$this->load->model('Promo_model', 'prmo_mdl');
		$this->load->model('Social_model', 'social_mdl');
		$data['promo_lists'] = $this->prmo_mdl->get_datas();
		$data['config_metadatas'] = $this->config_mdl->get_config_settings();
		$social_details = $this->social_mdl->get_social_accounts();
		$data['social_links'] = array(
			'facebook'	=>	$social_details != false ? $social_details->social_facebook : '',
			'twitter'	=>	$social_details != false ? $social_details->social_twitter : '',
			'linkedin'	=>	$social_details != false ? $social_details->social_linkedin : '',
			'googleplus'=>	$social_details != false ? $social_details->social_google_plus : ''
		);
		$this->load->view('header', $data);
		$this->load->view('Navbar_home');
		$this->load->view('Promo_view');
		$this->load->view('footer_home');
	}

	public function visas() {
		$this->load->model('Visa_model', 'visa_mdl');
		$data['visa_lists'] = $this->visa_mdl->get_datas();
		$data['config_metadatas'] = $this->config_mdl->get_config_settings();
		$this->load->view('header', $data);
		$this->load->view('Navbar_home');
		$this->load->view('Visa_view');
		$this->load->view('footer_home');
	}

	public function about() {
		$data['config_metadatas'] = $this->config_mdl->get_config_settings();
		$this->load->view('header', $data);
		$this->load->view('Navbar_home');
		$this->load->view('About_view');
		$this->load->view('footer_home');
	}

	public function contact() {
		$data['config_metadatas'] = $this->config_mdl->get_config_settings();
		$this->load->view('header', $data);
		$this->load->view('Navbar_home');
		$this->load->view('Contact_view');
		$this->load->view('footer_home');
	}

	public function login() {
		if ( !$this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$data['config_metadatas'] = $this->config_mdl->get_config_settings();
			$this->load->view('header', $data);
			$this->load->view('Login_view');
			$this->load->view('footer');
		} else {
			redirect('/administrator/');
		}
	}

}
?>