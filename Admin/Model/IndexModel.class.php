<?php

class IndexModel extends Model{

	public function index()
	{
		return M('admin')->select();
	}
}
