<?php
class Login_Model extends CI_Model
{
    function saveUser($data)
    {
        $this->db->insert('tbl_user',$data);
        $id = $this->db->insert_id();
        return $id;
    }
    function userProduct($data)
    {
        $this->db->insert('user_product',$data);
        $id = $this->db->insert_id();
        return $id;
    }
    
    function loginCheck($email_address,$password)
	{

            $this->db->select ( '*' );
            $this->db->from ( 'tbl_user1' );
            $this->db->where ( 'email_address', $email_address );
            $this->db->where ( 'password', md5 ($password) );
            $resultSet = $this->db->get ();
            return $resultSet->row ();
	}
    
       
}
?>