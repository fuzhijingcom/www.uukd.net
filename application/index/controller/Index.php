<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	
    	return $this->fetch();
    }
    
    
    public function test(){
    	
    	$data = '{ title:"这是标题一" ,desc:"哈哈666"},
    	{ title:"这是标题二" ,desc:"哈哈哈"},
    	{ title:"三" ,desc:"哈哈哈"}';
    	
    	$this->assign('data',$data);
    	
    	$a =  '我爱你';
    	$this->assign('a',$a);
    	
    	return $this->fetch();
    }
}
