<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once(__DIR__ . '/config.php');
include_once(PRIVATE_DIR . '/db.php');

$comments = new DB('comments');

if (isset($_POST['comment_name']) && isset($_POST['comment_description']) && trim($_POST['comment_name']) && trim($_POST['comment_description'])) {
    $comments->add([
        'name' => $_POST['comment_name'],
        'comment' => $_POST['comment_description']
    ]);
}

header("Location: ./Contact.phtml");

/**
 * Uzdevumi:
 * 1) Komentāra ievade:
 *      a) HTML daļa;  (DONE)
 * 
 * 2) Komentāra saglabāšana Mysql
 *     a) Mysql db izveidošana; (DONE)
 *     b) Datubāzes nokonfigurēšana kodā;   (DONE)
 *     c) Komentāru apstrāde un validācija; (DONE)
 *     d) Komentāra saglabāšana datubāzē;   (DONE)
 * 
 * 3) Komentāra izvade atpakaļ uz lapas:
 *     a) 
 * 
 * 
 * 
 */