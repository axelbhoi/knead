<?php

	class commonmodel extends CI_Model{

		function getOne($table,$column1,$compare1)
		{
			$this->db->where($column1,$compare1);

			$query = $this->db->get($table);
			
			if($query->result())
			{
				return $query->result();
			}

			else
			{
				return false;
			}
		}
		
		function getAll($table)
		{
			$query = $this->db->get($table);

			return $query->result();
		}

		function insert($table,$values)
		{
			return $this->db->insert($table,$values);
		}

		function update($table,$column1,$id,$values)
		{
			$this->db->where($column1,$id);

			return $this->db->update($table,$values);
		}

		function delete($table,$column1,$id)
		{
			$this->db->where($column1,$id);

			return $this->db->delete($table);
		}
	
		function works()
		{
			$query = "SELECT
					    a.*, b.tag, b.name AS cname
					FROM
					    works a
					LEFT JOIN
					    categories b ON a.category_id = b.id
					ORDER BY b.name ASC";

			$result = $this->db->query($query);
			
			return $result->result();					
		}
		
		function distinct($table,$value)
		{
			$this->db->select($value);
			
			$this->db->distinct();
			
			$query = $this->db->get($table);
			
			return $query->result();
		}
	}