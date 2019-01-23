<?php

namespace App\src\manager;

use App\src\model\User;

class UserManager extends Manager
{
	public function getUserInfos()
	{
		$sql = 'SELECT id, email, password FROM user';
		$result = $this->sql($sql);
		return $result;
	}
}