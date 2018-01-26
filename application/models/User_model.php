<?php

class User_model extends CI_Model {

    public $data;

    public function __construct() {
        parent::__construct();

    }

    function user( $email ){

      $sql = "SELECT nimhs, namamhs, email, password
              FROM siska_mahasiswa
              WHERE email='".$email."'";
      // var_dump($sql);

      $query = $this->db->query( $sql );

      //if( !empty( $query->row_array() ) ) {
        return $query->row_array();
    //  }

    //  return false;
    }


    function listmhs(){
      $query = $this->db->query("SELECT * FROM siska_mahasiswa");
      return $query->result_array();
    }

}

?>
