<?php
class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!isset($this->session->userdata['your_session_prefix_username'])){
            redirect('login/index');
        }

    }

    function profile() {
        $where=array(
            'id'=> $this->session->userdata['your_session_prefix_id'],
        );

        $data['user'] = $this->getTabel($where,"user");

        if(isset($data['user']['id'])) {
            $this->form_validation->set_rules('nama','Nama Pengguna','required');
            $this->form_validation->set_rules('username','Username','required');

            if(trim($this->input->post('password'))!=""){
                $this->form_validation->set_rules('password','Password','required');
            }

            if ($this->form_validation->run() != false) {
                if(trim($this->input->post('password'))!=""){
                    $params = array(
                        'nama' => $this->input->post('nama'),
                        'username' => $this->input->post('username'),
                        'password' => sha1($this->input->post('password')),
                    );
                }
                else{
                    $params = array(
                        'nama' => $this->input->post('nama'),
                        'username' => $this->input->post('username'),
                    );
                }

                $user_id = $this->updatetabel($where, "user", $params);

                if ($user_id > 0) {
                    redirect('logout/proses');
                    $this->session->set_flashdata('message', '<i class="fa fa-check"></i> &nbsp; Profil Berhasil Diubah');
                }
                else {
                    $this->session->set_flashdata('message', '<i class="fa fa-warning"></i> &nbsp; Profil Gagal Diubah');
                    echo "<script>window.history.back();</script>";
//                $error = $this->db->error();
//                print_r($error);
                }
            }
            else {
                $data['_select2'] = true;
                $data['_view'] = 'user/profile';
                $this->page($data);
            }

        }
    }

}