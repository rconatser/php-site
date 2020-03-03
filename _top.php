<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/b6ae9fba98.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo($pgtitle); ?> | Cabot Cruises</title>
<meta name="description"
    content="Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacaMons including discounted cruises.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
</head>

<body>
<section class="header">
    <div class="container">
        <div class="logo">
            <img src="images/logo-1x.jpg" srcset="images/logo-1x.jpg 1x, images/logo-2x.jpg 2x, images/logo-3x.jpg 3x"  sizes="(min-width: 700) 20vw, 40vw" alt="light and dark blue cruises logo" />
        </div>
        <div class="num">
            <a href="tel:18005551234">1-800-555-1234</a>
        </div>
    </div>
</section>

<section class="navigation">
    <div class="nav">
        <div class="container">
        <ul id="main" class="menu">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="cruises.php">
                    <li>Cruises</li>
                </a>
                <li id="dropdown">Agents <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <ul id="sub" class="menu">
                        <a href="ashley.php"><li>Ashley Roberts</li></a>
                        <a href="daniel.php"><li>Daniel Bailey</li></a>
                    </ul>
                </li>
                <a href="book.php">
                    <li>Book</li>
                </a>
            </ul>
            <ul id="mobile" class="menu">
                <a id="hamburgerBtn" class="" href="#"></a>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="cruises.php">
                    <li>Cruises</li>
                </a>
                <li id="dropdown">Agents <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <ul id="sub" class="menu">
                        <a href="ashley.php"><li>Ashley Roberts</li></a>
                        <a href="daniel.php"><li>Daniel Bailey</li></a>
                    </ul>
                </li>
                <a href="book.php">
                    <li>Book</li>
                </a>
            </ul>
            <div class="search">
                <form type="POST" action="#">
                    <input type="search" placeholder="Search..." value="" />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>