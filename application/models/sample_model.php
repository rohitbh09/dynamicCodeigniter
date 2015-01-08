<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sample_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getData(){
      $data = $this->db->get('sample_table')->result();
      return $data;
    }
}

?>