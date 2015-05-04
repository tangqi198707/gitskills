<?php

class IndexAction extends Action{

	public function index()
	{
		$this->display();
	}

	public function add()
	{
		$this->display();
	}

	public function delete()
	{
		$rs = D('User')->deleteUserById($_POST['user_id']);
		if($rs)
			echo josn_encode('delete success',__URL__);
		else
			echo json_encode('delete fail',__URL__);
	}
}
