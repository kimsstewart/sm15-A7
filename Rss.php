
<?php
//controllers/Rss.php
class Rss extends CI_Controller {
   
	public function __construct(){
  
		//this echos the controller
        parent::__construct();
        $this->load->model('rss_model');
        $this->config->set_item('banner', 'RSS News Feed');
        $this->config->set_item('title', 'RSS Feed');
   	}//end construct()
       
    public function index(){
	    
        $data['rss'] = $this->rss_model->get_rss();
        $data['title'] = 'RSS';
        $this->load->view('rss/index', $data);
    }//end index()
    
    public function view($slug = NULL){
	    
        $data['rss_item'] = $this->rss_model->get_rss($slug);
        
        if(empty($data['rss_item']))
        {
            show_404();
        }        
            
        $data['title'] = $data['rss_item']['title'];
        $this->load->view('rss/view', $data);
     }//end view()
}//end Rss