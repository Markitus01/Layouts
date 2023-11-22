<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $nom ?></title>
        <style>
            .content
            {
                background-color: lightgreen;
                form
                {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                }
                
            }
        </style>
    </head>

    <body> 
        <div>
            <h1>Hola <?= $nom ?></h1>
        </div>
        <hr/>
        <div class="content">
            