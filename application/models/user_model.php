<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

  public function saveUser($data)
    {
      $this->db->insert('tbl_user1',$data);
    }

    function checkDuplicateEmail ($email_address)
	{
		$this->db->select('*');
		$this->db->from('tbl_user1');
		$this->db->where('email_address', $email_address);
		$query_result = $this->db->get();
		if (count($query_result->result()) > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}

    function selectUserByUserId($user_id)
	{
            $this->db->select ( '*' );
            $this->db->from ( 'tbl_user1' );
            $this->db->where ( 'user_id',$user_id);
            $resultSet = $this->db->get ();
            return $resultSet->row ();
	}

    public function updateUser($data)
    {
        $this->db->set('first_name', $data['first_name']);
        $this->db->set('last_name', $data['last_name']);
        $this->db->set('email_address', $data['email_address']);
        $this->db->set('address', $data['address']);
        $this->db->set('mob_number', $data['mob_number']);
        $this->db->set('city', $data['city']);
        $this->db->set('country', $data['country']);
        $this->db->set('zip_code', $data['zip_code']);
        $this->db->set('profile_picture', $data['profile_picture']);

        $this->db->where('user_id', $data['user_id']);
        $this->db->update('tbl_user1');
    }

    




}