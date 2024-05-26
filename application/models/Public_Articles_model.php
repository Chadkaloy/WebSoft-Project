<?php
    class Public_Articles_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function get_articles_with_authors(){
            
            $this->db->select('article_author.*, articles.*,authors.author_name');
            $this->db->from('article_author');
            $this->db->join('articles', 'articles.articleid = article_author.article_id', 'inner');
            $this->db->join('authors', 'authors.auid = article_author.audid', 'inner');

            $query = $this->db->get ();
            return $query->result_array();
        }
        public function get_articles(){
            
            $query = $this->db->select('*')
            ->from('articles')
            ->where('published', TRUE);

            // Execute the query
            $result = $query->get();

            // Check if the query returned any rows
            if ($result->num_rows() > 0) {
            // Retrieve the results as an array of associative arrays
            return $result->result_array();
            } else {
            // Optionally, return an empty array or handle the case where no articles are found
            return [];
            }
        }
        public function get_volumes(){
            
            $query = $this->db->get('volumes');
            return $query->result_array();

            $query = $this->db->get_where('volumes', array('volumeid' => $id));
            return $query->row_array();
        }
        public function get_authors(){
            
            $query = $this->db->get('authors');
            return $query->result_array();

            $query = $this->db->get_where('authors', array('auid' => $id));
            return $query->row_array();
        }
    }