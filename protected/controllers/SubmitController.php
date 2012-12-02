<?php

class SubmitController extends Controller
{
	public $incident;

	public function actionIncident()
	{
		$model=new SubmitFormModel;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='incident-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['SubmitFormModel']))
		{
			echo($_POST['SubmitFormModel']);
			$model->attributes=$_POST['SubmitFormModel'];
			// validate user input and redirect to the previous page if valid
			if($model->validate())
			{
				// For now, just use dummy user id = 1 for our user
				$criteria = new CDbCriteria;
				$criteria->condition = 'id=1';
				$user = user::model()->find($criteria);

				$incident = new Incident();
				$incident->user_id = $user->id;
				$incident->feedback_type = $model->feedbackType;
				$incident->description = $model->description;

				// This needs to be properly validated
				//$incident->route_id = $model->routeId;

				$date = DateTime::createFromFormat('m/d/Y', $model->timestamp);
				$incident->date = date_format($date, 'Y-m-d h:m:s');
				//print_r($date);
				print_r($incident->date);
				//Yii::log(var_export($incident), 'info', 'system');
				//Yii::log(var_export($model), 'info', 'system');
				//print_r($model);
				$incident->save();

				//$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// display the submit form
		$this->render('submit',array('model'=>$model));
	}
}