<?php
namespace User\Controller;
use User\Model\UserModel;


class IndexController extends UserModel{
	public function indexAction(){
		//取值getAllLists()
		$UserL = New UserLogic();
		$users = $UserL->getAllLists();

		//传值assign()
		$this->assign('users',$users);
		//显示display()
		$this->display();
	}

	public function getAllListsAtion(){
		$datas = $this->select();
		return $datas;
	}
}