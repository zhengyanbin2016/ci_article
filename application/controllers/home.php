<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 前台默认控制器
 */
class Home extends CI_Controller{
/**
 * 前台默认方法
 */
	public function index(){

		
		$this->load->view('index/index.html');

	}
	/**
	 * 分类页的方法
	 */
	public function category(){

		$this->load->view('index/category.html');

	}

	public function details(){

		$this->load->view('index/details.html');
	}
}

 ?>