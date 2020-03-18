<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';
 
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Uploads_api extends \Restserver\Libraries\REST_Controller {
    
 
        public function index_post(){
    
        $config['upload_path'] = './img4/';
        $config['allowed_types'] = '*';
        $config['max_size']  = '1000000000';
        $config['max_width']  = '1000000000';
        $config['max_height']  = '1000000000';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('file')){
            $error = array('error' => $this->upload->display_errors());
            $this->response(array(
                'status' => 'false',
                 'error' => $error
                ));
        }
        else{
            $data = array('upload_data' => $this->upload->data());
             $this->response(array(
            'status' => 'true',
             'error' => 'kk'
            ));
            // $filename = $data['file_name'];
            // $arr=array(
            //     'Name_image4'=>$filename,
            //     'id_Problem'=>$idp
            // );
            
            // $this->db->insert('Images4', $arr);
            
        
        }
        // $config['upload_path'] = './img4/';
        // $config['allowed_types'] = '*';
        // $config['max_size']  = '1000000000';
        // $config['max_width']  = '1000000000';
        // $config['max_height']  = '1000000000';
        
        // $this->upload->initialize($config);
        
        // if ( ! $this->upload->do_upload('file')){
        //     $error = array('error' => $this->upload->display_errors());
        // }
        // else{
        //     $data = array('upload_data' => $this->upload->data());
            
        // }
    
    
        }
    

}