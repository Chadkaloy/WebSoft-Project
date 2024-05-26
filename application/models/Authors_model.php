<?php
    class Authors_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }
        //=========================================================
        //Get Author
        //=========================================================
        public function get_authors(){
            
            $query = $this->db->get('authors');
            return $query->result_array();

            $query = $this->db->get_where('authors', array('auid' => $id));
            return $query->row_array();
        }
        //=========================================================
        //Get Author by ID
        //=========================================================
        public function get_author_by_id($auid){
            
            $query = $this->db->get_where('authors', array('auid' => $auid));
            return $query->row_array();
        }
        //=========================================================
        //Add Author
        //=========================================================
        public function add_author($data){
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('authors', $data)) {
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
        //Delete Author
        //=========================================================
        public function delete_author($auid){
            $this->db->where('auid',$auid);
            $this->db->delete('authors');
            return true;
        }
        //=========================================================
        //Edit Author
        //=========================================================
        public function edit_author(){
            $auid = url_title($this->input->get('auid'));

            $data = array(
                'author_name' => $this->input->post("authorName"),
                'email' => $this->input->post("email"),
                'contact_num' => $this->input->post("contactNum"),
            );

            $this->db->where('auid',$auid);
            return $this->db->update('authors',$data);
        }
        //=========================================================
        //Update Author
        //=========================================================
        public function update_author($id, $data)
    {
        $this->db->where('auid', $id);
        return $this->db->update('authors', $data);
    }


    public function insert_article_author($data){
        if (!empty($data)) {
            // Assuming 'article_id' and 'author_id' are the columns in your 'article_author' table
            // Insert the data into the 'article_author' table
            if ($this->db->insert('article_author', $data)) {
                // Return the ID of the newly inserted article author (if applicable)
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
}