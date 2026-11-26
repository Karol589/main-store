<?php
    // Get database connection
    include ('../settings/database.php');

    //Get data payload frontend
    $email = $_POST['email'];
    $passwd_form= $_POST['pswd']
    //Verify if form password is equal to database password -> Same user
    

    $sql_check_email="SELECT COUNT(email) FROM users WHERE email ='$email'";
    $res= pg_query($local_conn, $sql_check_email);
    $row= pg_fetch_assoc($res);

    $sql_get_password="SELECT password FROM users WHERE email ='$email'";
    $res= pg_query($local_conn, $sql_get_password);
    $row= pg_fetch_assoc($res);
    $passwd_db= $row2['password'];
    
    $passwd = password_verify ($_POST['pswd']);
    echo "Q1: ".$row[?total]