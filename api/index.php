<?php
    require_once('entities/connection.php');
    require_once('entities/dump.php');

    function getCurrentUri()
	{
		$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
		$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
		if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
		$uri = '/' . trim($uri, '/');
		return $uri;
	}

	$uri = getCurrentUri();

    switch($uri){
        case "dump":
            $dump = new Dump();
            $dump->handleRequest();
            break;
        case "dump/search":
            $search = new Search();
            $search->handleRequest();
            break;
        case "":
            break;
    }





?>