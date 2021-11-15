<?php
try{
			$jul=new PDO("mysql:host=localhost;dbname=regideso","root","",[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
				
		}
		catch(exception $e){
			echo"connection echoue".$e ->getmessage();	
				}






?>