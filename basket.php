<?php
session_start();

include("db.php");
$pagename="Smart Basket"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//if the posted ID of the new product is set i.e. if the user is adding a new product into the basket
if (isset($_POST['h_prodid']))
{

	$newprodid=$_POST['h_prodid'];

	$reququantity=$_POST['p_quantity'];

	$_SESSION['basket'][$newprodid]=$reququantity;

echo "<p>1 item added";
}
//else
//Display "Current basket unchanged " message
else
{
echo "<p>Basket unchanged";
}
include("footfile.html"); //include head layout
echo "</body>";
?>