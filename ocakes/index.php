<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
           
        </div>
         <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
        </div> 
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            
        </div>
    </div>
    <!-- Offcanvas Menu  End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                            <ul>
                                    <?php if (isset($_SESSION['logged_in'])): ?>
                                        <li><a href="profile.php"><?php echo $_SESSION['fullname']; ?>'s Profile</a></li>
                                        <li><a href="logout.php">Log-out</a></li>
                                 	   <?php else: ?>
                                        <li><a href="signup.html">Sign-up</a></li>
                                        <li><a href="login.html">Log-in</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="bgcover.png">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life Personalize!</h2>
                                <a href="#" class="primary-btn">Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="bgcover.png">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Souvenirs, Gifts, Giveaways, Prints!</h2>
                                <a href="#" class="primary-btn">Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Imageplay shop</span>
                            <h2>Souvenirs, Gifts, Giveaways, Prints!</h2>
                        </div>
                        <p>The "Imageplay" started as a small siblings business. The owners are
                        Kathlene Joyce, Ross Jhem, and Kurt Russelle.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Quality</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Class</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our team</span>
                        <h2>The Owners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="ross.jpg">
                        <div class="team__item__text">
                            <h6>Ross Jhem P. Acopio</h6>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/rossjhempacopio"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="kath.jpg">
                        <div class="team__item__text">
                            <h6>Kathlene Joyce P. Acopio</h6>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/kathlenejoyceacopio"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="kurt.jpg">
                        <div class="team__item__text">
                            <h6>Kurt Russelle P. Acopio</h6>
                            <div class="team__item__social">
                                <a href="https://www.facebook.com/kurt.acopio.9"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t39.30808-6/461756010_1195085928381476_1955507016216130696_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEMr0Utem4jo_V8wuaqVdykZZMoc5ouz79lkyhzmi7Pv_1KyP2ViiS5Jog61sGUZWBTLklAC1skOy23BqF0Cp6U&_nc_ohc=cJlvNhCIOhsQ7kNvgE0TCSJ&_nc_zt=23&_nc_ht=scontent.fmnl4-3.fna&_nc_gid=Ayj3brHpt3R6o0GPzQcx0Ey&oh=00_AYBmonNNvLKp0kX7aLe0Dzn-aCL_fsZ0a4uHA698FskN-w&oe=6751ECD9" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Gia Marie Magtubo Dizon</h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>Satisfied customer here! 💞 Highly recommended ang shop na ito 😍 Sobrang ganda ng mga items na ginawa nila. Super linis ng pagkakagawa. Dito ulit ako magpapagawa kapag may okasyon kami.
                                Thank you for being part of my happily ever after 💞</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/440160712_25356057297374623_2498577165441444214_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEe4pEdNKW6yQo2VDEwjq9BOwBciHOWFQ87AFyIc5YVDzIIFHg3nWtYWqFfy3oCyNsmpv9n1tOr9XbRzT4Akcj-&_nc_ohc=mrIOpopQHP0Q7kNvgH_MDmH&_nc_zt=23&_nc_ht=scontent.fmnl4-6.fna&_nc_gid=AMrlaYfVpfLbr620yEs9Ukd&oh=00_AYC1q0qv7rDjexjsgV9XxdFX7R9tc4vAptE473EdlrNOyA&oe=6751BE3D" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Edel Clarice S. Bugarin </h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>Quality of the wrapping was high-standard and the packaging was nice. The seller was able to provide good service. good quality and affordable. I highly recommended this shop for this kind of event 5.5 ⭐️⭐️⭐️⭐️⭐️
                                Thank you so much for the freebies i will order again!!!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/306917026_6146743142009675_8645368028979431114_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEX4K5DRKcFhic_U8QZj8SJnASDyDrmDLCcBIPIOuYMsIRPvvAF9IVVfUAoQLealmHhzz1LYEzw6ylvHvmdmPvd&_nc_ohc=TGlBE2m6I2UQ7kNvgGX7knL&_nc_zt=23&_nc_ht=scontent.fmnl4-6.fna&_nc_gid=Ar0fCTwTGqHfWyZt9MSIoph&oh=00_AYAF_IaXMnu8wEOcXnXQIPtp8LfkCYkBwnBqIVTfEsWlIA&oe=6751D7DB" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Chin Barriga </h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>Very Highly Recommended lalo na sa pag gawa nila ng Souvenirs napaka linis at napaka ganda ng pagawa 🥰 and napakabait at respeto nila kausap unlike kase sa iba masungit at parang tamad makipag usap. sakanila priority ka nila at bibigyan ka pa ng mga suggestion if wala kang idea sa design 🥰 Kayaa sa rating ko 5 stars to kung meron lang mas higit sa 5 stars yun ang rate ko sakanila✨😂🥰🥰
                                The best 👏🏻 very affordable pa ang mga prices 👌🏻💖</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-1/435804923_7171674332944007_843803803643922676_n.jpg?stp=dst-jpg_s200x200&_nc_cat=100&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeHHohMlSfznsthbN8--01QLWhytm6bOTXBaHK2bps5NcP8QSummIBCe29wEgGK-0C8L0nL_es0evwOkqQUNCNJZ&_nc_ohc=yetV72BmuC0Q7kNvgGzGGSr&_nc_zt=24&_nc_ht=scontent.fmnl4-4.fna&_nc_gid=AP_Q14mVXT51x3GRaV3UN0k&oh=00_AYChrQzTQ8xkAk_iJBfDRSbneJOvvWqGPl_BVEMJcVkvdw&oe=6751E01E" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>MariaLiza Naboya</h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>Thank you so much Imageplay sa napakagagandang giveaways and Tarpaulin
                                ❤️ Di nio ko binigo ❤️  Highly recommended 1000/10</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-7.fna.fbcdn.net/v/t39.30808-6/364670826_2781328275342708_9177897689823094975_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFZcbfm-OUlPEvT2qJi1K1Pkbswg9McEpaRuzCD0xwSlgW25rgDjCWnjAg7xz1_eDdKmMqlcKsNvNpRamSLQ2vz&_nc_ohc=ZTXArv7oaNcQ7kNvgGgXGKM&_nc_zt=23&_nc_ht=scontent.fmnl4-7.fna&_nc_gid=ADlObbWvf-HhQ3v6ouHrSHA&oh=00_AYDIQlP9GzORZDir6-WCn4vK_FNAnbmjlxZexoBH-khVdA&oe=6751BE44" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Marilou Naguit </h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>I enthusiastically endorse this shop. Their customer service is exceptional, super bait ni seller hehe, making transactions seamless. The quality of their products is superb.
                                Plus, super clear magbigay ng direction. (5/5) 💖💖💖</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t39.30808-6/448615347_3062037083934022_2008556445197276196_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEXrrs_sRW1uF7d5kYAvv15YK57fUXgPOZgrnt9ReA85j5yxW-PlGBOO3yHfgxvZO2qN_VB-dqpZYOXxiWybCP2&_nc_ohc=ElYXA4rQZEsQ7kNvgGH9s4g&_nc_zt=23&_nc_ht=scontent.fmnl4-2.fna&_nc_gid=ArbMI-40SALZTivrvTzzy3F&oh=00_AYAFnsM9Ud-t2C6yM0PGnmB0cWD6EQpGarnzbs6EVnQXgg&oe=6751D821" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Carla Jane Baring Largoza</h5>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                            </div>
                            <p>Hi! I really really appreciate your products, sobrang ganda and nasunod po talaga yung request namin. Maayos po kausap si seller.
                                These souveniers from Angeles Pampanga was delivered here in QC safely, complete and no damage po ang products kasi well packed and organized.
                                Then binabalik po talaga nila yung excess sa delivery fee agad once they delivered the products po sa shipping companies (in our case thru victory liner drop&go which they recommend because it is much cheaper and safer).
                                Their product are highly recommended talaga,sa uulitin po. 😊 Sana po dumami pa ang inyong clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>BSCS - 308</span>
                            <h2>THE DEVELOPERS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/462570505_2029456097485526_3738319139133963699_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=9f807c&_nc_ohc=bWvr1IrQczsQ7kNvgEHGtLE&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD1QHZdYbXjHIyAyo0juM-reTOuoCFqqxZkERbKWghZN-NeQ&oe=6774EF30" alt="" width="250" height="250">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t39.30808-6/440441407_477766314673334_7578430902684119139_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=qcR4dkBSVBAQ7kNvgE0qI4Z&_nc_zt=23&_nc_ht=scontent.fcrk1-2.fna&_nc_gid=AzywU7HCPDSG9WCCIDW0wfI&oh=00_AYBrumUjzqLInQ46hohQf4iioRkGIeH0Q1SN9-xS-8w1_Q&oe=67532B84" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/462579919_581944807552930_2852320179390486355_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=9f807c&_nc_ohc=3eXm-BdL-jcQ7kNvgG89L5a&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD1QHckkC8akDyUY-ji4E-J2CvTYZy59dY2wmji2GD2MIFEA&oe=6774C239" alt="" width="250" height="250">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t1.15752-9/464680513_613516277693566_6330930678898523568_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=9f807c&_nc_ohc=I8-vKCvyfI8Q7kNvgGad4gY&_nc_zt=23&_nc_ht=scontent.fcrk1-3.fna&oh=03_Q7cD1QEoXdl6wi1NTYdsAcGMqAEu--9yDUyQx7SLVViTyxJEqQ&oe=6774C141" alt=""width="250" height="250">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/464673732_1094997575682881_7231371186221552137_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9f807c&_nc_ohc=UTDKU1VNzCwQ7kNvgHoLMAl&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1QHRbenawHrNxRS2Nc7rtUbkbrDI3UUIFHFInn4Yyd6Nig&oe=6774E818" alt="" width="250" height="250">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/462580182_544295238515337_2319727632326946542_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9f807c&_nc_ohc=TthLoIfvfGsQ7kNvgF_7ML5&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1QET7hZxW4ix-v1oUSEv0UDZJuXigXAXTsEZv830EOzr2w&oe=6774CF0C" alt="" width="250" height="250">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/462580182_544295238515337_2319727632326946542_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9f807c&_nc_ohc=TthLoIfvfGsQ7kNvgF_7ML5&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1QET7hZxW4ix-v1oUSEv0UDZJuXigXAXTsEZv830EOzr2w&oe=6774CF0C" alt="" width="250" height="250">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="bgcover.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Saturday: 09:00 am – 06:00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="https://web.facebook.com/imageplay3"><img src="img.png" alt=""></a>
                        </div>
                        <p>Make it Personalize!</p>
                        <div class="footer__social">
                            <a href="https://web.facebook.com/imageplay3"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>