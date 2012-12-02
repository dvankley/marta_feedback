<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvankley
 * Date: 12/1/12
 * Time: 3:09 PM
 * To change this template use File | Settings | File Templates.
 */

class Incident extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'incident';
	}
}