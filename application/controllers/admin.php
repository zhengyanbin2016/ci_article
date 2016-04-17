<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 后台默认控制器
 */
class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('cid_model');
	}



/**
 * 后台默认方法
 */
	public function index(){

		$this->load->view('admin/index.html');

	}
	/**
	 * 查看栏目
	 */
	public function show_cid(){

		
		$data['title'] = $this->cid_model->show_cid();
		$this->load->view('admin/show_cid.html',$data);
	}
	/**
	 * 修改栏目
	 */
	public function alter_cid(){

		$tid = $this->uri->segment(3);

		$data['title'] = $this->cid_model->alter_cid($tid);

		$this->load->view('admin/alter_cid.html',$data);

	}

	/**
	 * 修改按钮
	 */

	public function update (){

		$tid = $this->input->post('tid');
		$cid = $this->input->post('cid');
		
		$data = array(
			'tname' => $cid  
			);
		$this->cid_model->update($tid,$data);
		echo "<script>alert('ok');</script>";



	}


	/**
	 * 删除栏目
	 */

	public function delete_cid(){
		$tid = $this->uri->segment(3);
		
		$this->cid_model->del($tid);
		echo "<script>alert('ok');</script>";
	}

	public function copy(){

		$this->load->view('admin/copy.html');
	}

	/*public function passwd(){

	$this->load->view('admin/passwd.html');
	}
*/
	/**
	 * 增加栏目模版
	 */
	public function add(){

		$this->load->view('admin/add.html');
	}

	/**
	 * 增加栏目按钮
	 */
	public function add_cid(){

		
		$data = array(

			'tname' => $this->input->post('cid')

			);

		
		$this->cid_model->add($data);

		// $this->load->view('admin/show_cid.html');
		
		echo "<script>alert('ok');</script>";
	}

	


}

 ?>