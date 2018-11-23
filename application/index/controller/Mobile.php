<?php
namespace app\index\controller;
use think\Controller;
class Mobile extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Mobile');
        return $this->fetch('mobile');
    }
}
