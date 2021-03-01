<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct()
    {
    	parent::__construct();
        $this->load->model('My_model');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function page($data){
    	$this->load->view('layouts/main', $data);
    }

    public function addtabel($tabel,$params){
        return $this->My_model->add($tabel,$params);
    }

    public function getAllTabel($tabel){
        return $this->My_model->get_all_tabel($tabel);
    }

    public function getTabel($where,$tabel){
        return $this->My_model->get_tabel($where,$tabel);
    }

    public function getTabelArray($where,$tabel){
        return $this->My_model->get_tabel_array($where,$tabel);
    }

    public function updatetabel($where,$tabel,$params){
        return $this->My_model->update($where,$tabel,$params);
    }

    public function execSQL($sql){
        return $this->My_model->execSQL($sql);
    }

	public function execSQLRow($sql){
		return $this->My_model->execSQLRow($sql);
	}

    public function delete_tabel($where,$tabel){
        return $this->My_model->delete_tabel($where,$tabel);
    }

    public function uploadFilesRename($name,$file,$path,$ext){
        $config['upload_path']          = $path;
        $config['allowed_types']        = $ext;
        $config['file_name']            = $name;
        $config['file_ext_tolower']     = TRUE;
        $config['remove_spaces']        = TRUE;
        $config['detect_mime']        	= TRUE;
        $config['mod_mime_fix']        	= TRUE;
        $config['overwrite']     		= TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload($file)){
            $data=array();
            $error = array('error' => $this->upload->display_errors());
            $data['success']=0;
            $data['error']=$error;
            return $data;
        }else{
            $data=array();
            $image_data = $this->upload->data();
            $data['success']=1;
            $data['data']=$image_data;
            $name = $image_data['file_name'];

            return $data;
        }
    }

}

/* End of file Controllername.php */

?>
