<?php
/*  Application: Configuration for Database Admin File
*  Script Name: configInsertAdmin.php
*  Description: This script configures the database connection to just have all database privileges for database administrators.
*  Last Change/Update: 3/9/2021
*  Author: Kenny Choong
*/

//Login Info
$db_server = "aa1e6yxzujg6rwt.cpm1bav9vi9r.us-west-2.rds.amazonaws.com";
$db_username = "Grwth_Admin";
$db_password = "ZD4LL2JpfbCYXvU";
$db_name = "ebdb";

//Testing connection to server
$con = mysqli_connect($db_server,$db_username,$db_password);
if(!$con){
  echo "Not connected to server";
}

//Create a link for mysqli functions
$link = mysqli_connect($db_server,$db_username,$db_password,$db_name);

//Selecting a database from the server
if(!mysqli_select_db($con,$db_name)){
  echo "Database not selected";
}
?>
