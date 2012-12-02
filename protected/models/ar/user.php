<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvankley
 * Date: 12/1/12
 * Time: 5:43 PM
 * To change this template use File | Settings | File Templates.
 */

class User extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'user';
	}
}