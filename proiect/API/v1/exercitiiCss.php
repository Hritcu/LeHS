<?php
// Connect to database
	include("../connection.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();

	$request_method=$_SERVER["REQUEST_METHOD"];

    switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_exec($id);
			}
			else get_allExec();
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	
	}

    function get_allExec()
	{
		global $connection;
		$query="SELECT * FROM exercitiiCss";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	function get_exec($id=0)
	{
		global $connection;
		$query="SELECT * FROM exercitiiCss";
		if($id != 0)
		{
			$query.=" WHERE id=".$id." LIMIT 1";
		}
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
			//echo $row;
			//echo $response;
		}
		header('Content-Type: application/json');
		// echo $response;
		echo json_encode($response);
	}


	?>
	