<?php 
include("dbconnect.php");

$api_name=$_GET['api_name'];

/*****
	API For : State List
*****/

if($api_name=="state_list")
{
	if(isset($_GET['country_id']) && !empty($_GET['country_id']))
	{
		$country_id=$_GET['country_id'];
		$state_query="select * from tbl_state where country_id='".$country_id."'";
		$state_data=$conn->query($state_query);
		$final_arr=array();
		$cnt=0;
		while($row=$state_data->fetch_assoc())
		{
			$final_arr[$cnt]['id']=$row['id'];
			$final_arr[$cnt]['name']=$row['name'];
			$cnt++;
		}
		
		echo json_encode(array("status"=>1,"msg"=>"Country List","data"=>$final_arr));
		die();
	}
	else
	{	
		
		echo json_encode(array("status"=>0,"msg"=>"Invalid Paramter"));
		die();
	}
}

/*****
	API For : City List
*****/
if($api_name=="city_list")
{
	if(isset($_GET['state_id']) && !empty($_GET['state_id']))
	{
		$state_id=$_GET['state_id'];
		$city_query="select * from tbl_city where state_id='".$state_id."'";
		$city_data=$conn->query($city_query);
		$final_arr=array();
		$cnt=0;
		while($row=$city_data->fetch_assoc())
		{
			$final_arr[$cnt]['id']=$row['id'];
			$final_arr[$cnt]['name']=$row['name'];
			$cnt++;
		}
		
		echo json_encode(array("status"=>1,"msg"=>"State List","data"=>$final_arr));
		die();
	}
	else
	{
		echo json_encode(array("status"=>0,"msg"=>"Invalid Paramter"));
		die();
	}
}

/*****
	API For : Location List
*****/
if($api_name=="location_list")
{
	if(isset($_GET['city_id']) && !empty($_GET['city_id']))
	{
		$city_id=$_GET['city_id'];
		$location_query="select * from tbl_location where city_id='".$city_id."'";
		$location_data=$conn->query($location_query);
		$final_arr=array();
		$cnt=0;
		while($row=$location_data->fetch_assoc())
		{
			$final_arr[$cnt]['id']=$row['id'];
			$final_arr[$cnt]['name']=$row['name'];
			$cnt++;
		}
		
		echo json_encode(array("status"=>1,"msg"=>"City List","data"=>$final_arr));
		die();
	}
	else
	{
		echo json_encode(array("status"=>0,"msg"=>"Invalid Paramter"));
		die();
	}
}

/*****
	API For : Newsletter
*****/
if($api_name=="newsletter")
{
	if(isset($_GET['email']) && !empty($_GET['email']))
	{
		$email=$_GET['email'];
		$today_date=date("y-m-d");
		$newsletter_query="select * from tbl_newsletter where email='".$email."'";
		$newsletter_data=$conn->query($newsletter_query);
		$final_arr=array();
		$cnt=0;
		if ($newsletter_data->num_rows > 0){
			echo json_encode(array("status"=>0,"msg"=>"It seems, this email is already subcribed"));
		}
		else
		{
			$userquery="insert into tbl_newsletter(email,subs_on) values('".$email."','".$today_date."')";
			$conn->query($userquery);
			echo json_encode(array("status"=>1,"msg"=>"You have successfully subscribed to our newsletter."));
		}
		
		die();
	}
	else
	{
		echo json_encode(array("status"=>0,"msg"=>"Invalid Paramter"));
		die();
	}
}
?>