<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function create_user($input)
    {
        $this->db->insert('users', $input);
        return $this->db->insert_id();
    }

    public function get_user($email)
    {
        $result = $this->db->where('email',$email)
                        ->get('users')->result_array();

        return (!empty($result))?$result[0]:false;
    }
}

