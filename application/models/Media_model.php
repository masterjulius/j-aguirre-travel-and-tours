<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media_model extends CI_Model {

	public function get_datas( $params = null ) {
		
		$status_param = is_array($params) && array_key_exists('status', $params) ? $params['status'] : true;
		$order_by = is_array($params) && array_key_exists('order_by', $params) ? $params['order_by'] : 'media_created_date';
		$order = is_array($params) && array_key_exists('order', $params) ? $params['order'] : 'DESC';

		$this->db->select('media_id, media_name, media_orig_name, media_type, media_extension, media_extra_meta_data, media_created_date, media_created_by, media_edited_date, media_edited_by');
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
		$query = $this->db->get_where( 'tbl_media', array('media_is_active' => $status_param) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->result();
			}
		}
		return false;
		
	}

	public function get_thumbnail_by_id( $thumbnail_id, $status = TRUE ) {

		$this->db->select('media_id, media_name, media_orig_name, media_type, media_extension, media_extra_meta_data, media_created_date, media_created_by, media_edited_date, media_edited_by');
		$query = $this->db->get_where( 'tbl_media', array('media_id' => $thumbnail_id, 'media_is_active' => $status) );
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		return false;

	}

}
?>