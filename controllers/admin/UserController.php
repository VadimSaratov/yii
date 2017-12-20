<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 20.12.2017
 * Time: 23:51
 */

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller{

	public function actionIndex(){
		return $this->render('index');
	}
}