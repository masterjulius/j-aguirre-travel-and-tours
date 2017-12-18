<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Visa_model extends CI_Model {

	public function get_datas( $params = null ) {
		
		$status_param = is_array($params) && array_key_exists('status', $params) ? $params['status'] : true;
		$order_by = is_array($params) && array_key_exists('order_by', $params) ? $params['order_by'] : 'visa_created_date';
		$order = is_array($params) && array_key_exists('order', $params) ? $params['order'] : 'DESC';
		$limit = is_array($params) && array_key_exists('limit', $params) ? $params['limit'] : 10;

		$this->db->select('visa_id, visa_title, visa_price, visa_content, visa_thumbnail_id, visa_created_date, visa_created_by, visa_edited_date, visa_edited_by');
		if (is_array($params)) {
			if ( array_key_exists('search', $params) ) {
				if ( is_array($params['search']) ) {
					$this->db->group_start();
					$index = 0;
					foreach ($params['search'] as $key => $value) {
						if ($index == 0) {
							$this->db->like($key, $value);
						} else {
							$this->db->or_like($key, $value);
						}
						$index++;
					}
					$this->db->group_end();
				}
			}
		}
		$this->db->order_by($order_by, $order);
		$this->db->limit($limit);
		$query = $this->db->get_where( 'tbl_visas', array('visa_is_active' => $status_param) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->result();
			}
		}
		return false;

	}

	public function get_data_by_id($visa_id, $status = TRUE) {

		$this->db->select('visa_id, visa_title, visa_price, visa_content, visa_thumbnail_id, visa_created_date, visa_created_by, visa_edited_date, visa_edited_by');
		$query = $this->db->get_where( 'tbl_visas', array('visa_id'=>$visa_id, 'visa_is_active'=>$status) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		return false;

	}

	public function save_visa( $args ) {

		$this->db->trans_start();
		if ( array_key_exists('visa_id', $args) ) {
			// update
			$query = $this->db->update( 'tbl_visas', $args, array( 'visa_id' => $args['visa_id'], 'visa_is_active' => true ) );
			if ($query) {
				$this->db->trans_complete();
				return $args['visa_id'];
			}
		} else {
			// add
			$query = $this->db->insert( 'tbl_visas', $args );
			if ($query) {
				$last_id = $this->db->insert_id();
				$this->db->trans_complete();
				return $last_id;
			}
		}
		
	}

	// Delete / Restore
	public function delete_restore_visa($visa_id, $action = false /*true for restore, false for delete*/) {
		$where_status = $action == false ? true : false;
		if ( $this->db->update( 'tbl_visas', array('visa_is_active' => $action), array('visa_is_active' => $where_status, 'visa_id' => $visa_id)) ) {
			return true;
		}
	}

}
?>