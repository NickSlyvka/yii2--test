<?php

namespace frontend\controllers;

use Symfony\Component\CssSelector\Tests\Node\ElementNodeTest;
use Yii;
use frontend\models\Employee;
use yii\web\Controller;

class EmployeeController extends Controller
{
	public function actionIndex()
	{
		$employee = new Employee();
		$employee1->firstName = 'Alex';
		$employee->lastName = 'Smith';
		$employee->middleName = 'John';
		$employee->salary = 1000;
	}

	public function actionTest()
	{
		$human1 = new Human();
		$animal = new Animal();

		$animal->walk();
		$human1->walk();
	}

	public function actionRegister()
	{
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate()) {
				echo Yii::$app->session->setFlash('success', 'Все четка!!');
			}
			else echo Yii::$app->session->setFlash('danger', 'Чет не робит епта!!');
		}

		return $this->render('register');
	}

	public function actionUpdate()
	{
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate()) {
				echo Yii::$app->session->setFlash('success', 'Все четка!!');
			} else Yii::$app->session->setFlash('danger', 'Чет не робит епта!!');
		}

		return $this->render('update');
	}
}