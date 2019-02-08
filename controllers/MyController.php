<?php 
namespace app\controllers;
use yii\web\Controller;

class MyController extends Controller
{
	public $layout = 'new';
	public function actionIndex()
	{
		return $this->render('index');
	}
}