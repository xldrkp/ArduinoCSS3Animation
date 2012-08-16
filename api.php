<?php

    $filename = 'data.txt';

    // Daten empfangen
//    if (isset($_GET['p']) && $_GET['p'] != '') {
//        file_put_contents('data.txt', $_GET['p']);
//    }

    if ( isset($_GET['p']) && isset($_GET['b']) ) {

        $data['poti'] = $_GET['p'];
        $data['btn']  = $_GET['b'];

        file_put_contents('data.txt', serialize($data));

    }
//    Debug
//    echo 'Wert: ' .$_GET['p'];

    // Daten schicken
    if (isset($_GET['q']) && $_GET['q'] == 'receive') {
        if (file_exists($filename)) {
            $data = unserialize(file_get_contents($filename));
        }
    }

    header('Content-type: application/json');

    echo json_encode($data);




