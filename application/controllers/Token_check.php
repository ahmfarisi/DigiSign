<?php
class Token_check extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function verify($token){
        $where=array(
            'token'=>$token
        );
        $data['token'] = $this->getTabel($where,"token");

        if(isset($data['token']['id']))
        {
            $params = array (
                'visited_count' => $data['token']['visited_count'] + 1
            );
            $token_id = $this->updatetabel($where,"token",$params);
            if($token_id > 0){
                $this->load->view('token/check', $data);
            }
            else{
                $this->load->view('token/check_error_visited_count');
            }
        }
        else{
            $this->load->view('token/check_error');
        }
    }

}