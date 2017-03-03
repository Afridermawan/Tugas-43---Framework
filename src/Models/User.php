<?php 

namespace App\Models;

class User extends AbstractModel
{
	protected $table = 'users';

	public function create(array $data)
	{
		$data = [
			''
		];

		$this->createData($data);

		return $data;
	}
}


?>