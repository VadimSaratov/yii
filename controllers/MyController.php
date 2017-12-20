<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 20.12.2017
 * Time: 23:33
 */

namespace app\controllers;




class MyController extends AppController {

	public function actionIndex($id = null){
		$a = 'Hello World';
		$names = ['ivanov', 'petrov', 'sidorov'];
		print_r($names);
		var_dump($names);
////		return $this->render('index', ['hello' => $a, 'names' => $names]);
//		return $this->render('index', compact('a', 'names', 'id'));
	}

	public function actionBlogPost(){
		return 'Blog Post';
	}

}