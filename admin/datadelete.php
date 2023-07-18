<?php
include("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}
if(isset($_GET['function_name']) && empty($_GET['function_name']))
{
	header("location:dashboard.php");
}

/* Getting the function names we want to delete*/
$function_name=$_GET['function_name'];

/* Deleting Country */
if($function_name=="countrydelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_country where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:country-list.php");
}

/* Deleting State */
if($function_name=="statedelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_state where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:state-list.php");
}


/* Deleting City */
if($function_name=="citydelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_city where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:city-list.php");
}


/* Deleting Location */
if($function_name=="locationdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_location where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:location-list.php");
}

/* Deleting User */
if($function_name=="userdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_user where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:user-list.php");
}

/* Deleting Vehicle Manufacturer */
if($function_name=="makedelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_make where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:vehicle-make-list.php");
}

/* Deleting Vehicle Model */
if($function_name=="modeldelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_model where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:vehicle-model-list.php");
}


/* Deleting Vehicle Type */
if($function_name=="typedelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_vehicle_type where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:vehicle-type-list.php");
}

/* Deleting Driver */
if($function_name=="driverdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_driver where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:driver-list.php");
}

/* Deleting Driver */
if($function_name=="vehicledelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_vehicle where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:vehicle-list.php");
}

/* Deleting Package */
if($function_name=="packagesdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_package where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:packages-list.php");
}

/* Deleting Testimonial */
if($function_name=="testimonialdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_testimonial where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:testimonial-list.php");
}

/* Deleting Blog Category*/
if($function_name=="blogcatgdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_blog_category where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:blog-category-list.php");
}

/* Deleting Blog */
if($function_name=="blogdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_blog where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:blog-list.php");
}

/* Deleting Blog */
if($function_name=="transportdelete")
{
	$record_id=$_GET['id'];
	$delete_query="delete from tbl_transport where id='".$record_id."'";
	$conn->query($delete_query);
	header("location:transport-list.php");
}

?>