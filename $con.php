<?php
$servername="localhost";
$user="root";
$pass="";
$db="karni";



$con=new mysqli($servername,$user,$pass,$db);

if($con->connect_error)
  {
   die("connection failed...".$con->connect_error);
  }

  else
   {
   echo"connect successfully";
   }
$add="INSERT INTO `info` (`id`, `name`, `fname`, `mobile`) VALUES ('4', 'rahul', fsk', '987654476')";
if($con->query($add)===TRUE)
{
 echo  "DATA ADD SUCCESSFULLY";
}
else 
{
echo " DATA ADDING FAILED.... KINDLY CHECK YOUR PROGRAMS";

}

?>
