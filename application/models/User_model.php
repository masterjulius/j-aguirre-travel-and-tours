<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

	public function get_user_credentials($params, $selectFields = '') {

		if ( !$this->user_security->is_user_logged_in( 'CE_sess_' ) ) {

			if ( !is_null($params) && !empty($params) ) {

				if ( is_array($params) ) {

					if ( count($params) > 0 ) {

						$params['user_is_active'] = true;
						if (!empty($selectFields)) {
							if (is_string($selectFields)) {
								$this->db->select($selectFields);
							}
						}
						$this->db->where($params);
						$query = $this->db->get('tbl_users');
						if ($query) {
							return $query->unbuffered_row();
						}
						return null;

					} else {
						die( 'First parameter has zero values' );
					}

				} else {
					die( 'First Parameter must be array' );
				}

			}

		} else {
			redirect('');
		}

	}

	public function get_datas( $params = null ) {

		$status_param = is_array($params) && array_key_exists('status', $params) ? $params['status'] : true;
		$order_by = is_array($params) && array_key_exists('order_by', $params) ? $params['order_by'] : 'user_created_date';
		$order = is_array($params) && array_key_exists('order', $params) ? $params['order'] : 'DESC';
		$limit = is_array($params) && array_key_exists('limit', $params) ? $params['limit'] : 10;

		$this->db->select('user_id, user_name, user_password, user_img_id, user_role, user_created_date, user_created_by, user_edited_date, user_edited_by');
		if ( is_array($params) && array_key_exists('exclude', $params) ) {
			$this->db->where_not_in( 'user_id', $params['exclude'] );
		}
		$this->db->order_by($order_by, $order);
		$this->db->limit($limit);
		$query = $this->db->get_where( 'tbl_users', array('user_is_active' => $status_param) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->result();
			}
		}

	}

	public function get_user_by_id( $user_id, $selectFields = '', $status = TRUE ) {
		if ( !empty($selectFields) && is_string($selectFields) ) {
			$this->db->select($selectFields);
		} else {
			$this->db->select('user_id, user_name, user_password, user_img_id, user_role, user_created_date, user_created_by, user_edited_date, user_edited_by');
		}
		$query = $this->db->get_where( 'tbl_users', array('user_id'=>$user_id, 'user_is_active'=>$status) );
		if ($query) {
			if ( $query->num_rows() > 0 ) {
				return $query->row();
			}
		}
		return null;

	}

	public function comparePassword($password, $user_id) {

		$salt_param = '$6$rounds=5000$' . $this->config->item('salt_str') . '$';
		$User = $this->get_user_by_id( $user_id );
		if ( $User ) {
			$password = crypt( $password, $salt_param );
			if ( $password == $User->user_password ) {
				return true;
			}
			return false;
		}

	}

	public function save_user($args, $user_id = null) {
		if (is_numeric($user_id)) {

			if ( $this->db->update('tbl_users', $args, array('user_id' => $user_id) ) ) {
				return true;
			}

		} else {

			if ( $this->db->insert('tbl_users', $args ) ) {
				return true;
			}

		}
		return false;
	}

	// Delete / Restore User
	public function delete_restore_user($user_id, $action = false /*true for restore, false for delete*/) {
		$where_status = $action == false ? true : false;
		if ( $this->db->update( 'tbl_users', array('user_is_active' => $action), array('user_is_active' => $where_status, 'user_id' => $user_id)) ) {
			return true;
		}
	}

}
?>