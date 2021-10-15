<?php

/******************** home content start **********************/

function homeController()
{

    $connection = getConnection();
    $promotions = promotions($connection);
    $about_us = about_us($connection);

    return [
        "home",
        [
            "title" => "Kezdőlap",
            "promotions" => $promotions,
            "about_us" => $about_us
        ]
    ];
}

/******************** about content start **********************/

function aboutAddingController()
{

    return [
        "aboutAdding",
        [
            "title" => "Rólunk tartalmi rész rögzítése!"
        ]
    ];
}

function aboutSubmitController()
{
    $about_name  = $_POST['about_name'];
    $connection = getConnection();
    aboutInsert($connection, $about_name);
    return [
        "redirect:/aboutAdding",
        []
    ];
}

/******************** admin content start **********************/

function adminController()
{


    return [
        "administ",
        [
            "title" => "Adminisztrációs oldal"
        ]
    ];
}

function promotionsSubmitController()
{
    $promotions_name  = $_POST['promotions_name'];
    $promotions_comment = $_POST['promotions_comment'];
    $connection = getConnection();
    promotionsInsert($connection, $promotions_name, $promotions_comment);
    return [
        "redirect:/administ",
        []
    ];
}

/******************** 404 content start **********************/

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}
