<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_main extends CI_Model
  {

    function select($table, $where = null)
    {
      if($where == null){
        return $this->db->get($table);
      } else {
        return $this->db->get_where($table, $where);
      }

    }

    function add_data($table, $data)
    {
      return $this->db->insert($table, $data);
    }

    function edit_data($table, $data, $where)
    {
      $this->db->where($where);
      return $this->db->update($table, $data);
    }

    function hapus_data($table, $where)
    {
      $this->db->where($where);
      return $this->db->delete($table);
    }

  }

?>
