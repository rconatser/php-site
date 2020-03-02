<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo($pgtitle); ?> | Cabot Cruises</title>
<meta name="description"
    content="Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacaMons including discounted cruises.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css">
<link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
</head>

<body>
<section class="header">
    <div class="container">
        <div class="logo">
            <picture>
                <source srcset="images/logo-3x.jpg" media="(min-width: 960px)">
                <source srcset="images/logo-2x.jpg" media="(min-width: 768px)">
                <img src="images/logo-1x.jpg" alt="light and dark blue cruises logo" width="250px" height="auto">
            </picture>
        </div>
        <div class="num">
            <a href="tel:18005551234">1-800-555-1234</a>
        </div>
    </div>
</section>

<section class="navigation">
    <div class="nav">
        <div class="container">
            <ul id="main">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="cruises.php">
                    <li>Cruises</li>
                </a>
                <li id="dropdown">Agents<span class="mdi mdi-chevron-down"></span>
                    <ul id="sub">
                        <a href="#"><li>Item One</li></a>
                        <a href="#"><li>Item Two</li></a>
                    </ul>
                </li>
                <a href="book.php">
                    <li>Book</li>
                </a>
            </ul>
            <ul id="mobile">
                <a id="hamburgerBtn" class="" href="#"></a>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="cruises.php">
                    <li>Cruises</li>
                </a>
                <li id="dropdown">Agents <span class="mdi mdi-chevron-down"></span>
                    <ul id="sub">
                        <a href="#"><li>Item One</li></a>
                        <a href="#"><li>Item Two</li></a>
                    </ul>
                </li>
                <a href="book.php">
                    <li>Book</li>
                </a>
            </ul>
            <div class="search">
                <form type="POST" action="#">
                    <input type="search" placeholder="Search..." value="" />
                    <button type="submit"><span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
        </div>
    </div>
</section>