<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config_model extends CI_Model {

	public function get_config_settings($params = null) {

		$this->db->select('conf_id, conf_site_name, conf_site_description, conf_featured_message, conf_about, conf_contact_info, conf_copyright_message, conf_edited_date, conf_edited_by');
		$this->db->order_by('conf_edited_date', 'DESC');
		$query = $this->db->get('tbl_config', 1);
		if ($query) {
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		return false;

	}

	public function get_config_settings_by_id($config_id) {

	}

	public function save_settings($args, $config_id) {

		if ( $this->db->update( 'tbl_config', $args, array( 'conf_id' => $config_id ) ) ) {
			return true;
		}
		return false;

	}

}
?>