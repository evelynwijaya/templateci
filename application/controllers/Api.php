<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
  public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function listmhs(){
      print "{\"data\":" . json_encode( $this->user_model->listmhs() ) . "}";
    }

    public function mhs( $email ){
      print "{\"data\":" . json_encode( $this->user_model->user($email) ) . "}";
    }

  }


  ?>
