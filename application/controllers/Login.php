<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
		$this->load->model('My_model');

		if(isset($this->session->userdata['your_session_prefix_username'])){
			redirect('dashboard/index');
		}
    }

	public function index()
	{
		$vals = array(
			'img_path'	 => './captcha/',
			'img_url'	 => site_url().'captcha/',
			'img_width'	 => '200',
			'img_height' => 30,
			'word_length'   => 4,
			'font_size'     => 16,
			'border' => 0,
			'expiration' => 7200,
			'pool'          => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
		);

		$cap = create_captcha($vals);
		$data['image'] = $cap['image'];
		$this->session->set_userdata('mycaptcha', $cap['word']);

		$this->load->view('login/index',$data);
	}

	public function process(){
		if($this->input->post('security_code')==$this->session->userdata('mycaptcha')){

			$where = array (
				"username" => $this->input->post('username',TRUE),
				"password" => sha1($this->input->post('password', TRUE)),
			);

			$login_id = $this->My_model->get_tabel($where, "user");

			if(isset($login_id['username'])){
				$this->session->set_userdata('your_session_prefix_id',$login_id['id']);
				$this->session->set_userdata('your_session_prefix_username',$login_id['username']);
				$this->session->set_userdata('your_session_prefix_nama',$login_id['nama']);
				redirect('dashboard/index');
			}
			else{
				$this->session->set_flashdata('message', '<i class="fa fa-warning"></i> &nbsp; Login Gagal !');
				redirect('login/index');
			}
		}
		else{
			$this->session->set_flashdata('message', '<i class="fa fa-warning"></i> &nbsp; Login Gagal ! Captcha Salah');
			redirect('login/index');
		}
	}

}

/* End of file Controllername.php */

?>
