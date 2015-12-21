<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class manage extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null) {
        $this->load->view('mainlayout', $output);
    }

    public function index() {
        $this->_example_output((object) array
                    ('output' => '',
                    'js_files' => array(),
                    'css_files' => array())
        );
    }

    public function services() {
        
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('our_service');
        $crud->set_subject('Service');
        $crud->change_field_type('publish', 'true_false');
        $crud->columns('title','description','publish');
        
        $crud->required_fields('title','description','image','icon','publish');

        $crud->set_field_upload('image', 'assets/uploads/our_services');

        $output = $crud->render();

        $this->_example_output($output);
    }
    
    public function car_type() {
        
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('car_type');
        $crud->set_subject('Car Type');
        
        $crud->required_fields('type_name');

        $output = $crud->render();

        $this->_example_output($output);
    }  
    
    public function our_fleet()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('our_fleet');
        $crud->set_relation('car_type','car_type','type_name');
        $crud->set_subject('Our Fleet');
                
        $output = $crud->render();

        $this->_example_output($output);
    }
    
    public function top_cities()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('top_cities');
        $crud->set_subject('City');
        
        $crud->change_field_type('publish', 'true_false');
        
        $crud->required_fields('title','description','image','icon','publish');

        $crud->set_field_upload('image', 'assets/uploads/top_cities');                
        $output = $crud->render();

        $this->_example_output($output);
    }  
    
    public function special_request()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('special_request');  
        
        $crud->columns('full_name','email','message');
        
        $crud->unset_add();
        $crud->unset_edit();
            
        $output = $crud->render();

        $this->_example_output($output);
    }   
    
    public function about_us()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('about_us');  
            
        $crud->change_field_type('default', 'true_false');
        
        $output = $crud->render();

        $this->_example_output($output);
    }
    
    public function inbox()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('inbox');  
                    
        $crud->columns('full_name','email','message');
        
        $crud->unset_add();
        $crud->unset_edit();
        
        $output = $crud->render();

        $this->_example_output($output);
    }
    
    public function contact_us()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('contact_us'); 
        $crud->set_subject('Address');        

        $output = $crud->render();

        $this->_example_output($output);
    }   
    
    public function terms_condition()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('terms_conditions'); 
        $crud->set_subject('Terms & Condition');        

        $output = $crud->render();

        $this->_example_output($output);
    }
    
    public function faq()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('faq'); 
        $crud->set_subject('FAQ');        

        $output = $crud->render();

        $this->_example_output($output);
    }   
    
    public function newsletter()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('newsletter'); 

        $crud->unset_add();
        $crud->unset_edit();
        
        $output = $crud->render();

        $this->_example_output($output);
    }     
    
    public function blog()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('blog');
        $crud->set_subject('Article');
        
        $crud->change_field_type('publish', 'true_false');
        
        $crud->required_fields('title','description','image','publish');

        $crud->set_field_upload('image', 'assets/uploads/blog');                
        $output = $crud->render();

        $this->_example_output($output);
    }      
    
    public function transfer_clculation()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('transfer_clculation');
        $crud->set_relation('car_type','car_type','type_name');
        $crud->set_subject('Transfer');
                
        $crud->change_field_type('fixed', 'true_false');
        $crud->required_fields('car_type','kilometer','fixed');
        
        $output = $crud->render();

        $this->_example_output($output);
    }    

    public function transfer_order()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('transfer_order');
        
        $crud->columns('pickup_location','pickup_destination','price','order_status');
        
        $crud->add_action('Complete', '', 'manage/complete_order','ui-icon-check');
        
        $crud->set_relation('car_type','car_type','type_name');
        $crud->set_relation('car_model','our_fleet','car_name');
        $crud->set_relation('user','users','Username :- {username} <br>Email Address :- {email}');
                
        $crud->unset_add();
        $crud->unset_edit();
        
        $output = $crud->render();

        $this->_example_output($output);
    }  
    
    public function complete_order()
    {  
        $data = array('order_status' => 'Complete');

        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('transfer_order', $data);
        redirect('manage/transfer_order');
    } 
}
