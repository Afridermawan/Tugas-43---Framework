<?php 

$container = new \Slim\Container;

$container = $app->getContainer();

//Mempersipkan Service untuk Connect ke database

$container['db'] = function ($c) {
	$setting = $c->get('settings')['db'];
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname' => $setting['name'],
		'user' => $setting['user'],
		'password' => $setting['pass'],
		'host' => $setting['host'],
		'driver' => 'pdo_mysql',
	);
	$connection = \Doctrine\DBAL\DriverManager::getConnection(
			$connectionParams,
			$config
	);
	return $connection->createQueryBuilder();
};

$container['view'] = function ($c) {
	$path = $c->get('settings')['view_path'];
	$plates = new League\Plates\Engine($path);
	$plates->loadExtension(new League\Plates\Extension\Asset('../public/', true));

	return $plates;
}


?>