<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 21.12.2017
 * Time: 0:03
 */

namespace app\controllers;

use Yii;

class PostController extends AppController {

	public function actionTest(){
		$names = ['ivanov', 'petrov', 'sidorov'];
//		$this->debug(Yii::$app);

	return	$this->render('test');
	}
}