<?php 

/**
 * Used to define the routes in the system.
 * C:\xampp\htdocs\itacademy\Sprint3\Sprint_3_developers\config\routes.php
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array (
	'/test' => 'test#index',
	'/menu' => 'task#menu',
	'/storeTask' => 'task#storeTask',
	'/create' => 'task#create',
	'/createdone' => 'task#createDone',
	'/wrongusername' => 'task#wrongUserName',
	'/wrongtask' => 'task#wrongTask',
	'/wrongdates' => 'task#wrongDates',
	'/showtask' => 'task#showTask',
	'/update' => 'task#update',
	"/list" => "task#list", 
	"/delete" => "task#delete"
);
?>
