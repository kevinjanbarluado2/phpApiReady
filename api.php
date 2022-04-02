
<?php
/*
* @Author: Kevin Jan Barluado
* @Date: 2022-04-02 15:26:36
* @Github: https://github.com/kevinjanbarluado2
*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
$data = file_get_contents('php://input');
?>