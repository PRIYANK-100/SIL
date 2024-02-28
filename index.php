<?php
include("header.php")
?>

<link rel="stylesheet" href="css/style.css">

<main>
    <div class="home-slider">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel 1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel 2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel 3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section class="sec-welcome">
        <div class="sec-heading">
            <h1>Welcome <br>to<br> Stratmont Industries Limited.</h1>
        </div>
    </section>

    <section class="sec-primary">

        <section class="sec-intro">
            <h3>Introduction</h3>
            <div class="intro">
                <div class="intro-text">
                    <p>Stratmont Industries Limited is incorporated on 05th April 1984; we have attained the industrial
                        expertise and are recognized by the customers with confidence for Manufacturing and Supplying of
                        LAM Coke with the production capacity of 36,000 Metric Ton Per Annum (MTPA) manufacturing unit
                        at Bhachau, Kachchh District in Gujarat. The Company provides the assurance of quality LAM Coke
                        manufacturing & supplying with excellent packaging to meet customer's requirements.

                    </p>
                </div>
                <div class="intro-img">
                    <img src="img/intro-img.jpg" alt="">
                </div>
            </div>
            <div class="intro-text2">
                <p>Our Company's aim to become a premier resource company, socially conscious corporate citizen in the
                    business of wealth creation in an ethical and moral manner. We hope to be environmentally safe, an
                    equal opportunity employer, and a proud contributor to Indian coke production.

                </p>

            </div>
            <div class="know-more">
                <a href="">Know More</a>
            </div>
        </section>

        <hr>

        <section class="sec-portfolio">
            <h3>Product Portfolio</h3>
            <div class="portfolio">
                <div class="portfolio-img">
                    <img src="img/c3.jpg" alt="">
                </div>

                <div class="portfolio-text">
                    <p>Our Company brings in better-quality LAM Coke in the market. LAM coke is also known as low ash
                        metallurgical coke among the industry. LAM Coke is remarkable for it high fixed carbon content
                        effective for various metallurgical applications. Our LAM Coke Foundry is high on demand in the
                        sectors such as Ferro Alloys, Graphite, Cement plants & Foundry works. In addition to the above
                        fact, the company is counted as a leading name among the prominent manufacturers as well as
                        Suppliers in India.</p>
                    <p>We process LAM coke from high end raw materials available in the country using latest technology.
                        In addition to the above fact, the company is counted as a leading name among the prominent
                        manufacturers as well as Suppliers in India.

                    </p>
                </div>
            </div>
        </section>

        <hr>
        <section class="sec-directors">
            <h3>Board of Directors</h3>

            <div class="directors">

                <div class="director">
                    <img class="bod-img" src="img/bod/va.jpg" alt="">
                    <p class="bod-text">Mr. Vatsal Agarwaal</p>
                    <p class="bod-text">Director</p>
                </div>
                <div class="managing-director">
                    <img class="bod-img" src="img/bod/vk.png" alt="">
                    <p class="bod-text">Mr. Vineet Kumar</p>
                    <p class="bod-text">Managing Director</p>
                </div>
                <div class="cfo">
                    <img class="bod-img" src="img/bod/rk.jpg" alt="">
                    <p class="bod-text">Mr. Robin Keshri</p>
                    <p class="bod-text">CFO</p>
                </div>
            </div>
        </section>
        <hr>

        <!-- <section class="sec-send-inquiry">
            <div class="cls-inquiry">
                <h2>Send Us Coke Inquiry Now</h2>

                <div class="inquiry-btn">
                    <button type="button" class="btn btn-primary">Click here</button>

                </div>

            </div>
        </section> -->

    </section>
</main>
<?php
include("footer.php");
?>