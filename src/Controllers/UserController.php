<?php 

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\User;

class UserController extends AbstractController
{
	public function getAll(Request $request, Response $response)
	{
		$user = new User($this->db);

		$user_all = $user->getAll();

		$data['user'] = $user_all;

		return $this->view->render('user/all_user', $data);
	}

	public function find(Request $request, Response $response, $args)
	{
		$user = new User($this->db);

		$user_id = $user->find($args['id']);

		$data['id'] = $user_id;

		return $this->view->render('user/profile', $data);
	}

	public function add(Request $request, Response $response)
	{
		$user = new User($this->db);

		$user->create($data);
	}
}
?>