<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $where = array('order_status' => 'Pending');        
        $query = $this->db->get_where('transfer_order', $where);
        $result['orders'] = $query->result();
        
        $data['output'] = $this->load->view('home',$result,TRUE);

        $data['css_files'] = array();
        $data['js_files'] = array();
        
        $this->load->view('mainlayout',$data);
    }
}
