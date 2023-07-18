<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="etransport";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



/*Defining Constants*/
define("PROJECT_NAME","E - Transport");



/*Constants for Dashboard */
define("ADMIN_LOGIN_TITLE","Login | ".PROJECT_NAME);

/*Constants for Dashboard */
define("ADMIN_DASHBOARD_TITLE","Dashboard | ".PROJECT_NAME);

/*Constants for Profile */
define("ADMIN_PROFILE_TITLE","Admin | ".PROJECT_NAME);
define("ADMIN_PROFILE_PHOTO_TITLE","Update Profile Image | ".PROJECT_NAME);

/*Constants for Country */
define("ADMIN_COUNTRYLIST_TITLE","Country | ".PROJECT_NAME);
define("ADMIN_COUNTRYLIST_ADD_TITLE","Add Country | ".PROJECT_NAME);
define("ADMIN_COUNTRYLIST_UPDATE_TITLE","Update Country | ".PROJECT_NAME);

/*Constants for State */
define("ADMIN_STATELIST_TITLE","State | ".PROJECT_NAME);
define("ADMIN_STATELIST_ADD_TITLE","Add State | ".PROJECT_NAME);
define("ADMIN_STATELIST_UPDATE_TITLE","Update State | ".PROJECT_NAME);

/*Constants for City */
define("ADMIN_CITYLIST_TITLE","City | ".PROJECT_NAME);
define("ADMIN_CITYLIST_ADD_TITLE","Add City | ".PROJECT_NAME);
define("ADMIN_CITYLIST_UPDATE_TITLE","Update City | ".PROJECT_NAME);

/*Constants for Location */
define("ADMIN_LOCATIONLIST_TITLE","Location | ".PROJECT_NAME);
define("ADMIN_LOCATIONLIST_ADD_TITLE","Add Location | ".PROJECT_NAME);
define("ADMIN_LOCATIONLIST_UPDATE_TITLE","Update Location | ".PROJECT_NAME);

/*Constants for Manufacturer */
define("ADMIN_VEHICLE_MAKE_TITLE","Manufacturer | ".PROJECT_NAME);
define("ADMIN_VEHICLE_MAKE_ADD_TITLE","Add Manufacturer | ".PROJECT_NAME);
define("ADMIN_VEHICLE_MAKE_UPDATE_TITLE","Update Manufacturer | ".PROJECT_NAME);

/*Constants for Model */
define("ADMIN_VEHICLE_MODEL_TITLE","Model | ".PROJECT_NAME);
define("ADMIN_VEHICLE_MODEL_ADD_TITLE","Add Model | ".PROJECT_NAME);
define("ADMIN_VEHICLE_MODEL_UPDATE_TITLE","Update Model | ".PROJECT_NAME);

/*Constants for Type */
define("ADMIN_VEHICLE_TYPE_TITLE","Type | ".PROJECT_NAME);
define("ADMIN_VEHICLE_TYPE_ADD_TITLE","Add Type | ".PROJECT_NAME);
define("ADMIN_VEHICLE_TYPE_UPDATE_TITLE","Update Type | ".PROJECT_NAME);

/*Constants for Vehicle */
define("ADMIN_VEHICLE_TITLE","Vehicle | ".PROJECT_NAME);
define("ADMIN_VEHICLE_ADD_TITLE","Add Vehicle | ".PROJECT_NAME);
define("ADMIN_VEHICLE_UPDATE_TITLE","Update Vehicle | ".PROJECT_NAME);

/*Constants for Driver */
define("ADMIN_DRIVER_TITLE","Driver | ".PROJECT_NAME);
define("ADMIN_DRIVER_ADD_TITLE","Add Driver | ".PROJECT_NAME);
define("ADMIN_DRIVER_UPDATE_TITLE","Update Driver | ".PROJECT_NAME);

/*Constants for User */
define("ADMIN_USER_TITLE","User | ".PROJECT_NAME);
define("ADMIN_USER_ADD_TITLE","Add User | ".PROJECT_NAME);
define("ADMIN_USER_UPDATE_TITLE","Update User | ".PROJECT_NAME);
define("ADMIN_USER_PASSWORD_TITLE","Update User Password | ".PROJECT_NAME);
define("ADMIN_USER_IMAGE_TITLE","Update User Image | ".PROJECT_NAME);

/*Constants for Transport */
define("ADMIN_TRANSPORT_TITLE","Transport | ".PROJECT_NAME);
define("ADMIN_TRANSPORT_ADD_TITLE","Add Transport | ".PROJECT_NAME);
define("ADMIN_TRANSPORT_UPDATE_TITLE","Update Transport | ".PROJECT_NAME);

/*Constants for Newsletter */
define("ADMIN_NEWSLETTER_TITLE","Newsletter | ".PROJECT_NAME);

/*Constants for Inquiry */
define("ADMIN_INQUIRY_TITLE","Inquiry | ".PROJECT_NAME);

/*Constants for Packages */
define("ADMIN_PACKAGE_TITLE","Packages | ".PROJECT_NAME);
define("ADMIN_PACKAGE_ADD_TITLE","Add Package | ".PROJECT_NAME);
define("ADMIN_PACKAGE_UPDATE_TITLE","Update Package | ".PROJECT_NAME);

/*Constants for Testimonial */
define("ADMIN_TESTIMONIAL_TITLE","Testimonial | ".PROJECT_NAME);
define("ADMIN_TESTIMONIAL_ADD_TITLE","Add Testimonial | ".PROJECT_NAME);
define("ADMIN_TESTIMONIAL_UPDATE_TITLE","Update Testimonial | ".PROJECT_NAME);

/*Constants for Quote */
define("ADMIN_QUOTE_TITLE","Get A Quote | ".PROJECT_NAME);

/*Constants for Blog Category */
define("ADMIN_BLOG_CATG_TITLE","Blog Category | ".PROJECT_NAME);
define("ADMIN_BLOG_CATG_ADD_TITLE","Add Blog Category | ".PROJECT_NAME);
define("ADMIN_BLOG_CATG_UPDATE_TITLE","Update Blog Category | ".PROJECT_NAME);

/*Constants for Blog */
define("ADMIN_BLOG_TITLE","Blogs | ".PROJECT_NAME);
define("ADMIN_BLOG_ADD_TITLE","Add Blog | ".PROJECT_NAME);
define("ADMIN_BLOG_UPDATE_TITLE","Update Blog | ".PROJECT_NAME);

/*Constants for Blog */
define("ADMIN_TRANSPORT_QUERY_TITLE","Transport Inquiry | ".PROJECT_NAME);


/******************************* FRONT END TITLE *****************************/

/*Constant for Home */
define("HOME_TITLE","Home | ".PROJECT_NAME);

/*Constant for About */
define("ABOUT","About | ".PROJECT_NAME);

/*Constants for Service */
define("SERVICE","Service | ".PROJECT_NAME);

/*Constant for Package */
define("PACKAGE","Package | ".PROJECT_NAME);

/*Constant for Transport */
define("TRANSPORT","Transport | ".PROJECT_NAME);

/*Constant for Transport Detail */
define("TRANSPORT_DETAIL","Transport Detail | ".PROJECT_NAME);

/*Constant for Blog */
define("BLOG","Blogs | ".PROJECT_NAME);

/*Constant for Blog Detail */
define("BLOG_DETAIL","Blog Detail | ".PROJECT_NAME);

/*Constant for Inquiry */
define("INQUIRY","Inquiry | ".PROJECT_NAME);

/*Constant for Privacy */
define("PRIVACY","Privacy | ".PROJECT_NAME);

/*Constant for Terms */
define("TERMS","Terms | ".PROJECT_NAME);

/*Constant for Cookie Policy */
define("COOKIE_POLICY","Cookie Policy | ".PROJECT_NAME);

?>