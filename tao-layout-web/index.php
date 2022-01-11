<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div.container{
            width: 100%;
            border: 1px solid gray;
        }

        header, footer{
            padding: 1em;
            color: wheat;
            background-color: black;
            clear: left
            text-align: center;
        }

        nav{
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 1em;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul a {
            text-decoration: none;
        }

        article{
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="container">
    <header><?php include "header.php"; ?></header>
    <nav><?php include "nav.php"; ?></nav>
    <article><?php include "content.php"; ?></article>
    <footer><?php include "footer.php"; ?></footer>
</div>
</body>
</html>
<?php
