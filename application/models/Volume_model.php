<?php
    class Volume_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }
        //=========================================================
        //Get Volumes
        //=========================================================
        public function get_volumes(){
            
            $query = $this->db->get('volumes');
            return $query->result_array();

            $query = $this->db->get_where('volumes', array('volumeid' => $id));
            return $query->row_array();
        }
        //=========================================================
        //Get Volume by ID
        //=========================================================
        public function get_volume_by_id($volumeid){
            
            $query = $this->db->get_where('volumes', array('volumeid' => $volumeid));
            return $query->row_array();
        }
        //=========================================================
        //Add Volume
        //=========================================================
        public function add_volume($data){
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('volumes', $data)) {
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
        //=========================================================
        //Delete volume
        //=========================================================
        public function delete_volume($volumeid){
            $this->db->where('volumeid',$volumeid);
            $this->db->delete('volumes');
            return true;
        }
        //=========================================================
        //Edit Volume
        //=========================================================
        public function edit_volume(){
            $volumeid = url_title($this->input->get('volumeID'));

            $data = array(
                'vol_name' => $this->input->post("volumeName"),
                'description' => $this->input->post("description"),
            );

            $this->db->where('volumeid',$volumeid);
            return $this->db->update('volumes',$data);
        }
        //=========================================================
        //Update Volume
        //=========================================================
        public function update_volume($id, $data)
    {
        $this->db->where('volumeid', $id);
        return $this->db->update('volumes', $data);
    }
}