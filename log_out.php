<?php

        //check if the login session does no exist
        if(strcmp($_SESSION['uid'],”) == 0){
            //if it doesn't display an error message
            echo "<center>You need to be logged in to log out!</center>";
        }else{
            //if it does continue checking

            //update to set this users online field to the current time
            mysql_query("UPDATE `users` SET `online` = '".date('U')."' WHERE `id` = '".$_SESSION['uid']."'");

            //destroy all sessions canceling the login session
            session_destroy();

            //display success message
            echo "<center>You have successfully logged out!<br><a href = '/review-pratt/index.php' class='icon-button star'>Return Home</button></center>";
        }

        ?>
