public function add_article(){

if ( ! $this->upload->do_upload('article_pdf'))
{
        $error = array('error' => $this->upload->display_errors());
        echo $error['error'];
}
else
{
        $data = array('upload_data' => $this->upload->data());
}
$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];


$data = array(
    'abstract' => $this->input->post('abstract'),
    'volume_id' => $this->input->post('volume'),
    'file_name' => $filename,
    'title' => $this->input->post('title'),
    'doi' => $this->input->post('doi'),
    'keywords' => $this->input->post('keywords'),

);
$this->db->insert('articles', $data);
$article_id = $this->db->insert_id();


foreach ($this->input->post('author') as $author){
    $authordata = array(
        'article_id' => $article_id,
        'author_id' => $author,
    );
    $this->db->insert('article_author', $authordata);
}
}
//controller



public function create(){
$this->load->model('Article_model');

$data['volumes'] = $this->Volume_model->view_volumes();

$data['authors'] = $this->Author_model->view_authors();

$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('doi', 'DOI', 'required');
$this->form_validation->set_rules('keywords', 'Keywords', 'required');
$this->form_validation->set_rules('abstract', 'Abstract', 'required');
$this->form_validation->set_rules('volume', 'Volume', 'required');
$this->form_validation->set_rules('author[]', 'Authors', 'required');

$config['upload_path']          = 'assets/cmujs_pdf/';
$config['allowed_types']        = 'pdf';
$config['max_size']             = 2048;
$config['max_width']            = 1024;
$config['max_height']           = 768;

$this->load->library('upload', $config);
$this->upload->initialize($config);


if($this->form_validation->run() === FALSE){
    $this->load->view('templates/header');
    $this->load->view('articles/create_article', $data);
    $this->load->view('templates/footer');
    $this->load->helper('url');
} else {
    $this->Article_model->add_article();
    redirect('articles');
}
}