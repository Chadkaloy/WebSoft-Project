<?php
    class Roles_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function get_roles(){
            
            $query = $this->db->get('roles');
            return $query->result_array();

            $query = $this->db->get_where('roles', array('role_id' => $id));
            return $query->row_array();
        }
        public function get_roles_by_id($rolesid){
            
            $query = $this->db->get_where('roles', array('role_id' => $rolesid));
            return $query->row_array();
        }

        public function add_roles($data)
	{
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('roles', $data)) {
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
        public function delete_roles($rolesid){
            $this->db->where('role_id',$rolesid);
            $this->db->delete('roles');
            return true;
        }

        //edit user
        public function edit_roles(){
            $rolesid = url_title($this->input->get('role_id'));

            $data = array(
                'role_name' => $this->input->post("roleName"),
            );

            $this->db->where('role_id',$rolesid);
            return $this->db->update('roles',$data);
        }

        public function update_roles($id, $data)
    {
        $this->db->where('role_id', $id);
        return $this->db->update('roles', $data);
    }
}