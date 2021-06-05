<?php
class Admin_model extends CI_Model
{
	function authenticate($username, $secret)
    {
        $this->db->where('email', $username); //->get($this->table)->result();
        $this->db->where('password', md5(trim($secret)));
        $row = $this->db->get('admins')->row();
        log_message("debug", $this->db->last_query());
        return $row;
    }

	public function check_email_exists($email)
	{
		$query = $this->db->get_where('admins', array(
			'email' => $email
		));
		if (empty($query->row_array())) {
			return true;
		} else {
			return false;
		}
	}

    public function chkAdminExist(){
        $chkAdmin = $this->db->where(array('user_status' => 'ADMIN'))->get('admins');
        if ($chkAdmin->num_rows() > 0){
            return $chkAdmin->row();
        }
    }

    public function chkUserExist(){
        $chkUser = $this->db->where(array('user_status' => 'USER'))->get('admins');
        if ($chkUser->num_rows() > 0){
            return $chkUser->row();
        }
    }

	public function adminExists($email, $password){
	    $chkAdmin = $this->db->where(array('email' => $email, 'password' => $password))->get('admins');
	    if ($chkAdmin->num_rows() > 0){
	        return $chkAdmin->row();
        }
	}
	
    public function getalladmins(){
		$this->db->order_by('id','desc');
		$this->db->limit(5);
        $this->db->select("*");
        $query = $this->db->from('admins');
        $query = $this->db->get();
        return $query->result();

	}
	
	public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('admins');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
        $this->db->update('admins', $userdata);
    }
}
