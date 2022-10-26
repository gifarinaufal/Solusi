<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
 
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $config['total_rows'] = 200;
        $config['per_page'] = 20;
        $this->pagination->initialize($config);
 
     }
     function index(){ 
         $load = $this->db->get('posts')->result_array();
         $data['isi'] = $load;
         $this->load->view('home',$data);
     }
 
      function add_post(){
         $this->form_validation->set_rules('title','Title','required|min_length[20]');
         $this->form_validation->set_rules('category','Category','required|min_length[3]');
         $this->form_validation->set_rules('content','Content','required|min_length[200]'); 
   
           if ($this->form_validation->run()==FALSE){
      
            $this->load->view('add_post'); // file form_view.php
           }else{
            $title = $_POST['title'];
            $content = $_POST['content'];
             $category = $_POST['category'];
            $button = $_POST['id'];
            if($button == 1){
               $status = 'Publish';
            }else if($button = 2){
               $status = 'Draft';
            }
            $data = array('title'=>$title,'category'=>$category,'status'=>$status,'content'=>$content);
            $insert = $this->db->insert('posts',$data);
            if($insert){
               redirect('Home/index');
            }
            }
          
 
      }
     
      function edit_post($id){
         $this->form_validation->set_rules('title','Title','required|min_length[20]');
         $this->form_validation->set_rules('category','Category','required|min_length[3]');
         $this->form_validation->set_rules('content','Content','required|min_length[200]'); 
   
           if ($this->form_validation->run()==FALSE){
            $load = $this->db->where('id',$id)->get('posts')->result_array();
            $data['isi'] = $load;
            $this->load->view('edit_post',$data); // file form_view.php
           }else{
            $title = $_POST['title'];
            $content = $_POST['content'];
             $category = $_POST['category'];
            $button = $_POST['id'];
            if($button == 1){
               $status = "Publish";
            }else if($button == 2){
               $status = "Draft";
            }
            $data = array('title'=>$title,'category'=>$category,'status'=>$status,'content'=>$content);
            $insert = $this->db->where('id',$id)->update('posts',$data);
            if($insert){
               redirect('Home/index');
            }
            }
      }
      function trash($id){
         $data = Array('Status'=>"Thrash");
         $update = $this->db->where('id',$id)->update('posts',$data);
         if($update){
            redirect('Home/index');
         }
      }
      function preview(){
         $data = array('Status'=>"Publish");
         $banyak = $this->db->where($data)->get('posts')->num_rows();
         $this->load->library('pagination');

         $config['base_url'] = site_url('home/preview');
         $config['page_query_string'] = TRUE;
         $config['total_rows'] = $banyak;
         $config['per_page'] =1;
 
         $this->pagination->initialize($config);
         $limit = $config['per_page'];
         $offset = html_escape($this->input->get('per_page'));
         
         if (!$limit && $offset) {
         
               $load = $this->db->where($data)->get('posts')->result_array();

         } else {
            $load =  $this->db
               ->get_where('posts', ['Status' => 'Publish'], $limit, $offset)->result_array();
         }
       
            $datas['isi'] = $load;
            $this->load->view('preview',$datas); 
       
 
      }
}