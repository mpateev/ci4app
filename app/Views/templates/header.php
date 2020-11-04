<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!----- <script src="https://cdn.tiny.cloud/1/qn0fsettgoywxw2plq5vshi64pzva1grwp1u4jagcfle6mh3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <title><?= esc($title); ?></title>
</head>
<body>
<!-- Navigation bar of the site -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>/">
            <img src="<?= base_url().'/assets/img/MrQ.svg' ?>" width=72 height=36 alt="MrQ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url() ?>/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url() ?>/about">About</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url() ?>/gariki">Gariki</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url() ?>/">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url() ?>/register">Register</a>
                </li>
            </ul>
<!--            <form class="form-inline my-2 my-lg-0">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Search">-->
<!--                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>-->
<!--            </form>-->
        </div>
    </div>
</nav>
<!--- Main content of the page follows -->
