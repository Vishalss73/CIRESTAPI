<?php 
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;
class login extends RestController {
public function __construct() {
parent::__construct();
$this->load->model('/apidata');
}
public function index_get() {
    //$apidatac = new apidata;
    $apidata = $this->apidata->get_apidata();
    $this->response($apidata, 200);
}
public function index_post(){
    $data = array (
   'demoname' => $this->input->post('name'),
    'demoaddress' => $this->input->post('pass')
    );
    $apidata = $this->apidata->post_apidata($data);
    if($apidata>0) {
$this->response([
    'status'=>true,
    'message' => 'Data Inserted Successfully'
], 
RestController::HTTP_OK);

    }
    else {
        $this->response([
        'status'=>false,
    'message' => 'There is Error'
], RestController::HTTP_BAD_REQUEST);
    }
}
public function index_put(){
    $id = $this->uri->segment(3);
    $data = array (
   'demoname' => $this->input->get('name'),
    'demoaddress' => $this->input->get('pass')
    );
    $apidata = $this->apidata->put_apidata($id, $data);
    if($apidata>0) {
$this->response([
    'status'=>true,
    'message' => 'Data Successfuly Updated'
], 
RestController::HTTP_OK);

    }
    else {
        $this->response([
        'status'=>false,
    'message' => 'There is Error'
], RestController::HTTP_BAD_REQUEST);
    }
}
public function index_delete(){
    $id = $this->uri->segment(3); 
    $apidata = $this->apidata->delete_apidata($id);
    if($apidata>0) {
$this->response([
    'status'=>true,
    'message' => 'Data deleted Successful'
], 
RestController::HTTP_OK);

    }
    else {
        $this->response([
        'status'=>false,
    'message' => 'There is Error'
], RestController::HTTP_BAD_REQUEST);
    }
}

}
?>