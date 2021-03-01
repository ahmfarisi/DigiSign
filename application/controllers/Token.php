<?php
class Token extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!isset($this->session->userdata['your_session_prefix_username'])){
            redirect('login/index');
        }
    }
    
	function index() {
		$data['token'] = $this->getAllTabel("token");
		$data['_view']="token/index";
		$data['_usedtable'] = true;
		$this->page($data);
	}

	function add(){
        $this->form_validation->set_rules('request_by','Requested By','required');
        $this->form_validation->set_rules('needs','Needs','required');

        if($this->form_validation->run() != false) {

            $this->load->helper('string');
            $token =  sha1(random_string('alnum',20));

            $this->load->library('ciqrcode');
            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './resources/qrcode/cachedir/'; //string, the default is application/cache/
            $config['errorlog']     = './resources/qrcode/errorlog/'; //string, the default is application/logs/
            $config['imagedir']     = './resources/qrcode/imagedir/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);

            $image_name = $token.'.png'; //buat name dari qr code sesuai dengan nim

            $params['data'] = site_url().'token_check/verify/'.$token; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

            $params = array(
                'request_by' => $this->input->post('request_by'),
                'needs' => $this->input->post('needs'),
                'token' => $token,
                'qrcode' => 'resources/qrcode/imagedir/'.$image_name,
            );

            $token_id = $this->addtabel("token",$params);

            if($token_id>0){
                $this->session->set_flashdata('message', '<i class="fa fa-check"></i> &nbsp; Token Berhasil Ditambahkan');
                redirect('token/index');
            }
            else{
                $this->session->set_flashdata('message', '<i class="fa fa-warning"></i> &nbsp; Token Gagal Ditambahkan');
                echo "<script>window.history.back();</script>";
//                $error = $this->db->error();
//                print_r($error);
            }

		}
		else
		{
		    $data['_select2'] = true;
			$data['_view'] = 'token/add';
			$this->page($data);
		}
	}

	function delete($id){
        $where=array(
			'id'=>$id
		);
		$data['token'] = $this->getTabel($where,"token");

		if(isset($data['token']['id']))
		{
			$token_id = $this->delete_tabel($where, "token");

            if ($token_id > 0) {
                unlink($data["token"]["qrcode"]);
                $this->session->set_flashdata('message', '<i class="fa fa-check"></i> &nbsp; Token Berhasil Dihapus');
                redirect('token/index');
            } else {
                $this->session->set_flashdata('message', '<i class="fa fa-warning"></i> &nbsp; Token Gagal Dihapus');
                echo "<script>window.history.back();</script>";
//                $error = $this->db->error();
//                print_r($error);
            }
		}
	}

}
