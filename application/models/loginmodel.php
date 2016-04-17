<?php

	class LoginModel extends CI_Model{

		function validate($table,$column1,$column2,$compare1,$compare2)
		{
			$this->db->where($column1,$compare1);
			$this->db->where($column2,$compare2);

			$query = $this->db->get($table);

			if($query->result())
			{
				return true;
			}
			else
			{
				return false;
			}

		}

	}