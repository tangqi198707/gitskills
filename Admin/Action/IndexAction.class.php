<?php

class IndexAction extends Action{

	public function index()
	{
		$this->display();
	}


	public function update()
	{
		$rs = D('Admin')->getUserById($_GET['id']);
		$this->assign('rs',$rs);
		$this->display();
	}

	public function doUpdate()
	{
		$result = D('Admin')->updateUserById($_POST['id']);
		if($result)
			echo josn_encode(array('code'=>1001, 'msg'=>'update success'));
		else
			echo json_encode(array('code'=>1000, 'msg'=>'update fail'));
	}

	public function add()
	{
		$this->display();
	}

	public function doAdd()
	{
		$result = D('Admin')->addUser();
		if($result)
			$this->success('add success',__URL__);
		else
			$this->error('add fail',__URL__);
	}

}
