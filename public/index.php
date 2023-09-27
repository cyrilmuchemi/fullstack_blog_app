<?php

session_start();

require "../app/core/init.php";

$url = $_GET['url'] ?? 'home';
$url = strtolower($url);
$url = explode("/", $url);

$page_name = trim($url[0]);
$file_name = "../app/pages/". $page_name .".php";

/*Setup Pagination*/

$page_number = $_GET['page'] ?? 1;
$page_number = empty($page_number) ? 1 : (int)$page_number;
$page_number = $page_number < 1 ? 1 : $page_number;

$current_link =  $_GET['url'] ?? 'home';
$current_link = ROOT. "/". $current_link;

$query_string = "";

foreach ($_GET as $key => $value) {
    if($key != 'url')
    {
        $query_string .= "&". $key. "=". $value;
    }
}

if(!strstr($query_string, "page="))
{
    $query_string .= "&page=". $page_number; 
}

$query_string = trim($query_string, "&");
$current_link .= "?". $query_string; 

$next_link = preg_replace("/page=[0-9]+/", "page=".($page_number + 1), $current_link);
$prev_page_number = $page_number < 2 ? 1 : $page_number - 1;
$prev_link = preg_replace("/page=[0-9]+/", "page=".$prev_page_number, $current_link);


echo $prev_link; die;

if(file_exists($file_name))
{
    require_once $file_name;
}
else 
{
    require_once "../app/pages/404.php";
}