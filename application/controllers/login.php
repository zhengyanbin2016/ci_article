<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 后台登陆默认控制器
 */
class Login extends CI_Controller{
/**
 * 后台登陆默认方法
 */
	public function index(){

		$this->load->view('admin/login.html');
	}

	
}

 ?>