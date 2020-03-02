<?php $pgtitle='Home'; include '_top.php'; ?>

<?php include '_slider.php'; ?>

<section class="cards">
    <div class="container">
        <h2>Recent Blogs</h2>
        <div class="card-container">
            <a href="#" id="card-one">
                <div class="text">
                    <h3>Sunset Adventures</h3>
                    <p>June 27, 2019</p>
                </div>
            </a>
            <a href="#" id="card-two">
                <div class="text">
                    <h3>Alaskan Cruises</h3>
                    <p>June 31, 2019</p>
                </div>
            </a>
            <a href="#" id="card-three">
                <div class="text">
                    <h3>Wine by Sunset</h3>
                    <p>July 19, 2019</p>
                </div>
            </a>
            <a href="#" id="card-four">
                <div class="text">
                    <h3>Your Next Getaway</h3>
                    <p>August 2, 2019</p>
                </div>
            </a>
        </div>
    </div>
    <div class="clear"></div>
</section>

<?php include '_bot.php'; ?>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/menuToggle.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slick({
            autoplay: true,
            dots: true,
            arrows: false,
            cssEase: 'ease-out',
            speed: 2000,
            autoplaySpeed: 3000
        })
    })
</script>
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "TravelAgency",
    "name": "Cabot Cruises",
    "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacaMons including discounted cruises.",
    "openingHours": "Mo-Fr 09:00-16:00",
    "telephone": "+18005551234",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "23 South Main St. Suite 16",
        "addressLocality": "Lexington",
        "addressRegion": "VA"
    },
    "image": "/images/logo-1x.jpg",
    "priceRange": "$450 to $3500"
    }
</script>   
</body>

</html>