<?php
try{
			$jul=new PDO("mysql:host=localhost;dbname=REGIDESO","root","",[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
				
		}
		catch(exception $e){
			echo"connection echoue".$e ->getmessage();	
				}






?>