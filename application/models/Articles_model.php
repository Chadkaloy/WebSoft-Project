<?php
    class Articles_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }
        //=========================================================
        //Get Article
        //=========================================================
        public function get_articles(){
            
            $query = $this->db->get('articles');
            return $query->result_array();
 
            $query = $this->db->get_where('articles', array('articleid' => $id));
            return $query->row_array();
        }
        //=========================================================
        //Get Article by ID
        //=========================================================
        public function get_article_by_id($articleid){
            
            $query = $this->db->get_where('articles', array('articleid' => $articleid));
            return $query->row_array();
        }
        //=========================================================
        //Add Article
        //=========================================================
        public function add_article($data){
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('articles', $data)) {
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
        //Add Article_author
        //=========================================================
        public function update_articles($data,$id){
            $this->db->where('articlesid',$id);
            $this->db->update('articles',$data);
        }

        //=========================================================
        //Delete Article
        //=========================================================
        public function delete_article($articleid){
            $this->db->where('articleid',$articleid);
            $this->db->delete('articles');
            return true;
        }
        //=========================================================
        //Edit Article
        //=========================================================
        public function edit_article(){
            $articleid = url_title($this->input->get('articleid'));

            $data = array(
                'title' => $this->input->post("title"),
                'keywords' => $this->input->post("keywords"),
                'abstract' => $this->input->post("abstract"),
                'published' => $this->input->post("published"),
                'filename' => $this->input->post("filename"),
                'doi' => $this->input->post("doi"),
                'volumeid' => $this->input->post("volumeid"),
            );

            $this->db->where('articleid',$articleid);
            return $this->db->update('articles',$data);
        }
        //=========================================================
        //Update Article
        //=========================================================
        public function update_article($id, $data)
    {
        $this->db->where('articleid', $id);
        return $this->db->update('articles', $data);
    }
    public function get_articles_by_volume($id){
        // $query = $this->db->get('articles');
        // return $query->result_array();

        $query = $this->db->get_where('articles', array('volumeid' => $id));
        return $query->result_array();
    }
}