<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Social_model extends CI_Model {

	public function get_social_accounts($params = null) {

		$this->db->select('social_id, social_facebook, social_twitter, social_linkedin, social_google_plus, social_edited_date, social_edited_by');
		$this->db->order_by('social_edited_date', 'DESC');
		$query = $this->db->get('tbl_social', 1);
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		return false;

	}

	public function get_social_accounts_by_id($social_id) {

	}

	public function save_accounts($args, $social_id = null) {

		if ( is_numeric($social_id) ) {
			if ( $this->db->update( 'tbl_social', $args, array( 'social_id' => $social_id ) ) ) {
				return true;
			}
		} else {
			if ( $this->db->insert( 'tbl_social', $args ) ) {
				return $this->db->insert_id();
			}
		}
		return false;

	}

}
?>