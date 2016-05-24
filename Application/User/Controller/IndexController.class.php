<?php
namespace User\Controller;
use Think\Controller;
use User\Model\UserModel;
use User\Logic\UserLogic;

class IndexController extends Controller{
	public function indexAction(){
		//取值getAllLists()
		$UserL = New UserLogic();
		$users = $UserL->getAllLists();

		//传值assign()
		$this->assign('users', $users);
		//显示display()

		$this->display();
	}

	
}