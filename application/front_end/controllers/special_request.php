<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class special_request extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $return['first_content'] = $this->load->view('special_request/index','',TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }
    
    public function process()
    {
        unset($_POST['submit']);
        $this->db->insert('special_request', $_POST);
        $this->session->set_flashdata('msg', 'Thank you for Contacting Us, We will get back to you as soon as possible');
        redirect('special_request');        
    }    
}
