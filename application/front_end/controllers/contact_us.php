<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_us extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        
        $query = $this->db->get('contact_us');
        $data['addreses'] = $query->result();
        
        $return['first_content'] = $this->load->view('contact_us/index',$data,TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }
    
    public function process()
    {
        unset($_POST['submit']);
        $this->db->insert('inbox', $_POST);
        $this->session->set_flashdata('msg', 'Thank you for Contacting Us, We will get back to you as soon as possible');
        redirect('contact_us');        
    }    
}
