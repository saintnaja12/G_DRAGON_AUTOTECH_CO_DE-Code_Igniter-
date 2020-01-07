<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_regis_model');
    }

    public function index()
    {
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_manage');
        $this->load->view('Manager_car_regis_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function show($idCarregis)
    {
        $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_manage');
        $this->load->view('Manager_car_regis_show_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

}

/* End of file Hello.php */
