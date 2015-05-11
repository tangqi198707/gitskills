<?php

class UserModel extends Model
{
	
	public function getUserById($id)
	{
		return M('user')->where('id='.$id)->find();
	}

	public function getUserByName($username)
	{
		return M('User')->where('username=\''.$username.'\'')->find();
	}

}
