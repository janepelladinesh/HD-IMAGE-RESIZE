<?php

class img extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('image_lib');
        
    }
    function index()
    {
        $this->load->view('resize');
    }
    function resize()
    {
        $config['width']= $this->input->post('width');
        $config['height']= $this->input->post('height');
                $config['source_image']='./resize/images.jpg';
                     $config['new_image']='./resize/n_images.jpg';
                     $this->image_lib->initialize($config);
                  if(!$this->image_lib->resize())
                  {
                      echo $this->image->display_errors();
                      
                  }
                  else{
                  echo  "resized succesfully";}
                  
                  $this->load->view('resize');
    }
}
?>