<?php

class Model{
    public function __construct() {
        $DBCONNECT= new MySQLi("localhost" , "root", "")  or die(mysqli_connect_error());

        if (!mysqli_select_db($DBCONNECT,'we_code')) {
            $sql = "CREATE DATABASE IF NOT EXISTS we_code";
    
            if (!mysqli_query($DBCONNECT, $sql)) {
                echo "Error creating database: " . mysqli_error($DBCONNECT);
            }
        }    

        $sql = "CREATE TABLE IF NOT EXISTS we_code.feedbacks(
            id int primary key AUTO_INCREMENT,
            email varchar(50),
            comment varchar(250),
            vote int not null
            );";
        if (!mysqli_query($DBCONNECT, $sql)) {
            echo "Error creating table client: " . mysqli_error($DBCONNECT);
        }    
        
        mysqli_close($DBCONNECT);
    }

    public function feedback($email, $comment, $vote){
        $DBCONNECT= new MySQLi("localhost" , "root", "", 'we_code')  or die(mysqli_connect_error());

        $DBCONNECT->query("INSERT INTO feedbacks (email, comment, vote) VALUES('$email', '$comment', '$vote');");
        mysqli_close($DBCONNECT);
    }
}
