<?php
class Dashboard extends MY_Controller{

	public function __construct()
	{
		parent::__construct();

		if(!isset($this->session->userdata['your_session_prefix_username'])){
			redirect('login/index');
		}
	}

    function index(){
		$data['token'] = $this->execSQLRow("SELECT COUNT(id) as 'jumlah' FROM token");
		$data['visited'] = $this->execSQLRow("SELECT IFNULL(SUM(visited_count),0) as 'jumlah' FROM token");

		$data['_view']="dashboard/index";
        $this->page($data);
    }
}

?>
