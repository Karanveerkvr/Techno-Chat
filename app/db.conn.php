<?php 

# server name
$sName = "sql208.epizy.com";
# user name
$uName = "epiz_31680988";
# password
$pass = "SkA90esKAnFLUyG";

# database name
$db_name = "epiz_31680988_chatapp";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}