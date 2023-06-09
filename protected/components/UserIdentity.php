<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users = User::model()->findByPk($this->username);

		if ($users == null){
			//tidak ada user 
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		elseif($users->userPassword!==$this->password){
			// password tidak sama
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
			Yii::app()->user->setState('group',$users->userGroup);
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}