<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class transfer_order extends CI_Controller {

    public function calculate()
    {   
        $distance = $this->input->post('distance');
        $fixedQuery = $this->db->get_where('transfer_clculation', array('fixed' => 1));
        
        foreach($fixedQuery->result() as $row){
            $kilometerRange = explode('-', $row->kilometer);
            if($distance == $kilometerRange[0] OR $distance <= $kilometerRange[1]){
                echo money_format('%i', $row->total_price); 
                die;
            }
        }       
        
        $where = array('car_type' => $this->input->post('car_type'),
                        'kilometer <'=> $distance);
        
        $this->db->order_by("kilometer", "desc"); 
        $query = $this->db->get_where('transfer_clculation', $where);
        
        echo money_format('%i', $query->row()->kilometer_price * $distance) ;            
    }
    

    public function new_order()
    {  
        $_GET['pickup_date'] = date($_GET['pickup_year']."-".$_GET['pickup_month']."-".$_GET['pickup_day']." ".$_GET['pickup_hour'].":".$_GET['pickup_minute']);
        unset($_GET['pickup_year']); 
        unset($_GET['pickup_month']);        
        unset($_GET['pickup_day']);        
        unset($_GET['pickup_hour']);        
        unset($_GET['pickup_minute']);   
        $_GET['order_status'] = 'Pending';            
        
        if($this->session->userdata('user_id')){     
            $_GET['user'] = $this->session->userdata('user_id');    
            $this->db->insert('transfer_order', $_GET);
            $this->session->set_flashdata('create_order_successful', 'successfully created a new transfer order');
            redirect('');
        }
        else{
            $this->session->set_userdata('unsubmitted_order',$_GET);
            $this->session->set_flashdata('please_login', 'Please login or register a new account to process your order');
            redirect('auth/login');
        }
    }  
    
   
}
