<?php 
$baseurl = "localhost/agriclimchange";
$controller = 'home';
$function = 'home';
if(isset($_GET['controller']) && $_GET ['controller'] !='' ) {
    $controller = $_GET['controller'];
}
if(isset($_GET['function']) && $_GET ['function'] !='' ) {
    $function = $_GET['function'];
}
include('controller/'.$controller. '.php');
$class = $controller;
$obj = new $class();
$obj->$function();
//$config->insert('testing', ['dbgnh'=>'vishal']);
//$config->update('testing', ['dbgnh'=>'Shobhit'], 'dbgnh="vishal"');
//$config->delete('testing', 'dbgnh="Shobhit"');
//$colName = "testing.vss, testing.dbgnh";
//	$join = "";
//	$limit = 4;
//	$where = "uytfcvbhjk = '50'";
// $config->select('testing',$colName,$join,null,null,$limit);
	//echo "\n\nSelect result is : ";
	//print_r($config->getResult());

// $obj->sql('SELECT * FROM students WHERE age = "20"');
	// echo "SQL result is : ";
	// print_r($obj->getResult());
?>