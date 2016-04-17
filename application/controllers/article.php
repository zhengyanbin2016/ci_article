<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 文章默认控制器
 */
class Article extends CI_Controller{
/**
 * 模版显示
 */
	public function send_article(){
		$this->load->helper('form');
		$this->load->view('admin/article.html');
	}
	/**
	 * 表单验证
	 */
	public function send(){
		
		//载入表单验证类
		$this->load->library('form_validation');
		// 设置验证规则
		$this->form_validation->set_rules('title','文章标题','required|min_length[5]');
		/*$this->form_validation->set_rules('type','类型','required|integer');
		$this->form_validation->set_rules('cid','栏目','integer');
		$this->form_validation->set_rules('info','摘要','required|max_length[10]');
		$this->form_validation->set_rules('content','内容','required|max_length[10]');*/
		// 执行验证

		$status = $this->form_validation->run();
		// var_dump($status);
		if($status){
			$data = array(
				'tname' => $this->input->post('title')

				);
			$this->load->model('article_model','article');
			$this->article->add($data);
			
		}else{
			$this->load->helper('form');
			$this->load->view('admin/article.html');
		}
	}
	 
}

 ?>