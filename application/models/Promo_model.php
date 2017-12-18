<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promo_model extends CI_Model {

	public function get_datas( $params = null ) {
		
		$status_param = is_array($params) && array_key_exists('status', $params) ? $params['status'] : true;
		$order_by = is_array($params) && array_key_exists('order_by', $params) ? $params['order_by'] : 'promo_created_date';
		$order = is_array($params) && array_key_exists('order', $params) ? $params['order'] : 'DESC';
		$limit = is_array($params) && array_key_exists('limit', $params) ? $params['limit'] : 10;

		$this->db->select('promo_id, promo_title, promo_content, promo_thumbnail_id, promo_created_date, promo_created_by, promo_edited_date, promo_edited_by');
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
		$query = $this->db->get_where( 'tbl_promos', array('promo_is_active' => $status_param) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->result();
			}
		}
		return false;

	}

	public function get_data_by_id($promo_id, $status = TRUE) {

		$this->db->select('promo_id, promo_title, promo_content, promo_thumbnail_id, promo_created_date, promo_created_by, promo_edited_date, promo_edited_by');
		$query = $this->db->get_where( 'tbl_promos', array('promo_id'=>$promo_id, 'promo_is_active'=>$status) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		return false;

	}

	public function save_promo( $args ) {

		$this->db->trans_start();
		if ( array_key_exists('promo_id', $args) ) {
			// update
			$query = $this->db->update( 'tbl_promos', $args, array( 'promo_id' => $args['promo_id'], 'promo_is_active' => true ) );
			if ($query) {
				$this->db->trans_complete();
				return $args['promo_id'];
			}
		} else {
			// add
			$query = $this->db->insert( 'tbl_promos', $args );
			if ($query) {
				$last_id = $this->db->insert_id();
				$this->db->trans_complete();
				return $last_id;
			}
		}
		
	}

	// Delete / Restore
	public function delete_restore_promo($promo_id, $action = false /*true for restore, false for delete*/) {
		$where_status = $action == false ? true : false;
		if ( $this->db->update( 'tbl_promos', array('promo_is_active' => $action), array('promo_is_active' => $where_status, 'promo_id' => $promo_id)) ) {
			return true;
		}
	}

}
?>