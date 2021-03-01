<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model
{
    function add($tabel,$params){
        return $this->db->insert($tabel,$params);
    }

    function update($where,$tabel,$params){
        $this->db->where($where);
        return $this->db->update($tabel,$params);
    }

    function get_all_tabel($tabel){
        return $this->db->get($tabel)->result_array();
    }

    function get_tabel($where,$tabel){
        $this->db->where($where);
        return $this->db->get($tabel)->row_array();
    }

    function get_tabel_array($where,$tabel){
        $this->db->where($where);
        return $this->db->get($tabel)->result_array();
    }

    function execSQL($sql){
        return $this->db->query($sql)->result_array();
    }

	function execSQLRow($sql){
		return $this->db->query($sql)->row_array();
	}

    function delete_tabel($where,$tabel){
        $this->db->where($where);
        return $this->db->delete($tabel);
    }

}

/* End of file .php */

?>
