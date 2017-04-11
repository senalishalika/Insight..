<?php
class Members_model extends CI_Model{

	
	
	public function add2($data){
		$this->db->insert('staff',$data);
	}
	public function view_Emp(){
		$query=$this->db->get('staff');
		return $result=$query->result();

	}
	public function search_Emp($empId){
		$query=$this->db->get_where('staff',array('ID'=>$empId));
		return $result=$query->result();
	}
	public function update_Emp($data,$id){
		$this->db->where('ID', $id);
		$this->db->update('staff',$data);
	}

}
?>