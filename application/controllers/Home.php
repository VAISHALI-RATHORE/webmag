<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('article');
  	}
	
	 public function index() {
	    $data['main_view'] = 'Body';
	    $data['latest_articles'] = $this->article->get_latest_article();
	    $data['promoted_articles'] = $this->article->get_promoted_article();
        $data['pop_articles'] = $this->article->get_popular_article();
	    $this->load->view('master', $data);
	}
	
	public function post_data($id){
		    $data['main_view'] = 'Blog_post';
		    $data['data_article']=$this->article->get_article_data($id);
		    $data['pop_articles'] = $this->article->get_popular_article();
		    $data['latest_articles'] = $this->article->get_latest_article();
		    $data['promoted_articles'] = $this->article->get_promoted_article();
		    $data['data_comment']=$this->article->fetch_comment($id);

	        $this->load->view('master',$data);
  	}
    
	public function category_data($category){
		    $new = str_replace('%20', ' ', $category);
            $data['main_view'] = 'Blog_category';
		    $data['data_categories']=$this->article->get_category_data($new);
            $data['latest_articles'] = $this->article->get_latest_article();
            $data['pop_articles'] = $this->article->get_popular_article();
		    $this->load->view('master',$data);
  	}
  	public function about_data(){
		    $data['main_view'] = 'about';
		    $data['pop_articles'] = $this->article->get_popular_article();
		    $data['latest_articles'] = $this->article->get_latest_article();
		    $this->load->view('master',$data);
  	}
   public function contact_data(){
		    $data['main_view'] = 'Contact';
		    $data['latest_articles'] = $this->article->get_latest_article();
		    $this->load->view('master',$data);
  	}
  	public function insert(){

		 if ($this->input->post()) {
		    $name = $this->input->post('name');
		    $email = $this->input->post('email');
		    $website = $this->input->post('website');
            $comment = $this->input->post('comment');
			$blog_id = $this->input->post('blog_id');
         
            $data = array( 'name' => $name ,'email' => $email,'comment' => $comment ,'website'=>$website, 'blog_id' => $blog_id 
            );
          
            $this->article->comment_insert($data);
           
        }
    }

}