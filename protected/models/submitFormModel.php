<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvankley
 * Date: 12/1/12
 * Time: 6:56 PM
 * To change this template use File | Settings | File Templates.
 */

class SubmitFormModel extends CFormModel
{
	public $feedbackType;
	public $routeId;
	public $timestamp;
	public $description;

	public function rules()
	{
		return array(
			array('feedbackType', 'in', 'range'=>array(
				IncidentFeedbackType::POSITIVE,
				IncidentFeedbackType::NEGATIVE,
			)),
			array('routeId', 'numerical'),
			array('timestamp', 'date'),
			array('description', 'type', 'type'=>'string'),
		);
	}
}