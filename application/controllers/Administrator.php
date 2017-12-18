<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrator extends CI_Controller {

	private $__APP = "J.Aguirre Travel and Tours";
	public $current_user_session_id;
	public $current_user_session_role;

	public function __construct() {
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->library( array('form_validation') );
		$this->load->helper( array( 'url', 'html', 'form' ) );
		$this->load->database();
		$this->load->model('Config_model', 'conf_mdl');
		$this->load->model('User_model', 'usr_mdl');
		$this->load->model('Media_model', 'media_mdl');

		$this->current_user_session_id = $this->session->CE_sess_user_id;
		$this->current_user_session_role = $this->session->CE_sess_user_role;
	}

	public function index() {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			
			$this->load->view('header');
			$this->load->view('administrator/dashboard/sidebar_view');
			$this->load->view('administrator/dashboard/dashboard_view');
			$this->load->view('footer');

		} else {
			$this->__get_login_form();
		}
	}

	/**
	 * Promos Controller
	 */
	public function promos( $action = '', $paramTwo = null ) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			$this->load->model('Promo_model', 'prmo_mdl');

			if ( $action === 'new' ) {

				$data['page_title'] = "Add Promo &mdash; " . $this->__APP;
				$data['media_lists'] = $this->media_mdl->get_datas();
				$this->load->view('header', $data);
				$this->load->view('administrator/dashboard/sidebar_view');
				$this->load->view('administrator/promo/entry_view');
				$this->load->view('administrator/dashboard/media_dialog');
				$this->load->view('footer');

			} else if ( $action === 'edit' ) {

				if ( is_numeric($paramTwo) ) {
					$data['page_title'] = "Edit Promo &mdash; " . $this->__APP;
					$data['meta_datas'] = $this->prmo_mdl->get_data_by_id( $paramTwo );
					$data['media_lists'] = $this->media_mdl->get_datas();
					$this->load->view('header', $data);
					$this->load->view('administrator/dashboard/sidebar_view');
					$this->load->view('administrator/promo/edit_view');
					$this->load->view('administrator/dashboard/media_dialog');
					$this->load->view('footer');
				}

			} else if ( $action === 'delete' ) {

					// Delete
				if (is_numeric($paramTwo)) {

					if ( $this->input->post('delete_yes') ) {
						$request_promo_id = $this->input->post('promo_id');
						if ($paramTwo == $request_promo_id) {
							$this->__delete_restore_promo($request_promo_id);
						} else {
							echo "<h4>Error Deleting: Request ID and URL did not match</h4>";
						}

					} else if ( $this->input->post('restore_yes') ) {
						$request_promo_id = $this->input->post('promo_id');
						if ($paramTwo == $request_promo_id) {
							$this->__delete_restore_promo($request_promo_id, true);
						} else {
							echo "<h4>Error Restoring: Request ID and URL did not match</h4>";
						}

					} else if ( $this->input->post('delete_no') || $this->input->post('restore_no') ) {

						echo '<script type="text/javascript">history.go(-2);</script>';

					} else {
						$data['page_title'] = "Confirm Delete &mdash; " . $this->__APP;
						$this->load->view('header', $data);
						$this->load->view('administrator/dashboard/sidebar_view');
						$this->load->view('administrator/promo/delete_view');
						$this->load->view('footer');
					}

				}

			} else {
					// List Datas
				$data['page_title'] = "Promos &mdash; " . $this->__APP;
				$data['data_lists'] = $this->prmo_mdl->get_datas(
					array(
						'limit'	=>	30
					)
				);
				$this->load->view('header', $data);
				$this->load->view('administrator/dashboard/sidebar_view');
				$this->load->view('administrator/dashboard/navbar_dashboard');
				$this->load->view('administrator/promo/list_view');
				$this->load->view('footer');
			}		

		} else {
			$this->__get_login_form();
		}

	}

	/**
	 * Visas Controller
	 */
	public function visas( $action = '', $paramTwo = null ) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$this->load->model('Visa_model', 'visa_mdl');
			
			if ( $action === 'new' ) {

				$data['page_title'] = "Add Visa &mdash; " . $this->__APP;
				$data['media_lists'] = $this->media_mdl->get_datas();
				$this->load->view('header', $data);
				$this->load->view('administrator/dashboard/sidebar_view');
				$this->load->view('administrator/visa/entry_view');
				$this->load->view('administrator/dashboard/media_dialog');
				$this->load->view('footer');

			} else if ( $action === 'edit' ) {

				if ( is_numeric($paramTwo) ) {
					$data['page_title'] = "Edit Visa &mdash; " . $this->__APP;
					$data['media_lists'] = $this->media_mdl->get_datas();
					$data['meta_datas'] = $this->visa_mdl->get_data_by_id( $paramTwo );
					$this->load->view('header', $data);
					$this->load->view('administrator/dashboard/sidebar_view');
					$this->load->view('administrator/visa/edit_view');
					$this->load->view('administrator/dashboard/media_dialog');
					$this->load->view('footer');
				}

			} else if ( $action === 'delete' ) {

				// Delete
				if (is_numeric($paramTwo)) {
					
					if ( $this->input->post('delete_yes') ) {
						$request_visa_id = $this->input->post('visa_id');
						if ($paramTwo == $request_visa_id) {
							$this->__delete_restore_visa($request_visa_id);
						} else {
							echo "<h4>Error Deleting: Request ID and URL did not match</h4>";
						}

					} else if ( $this->input->post('restore_yes') ) {
						$request_visa_id = $this->input->post('visa_id');
						if ($paramTwo == $request_visa_id) {
							$this->__delete_restore_visa($request_visa_id, true);
						} else {
							echo "<h4>Error Restoring: Request ID and URL did not match</h4>";
						}

					} else if ( $this->input->post('delete_no') || $this->input->post('restore_no') ) {

						echo '<script type="text/javascript">history.go(-2);</script>';

					} else {
						$data['page_title'] = "Confirm Delete &mdash; " . $this->__APP;
						$this->load->view('header', $data);
						$this->load->view('administrator/dashboard/sidebar_view');
						$this->load->view('administrator/visa/delete_view');
						$this->load->view('footer');
					}

				}

			} else {
				// List Datas
				$data['page_title'] = "Visas &mdash; " . $this->__APP;
				$data['data_lists'] = $this->visa_mdl->get_datas();
				$this->load->view('header', $data);
				$this->load->view('administrator/dashboard/sidebar_view');
				$this->load->view('administrator/dashboard/navbar_dashboard');
				$this->load->view('administrator/visa/list_view');
				$this->load->view('footer');
			}

		} else {
			$this->__get_login_form();
		}

	}

	/**
	 * Social Controller
	 */
	public function social() {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$this->load->model('Social_model', 'social_mdl');
			$data['page_title'] = 'Social Settings &mdash ' . $this->__APP;
			$data['social_details'] = $this->social_mdl->get_social_accounts();
			$this->load->view('header', $data);
			$this->load->view('administrator/dashboard/sidebar_view');
			$this->load->view('administrator/social/entry_view');
			$this->load->view('footer');
		} else {
			$this->__get_login_form();
		}
	}

	/**
	 * Users Controller
	 */
	public function users( $action = '', $paramTwo = null ) {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			if ( $this->current_user_session_role == 0 ) {

				if ($action === 'new') {
					$data['page_title'] = "New User &mdash; " . $this->__APP;
					$data['media_lists'] = $this->media_mdl->get_datas();
					$this->load->view('header', $data);
					$this->load->view('administrator/dashboard/sidebar_view');
					$this->load->view('administrator/user/entry_view');
					$this->load->view('administrator/dashboard/media_dialog');
					$this->load->view('footer');
				} else if ($action === 'delete') {
					
					// Delete
					if (is_numeric($paramTwo)) {
						
						if ( $this->input->post('delete_yes') ) {
							$request_user_id = $this->input->post('user_id');
							if ($paramTwo == $request_user_id) {
								if ( $paramTwo != $this->current_user_session_id ) {
									$this->__delete_restore_user($request_user_id);	
								} else {
									echo "<h4>Error Deleting: You cannot delete yourself</h4>";
								}
							} else {
								echo "<h4>Error Deleting: Request ID and URL did not match</h4>";
							}

						} else if ( $this->input->post('restore_yes') ) {
							$request_user_id = $this->input->post('user_id');
							if ($paramTwo == $request_user_id) {
								$this->__delete_restore_user($request_user_id, true);
							} else {
								echo "<h4>Error Restoring: Request ID and URL did not match</h4>";
							}

						} else if ( $this->input->post('delete_no') || $this->input->post('restore_no') ) {

							echo '<script type="text/javascript">history.go(-2);</script>';

						} else {
							$data['page_title'] = "Confirm Delete &mdash; " . $this->__APP;
							$this->load->view('header', $data);
							$this->load->view('administrator/dashboard/sidebar_view');
							$this->load->view('administrator/user/delete_view');
							$this->load->view('footer');
						}

					}

				} else {
					$data['page_title'] = "Users &mdash; " . $this->__APP;
					$data['data_lists'] = $this->usr_mdl->get_datas(
						array(
							'orderby'	=>	'user_name',	
							'order'		=>	'ASC',
							'exclude'	=>	array( $this->current_user_session_id )
						)
					);
					$this->load->view('header', $data);
					$this->load->view('administrator/dashboard/sidebar_view');
					$this->load->view('administrator/dashboard/navbar_dashboard');
					$this->load->view('administrator/user/list_view');
					$this->load->view('footer');
				}

			} else {
				// Unauthorized
				$this->__get_unauthorized_view();
			}	

		} else {
			$this->__get_login_form();
		}

	}

	/**
	 * Account Settings
	 */
	public function account() {

		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$data['page_title'] = 'Account Settings &mdash; ' . $this->__APP;
			$data['user_credentials'] = $this->usr_mdl->get_user_by_id( $this->current_user_session_id );
			$this->load->view('header', $data);
			$this->load->view('administrator/dashboard/sidebar_view');
			$this->load->view('administrator/account/edit_view');
			$this->load->view('footer');

		} else {
			$this->__get_login_form();
		}

	}

	/**
	 * Settings Controller
	 */
	public function settings() {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			if ( $this->current_user_session_role == 0 ) {

				$data['config_details'] = $this->conf_mdl->get_config_settings();
				$data['page_title'] = 'Settings &mdash; ' . $this->__APP;
				$this->load->view('header', $data);
				$this->load->view('administrator/dashboard/sidebar_view');
				$this->load->view('administrator/settings/entry_view');
				$this->load->view('footer');

			} else {
				// Unauthorized
				$this->__get_unauthorized_view();
			}	

		} else {
			$this->__get_login_form();
		}
	}

	/**
	 * Logout
	 */
	public function logout() {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$this->user_security->unset_session_data( 'CE_sess_' );
			redirect( site_url('/index/login/') );
		} else {
			redirect('/');
		}	
	}

	/**
	 * ------------------------------------------------------------------------------------------------
	 * PRIVATE METHODS HERE...
	 */

	// Delete / Restore Promo
	private function __delete_restore_promo($promo_id, $action = false /*true for restore, false for delete*/ ) {
		if ( $this->prmo_mdl->delete_restore_promo($promo_id, $action) ) {
			redirect( site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) ) );
		}
	}

	// Delete / Restore Visa
	private function __delete_restore_visa($visa_id, $action = false /*true for restore, false for delete*/ ) {
		if ( $this->visa_mdl->delete_restore_visa($visa_id, $action) ) {
			redirect( site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) ) );
		}
	}

	// Delete / Restore User
	private function __delete_restore_user($user_id, $action = false /*true for restore, false for delete*/ ) {
		if ( $this->usr_mdl->delete_restore_user($user_id, $action) ) {
			redirect( site_url( $this->uri->slash_rsegment(1) . $this->uri->slash_rsegment(2) ) );
		}
	}

	// Unauthorized View
	private function __get_unauthorized_view($page_title = 'Unauthorized', $err_msg = 'You are Unauthorized for this operation') {
		$data['page_title'] = $page_title;
		$data['err_msg'] = $err_msg;
		$this->load->view('header',$data);
		$this->load->view('administrator/dashboard/sidebar_view');
		$this->load->view('administrator/dashboard/unauthorized_view');
		$this->load->view('footer');
	}

	// Login Form
	// The login form
	private function __get_login_form($page_title = 'J.Aguirre Travel and Tours &mdash; User Log In') {

		$data['page_title'] = $page_title;
		$this->load->view('header',$data);
		$this->load->view('Login_view');
		$this->load->view('footer');

	}

}
?>