<?php

namespace App\Controllers;
//RESOURCES
use MF\Controller\Action;
use MF\Model\Container;
//MODELS
use App\Models\Products;
use App\Models\Info;


class IndexController extends Action {

	//INDEX
	public function index() {
		$products = Container::getModel('Products');
		$productss = $products->getProductss();
		@$this->view->dados = $productss;
		$this->render('index', 'layout1');
	}

	//ABOUT US
	public function aboutUs() {
		$info = Container::getModel('Info');
		$informations = $info->getInfo();		
		@$this->view->dados = $informations;
		$this->render('aboutUs', 'layout1');
	}

}

?>
