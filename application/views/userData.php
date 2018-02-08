<?php

    echo '<h1>User Name : '. $user['user_name'] . '</h1>';
    if($user['active_flag'] == '1') {
        echo 'activeUser :'. 'YES';
    } else {
      echo 'activeUser : '. 'NO';
    }
 ?>
