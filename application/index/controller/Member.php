<?php
namespace app\index\controller;
use think\Controller;
class Member extends Controller{
    public function login(){
    	$this->assign('iscurent','member');
        return $this->fetch('login');
    }
    public function register(){
    	$this->assign('iscurent','member');
        return $this->fetch('register');
    }
    public function forget(){
    	$this->assign('iscurent','member');
        return $this->fetch('forget');
    }
    public function vipintrod(){
    	$this->assign('iscurent','vipintrod');
        return $this->fetch('vipintrod');
    }
}
