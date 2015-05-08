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

	public function update()
	{
		$rs = D('User')->findUserById($_GET['id']);
		$this->assign('rs',$rs);
		$this->display();
	}

	public function	actionupdate()
	{
		$rs = D('User')->updateUserById($_POST['id']);
		if($rs)
			$this->success('update succcess',__URL__);
		else
			$this->error('update failed',__URL__);
	}
}
