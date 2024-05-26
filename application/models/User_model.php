<?php
    class User_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function get_user(){
            
            $query = $this->db->get('users');
            return $query->result_array();

            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
        }
        public function get_user_by_id($userid){
            
            $query = $this->db->get_where('users', array('userid' => $userid));
            return $query->row_array();
        }

        public function add_user($data)
	{
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('users', $data)) {
				// Return the ID of the newly inserted article
				return $this->db->insert_id();
			} else {
				// Return false if the insert operation failed
				return false;
			}
		} else {
			// Return a message if no data was provided
			return 'No data provided to insert';
		}
	}
        public function delete_user($userid){
            $this->db->where('userid',$userid);
            $this->db->delete('users');
            return true;
        }

        //edit user
        public function edit_user(){
            $userid = url_title($this->input->get('userID'));

            $data = array(
                'complete_name' => $this->input->post("completeName"),
                'email' => $this->input->post("email"),
                'pword' => $this->input->post("pword"),
                'role' => $this->input->post("role"),
                'status' => $this->input->post("status"),
            );

            $this->db->where('userid',$userid);
            return $this->db->update('users',$data);
        }

        public function update_user($id, $data)
    {
        $this->db->where('userid', $id);
        return $this->db->update('users', $data);
    }
    public function get_roles(){
            
        $query = $this->db->get('roles');
        return $query->result_array();

        $query = $this->db->get_where('roles', array('role_id' => $id));
        return $query->row_array();
    }
}