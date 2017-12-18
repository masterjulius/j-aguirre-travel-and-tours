<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {

	public $current_user_session_id;
	public $current_user_session_role;

	public function __construct(){
		parent::__construct();
		$this->load->library( array('user_security', 'page_actions') );
		$this->load->helper(array('form', 'url'));
		$this->current_user_session_id = $this->session->CE_sess_user_id;
		$this->current_user_session_role = $this->session->CE_sess_user_role;
    }

	public function do_upload() {
		if ( $this->user_security->is_user_logged_in( 'CE_sess_' ) ) {
			$upload_folder = './public/img/media/';
			$config['file_name']		= md5( uniqid() . date('y-m-d_H-i-s-v__') );
			$config['upload_path']		= $upload_folder;
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 50000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file_lists')) {
				$returnValue = array('error' => $this->upload->display_errors('',''));
			} else {
				$returnValue = array('upload_data' =>$this->upload->data());
				if ( !$save_image = $this->__save_img_to_db($returnValue['upload_data']) ) {
					$returnValue = array('error' => 'error saving to database');
				} else {
					$returnValue['upload_data']['file_id'] = $save_image;
				}
			}
			/* Send as JSON */
			header("Content-Type: application/json", true);
			echo json_encode($returnValue);
			exit;
		}
	}

	private function __save_img_to_db($data) {

		$this->load->database();
		$args = array(
			'media_name'			=>	$data['file_name'],
			'media_orig_name'		=>	$data['client_name'],
			'media_type'			=>	$data['file_type'],
			'media_extension'		=>	$data['file_ext'],
			'media_extra_meta_data'	=>	json_encode($data),
			'media_created_by'		=>	$this->current_user_session_id,
			'media_edited_by'		=>	$this->current_user_session_id
		);
		if ( $this->db->insert('tbl_media', $args) ) {
			return $this->db->insert_id();;
		}
		return false;

	}

}
?>	