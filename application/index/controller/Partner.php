<?php
namespace app\index\controller;
use think\Controller;
class Partner extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Partner');
        return $this->fetch('partner');
    }
}
