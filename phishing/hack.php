<?php

    if(( isset($_REQUEST['username']) && isset($_REQUEST['password']) ) ){
    
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        echo "Happy hacking day " . $username . " <3 " . $password; 
    }

    