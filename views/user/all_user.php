<?php 

$this->layout('templates/template', ['title' => 'User Profile']);

?>

<h1>User Profile</h1>
<p>Hello, </p>

<table border="2">
	<tr>
		<td>Username</td>
		<td>Name</td>
		<td>Email</td>
	</tr>
<?php foreach ($user as $val) : ?>
	<tr>
		<td><?= $val['username'] ?></td>
		<td><?= $val['name'] ?></td>
		<td><?= $val['email'] ?></td>
	</tr>
<?php endforeach ?>
</table>
