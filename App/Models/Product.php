<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model {

	public function getProducts() {
		
		$query = "select id, description, price from tb_products";
		return $this->db->query($query)->fetchAll();
	}
}

?>
