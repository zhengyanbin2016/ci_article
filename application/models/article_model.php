<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 文章模型
 */
class article_model extends CI_Model{
	/**
	 * 添加
	 */
	public function add($data){
		
		$this->db->insert('title',$data); 
	}

}

 ?>