<?php
   if(isset($_POST['submit'])){
	   
	   $id = $_POST['id'];
	   $password =$_POST['password'];
	   $repass =$_POST['repass'];
       $name =$_POST['name'];
	   $usertype =$_POST['usertype'];
	   
	   
	   if($id == "" || $password == "" || $repass == "" || $name == "" || $usertype =="") {
		   echo "null submission";
	   } 
           else{

             if($password == $repass)
			 { 
               echo "success";
             else 
             {
			 echo " password missmatched"; }				 


			 }
		   }
>?