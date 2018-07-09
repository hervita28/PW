<?php
/**
* 
*/
class Model_data extends CI_Model
{
	
	function select_where($table,$where)
	{
		$query = $this->db->select('*')
						->from($table)
						->where($where)
						->get();
		return $query->result_array();
	}

	public function select($table)
	{
		$query = $this->db->select('*')
						->from($table)
						->get();
		return $query->result_array();
	}

	public function insert($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return $query;
	}

	public function update($table,$data,$where)
	{
		$query = $this->db->set($data)
						->where($where)
						->update($table);
		return $query;
	}

	public function delete($table,$where)
	{
		$query = $this->db->where($where)
						->delete($table);
		return $query;
	}

	public function query($query)
	{
		return $query = $this->db->query($query);
	}

	public function query2($query)
	{
		$query = $this->db->query($query);
		return $query->result_array();
	}
}
?>