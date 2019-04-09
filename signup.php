<?php

 $con =mysqli_connect("localhost","chetna","chetnahemant","lifestyle") or die("Sorry! Could not connect.");
 $first=$_POST['first'];
 $last=$_POST['last'];
 $email_id=$_POST['email_id'];
 $mobile_=$_POST['mobile_'];
 $password=$_POST['password'];
 
 $user_reg_query="INSERT into signup(first,last,email_id,mobile_,password) values($first,$last,$email_id,$mobile_,$password)";
 die("Sorry! Could not connect.");
 $user_reg_submit=mysqli_query($con,$user_reg_query) or die("Sorry! Could not connect.");
 
 echo("User inserted");
 ?>