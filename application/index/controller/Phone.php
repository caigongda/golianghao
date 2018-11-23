<?php
namespace app\index\controller;
use think\Controller;
class Phone extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Phone');
        return $this->fetch('phone');
    }
}
