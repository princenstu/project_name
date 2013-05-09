 <?php
class Contact_Model extends CI_Model
{
       public function saveContact($data)
        {
            $this->db->insert('tbl_contact',$data);
        }
        function selectContact($user_id)
	{

            $this->db->select ( '*' );
            $this->db->from ( 'tbl_contact' );
            $this->db->where ( 'user_id',$user_id);
            $resultSet = $this->db->get ();
            return $resultSet->result ();
	}
       
        function searchContact($user_id,$search_text)
	{
            //echo '---'.$user_id;
           // echo '----'.$search_text;
           // exit();
            $this->db->select ( '*' );
            $this->db->from ( 'tbl_contact' );
            $this->db->where ( 'user_id',$user_id);
            //$cond="contact_email='$search_text' OR contact_name='$search_text' ";
            $this->db->where('contact_email',$search_text);
            $this->db->or_where('contact_phone',$search_text);
            $this->db->or_where('contact_name',$search_text);
             //$this->db->where ($cond);
           

            $resultSet = $this->db->get ();
            return $resultSet->result ();
	} 
        function selectContactById($contact_id)
        {
           $this->db->select ( '*' );
            $this->db->from ( 'tbl_contact' );
            $this->db->where ( 'contact_id',$contact_id);

            $resultSet = $this->db->get ();
            return $resultSet->row ();
        }
        function deleteContact($contact_id)
        {
            $this->db->where('contact_id', $contact_id);
            $this->db->delete('tbl_contact');
        }
         function editContact ($data)
	{
            $this->db->set('user_id', $data['user_id']);
            $this->db->set('contact_name', $data['contact_name']);
            $this->db->set('contact_email', $data['contact_email']);
            $this->db->set('contact_org', $data['contact_org']);
            $this->db->set('contact_fid', $data['contact_fid']);
            $this->db->set('contact_phone', $data['contact_phone']);
            $this->db->where('contact_id', $data['contact_id']);
            $this->db->update('tbl_contact');


	}
        
}