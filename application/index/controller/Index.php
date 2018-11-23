<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller{
    public function index(){//首页
    	$this->assign('iscurent','Index');
        return $this->fetch('index');
    }
}
