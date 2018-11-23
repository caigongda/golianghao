<?php
namespace app\index\controller;
use think\Controller;
class Activity extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Activity');
        return $this->fetch('newActivity');
    }
}
