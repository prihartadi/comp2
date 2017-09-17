<?php

class Main_model extends CI_Model{
	function get_data_cpu(){
		return $this->db->get('part_cpu');
	}
	function get_data_mbo(){
		return $this->db->get('part_mbo');
	}
	function get_data_ram(){
		return $this->db->get('part_ram');
	}
	function get_data_mem(){
		return $this->db->get('part_mem');
	}
	function get_data_gpu(){
		return $this->db->get('part_gpu');
	}
	function get_data_psu(){
		return $this->db->get('part_psu');
	}
	function get_data_mos(){
		return $this->db->get('part_mos');
	}
	function get_data_key(){
		return $this->db->get('part_key');
	}
	function get_data_cas(){
		return $this->db->get('part_cas');
	}
	function get_data_dsp(){
		return $this->db->get('part_dsp');
	}
	function get_data_user(){
		return $this->db->get('user');
	}
	function get_data_transactions(){
		return $this->db->get('transactions');
	}
	function get_data_transactions_monthly(){
		$query = $this->db->query('SELECT YEAR(date_transaction) as year, MONTHNAME(date_transaction) as month, SUM(total_transaction) as total
															FROM transactions
															GROUP BY YEAR(date_transaction), MONTH(date_transaction)');
		// return $this->db->get('transactions');
		return $query;
	}
	function get_user($table,$where){
		return $this->db->get_where($table,$where);
	}
	function add_data($data,$table){
		$this->db->insert($table,$data);
	}
	function add_user($data,$table){
		$this->db->insert($table,$data);
	}
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function add_transaction($table,$data){
		$this->db->insert($table,$data);
	}
}
?>
