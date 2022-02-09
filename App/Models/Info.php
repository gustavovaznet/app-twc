<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model {

	public function getInfo() {
		
		$query = "select title, description from tb_info";
		return $this->db->query($query)->fetchAll();
	}
}

?>
