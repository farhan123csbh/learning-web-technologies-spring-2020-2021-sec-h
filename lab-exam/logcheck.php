<?php
   if(isset($_POST['submit'])){
	   
	   $id = $_POST['id'];
       $name =$_POST['name'];
	   
	   
	   
	   if($id == "" || $password == "" ) {
		   echo "null submission";
	   } 
           else{

             if($id == $password)
			 { 
               echo "";
             else 
             {
			 echo " "; }				 


			 }
		   }
>?