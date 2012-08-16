<?php

    if (isset($_GET['p']) && $_GET['p'] != '') {
        file_put_contents('data.txt', $_GET['p']);
    }

    echo 'Wert: ' .$_GET['p'];