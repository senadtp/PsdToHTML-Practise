<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <title></title>

</head>

<body>

    <div id="myOverlay" class="overlay-search">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
        <div class="overlay-content">
            <form>
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <header class="navbar-nav navbar-expand-lg navbar-toggleable-lg fixed-top navbar-light justify-content-center">
        <a class="navbar-brand" href="#home"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarToggleExternalContent">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php">Home 
                        <div class="overlay">
                            <img src="images/header-hover-photo.png">
                        </div>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="portfolio.php ">Portfolio
                        <div class="overlay">
                            <img src="images/header-hover-photo.png">
                        </div>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="aboutus.php">About
                        <div class="overlay">
                            <img src="images/header-hover-photo.png">
                        </div>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href=" contact.php">Contact
                        <div class="overlay">
                            <img src="images/header-hover-photo.png">
                        </div>
                    </a>
                </li>
                <li class="nav-item item-blog">
                    <a class="nav-link blog" href=" ">Blog
                        <div class="overlay">
                            <img src="images/header-hover-photo.png">
                        </div>
                    </a>
                </li>
                <li class="nav-item item-search">
                    <a href="#" class="nav-link openBtn " onclick="openSearch()">Search
                        <img src="images/search.png"> 
                    </a>
                </li>
            </ul>
        </div>
    </header>
