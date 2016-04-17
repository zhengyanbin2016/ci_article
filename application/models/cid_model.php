<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 栏目模型
 */
class cid_model extends CI_Model{


	/**
	 * 添加栏目
	 */
	public function add($data){
		
		$this->db->insert('title',$data); 
	}
	/**
	 * 查看栏目
	 */
	public function show_cid(){

		$data = $this->db->get('title')->result_array();
		return $data;
	}
	/**
	 * 查询对应栏目
	 */
	public function alter_cid($tid){

		
		$data = $this->db->where(array('tid'=>$tid))->get('title')->result_array();
		return $data;
	}

	/**
	 * 修改
	 */
	public function update($tid,$data){

		 $this->db->update('title',$data,array('tid' => $tid));
		

	}
	/**
	 * 删除
	 */
	public function del($tid){

		$this->db->delete('title',array('tid' => $tid));

	}


}

 ?>