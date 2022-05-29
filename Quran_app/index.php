<?php
include "header.php";
?>
    <section>
        <div class="gap no-gap">
            <div class="featured-area-wrap slider2 text-center">
                <div class="featured-area owl-carousel">
                    <div class="featured-item" style="background-image: url(assets/images/resources/slide-4.jpg);">
                        <div class="featured-cap">
                            <img src="assets/images/resources/bsml-txt.png" alt="bsml-txt.png">
                            <h1><img src="assets/images/resources/ayat-txt.png" alt="ayat-txt.png"></h1>
                            <img class="before-imge" src="assets/images/pshape.png" alt="">
                            <h3>He Raised the Sky and Set Up the Balance</h3>
                            <span>(Surah Al-Rahmaan Verse 7)</span>
                            <a class="theme-btn theme-bg brd-rd5" href="read.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="featured-item" style="background-image: url(assets/images/resources/slide2.jpg);">
                        <div class="featured-cap">
                            <img src="assets/images/resources/bsml-txt2.png" alt="bsml-txt2.png">
                            <h1><img src="assets/images/resources/ayat-txt.png" alt="ayat-txt2.png"></h1>
                            <img class="before-imge" src="assets/images/pshape.png" alt="">
                            <h3>He Raised the Sky and Set Up the Balance</h3>
                            <span>(Surah Al-Rahmaan Verse 7)</span>
                            <a class="theme-btn theme-bg brd-rd5" href="#" title="">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section>
        <div class="gap">
            <div class="container">
                <div class="abt-sec-wrp style2">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-vdo style2 brd-rd5">
                                <img src="assets/images/resources/abt-img2.jpg" alt="abt-img2.jpg" itemprop="image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-desc">
                                <div class="sec-tl">
                                    <span class="theme-clr">Our History</span>
                                    <h2 itemprop="headline">About Islamic Center</h2>
                                    <img src="assets/images/pshape.png" alt="">
                                </div>
                                <p itemprop="description">We established our center in 1954, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris .Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p>
                                <p itemprop="description">Visit our premises sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="theme-btn theme-bg brd-rd5" href="about.html" title="" itemprop="url">READ
                                    MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap white-layer opc9">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
            <div class="container">
                <div class="sec-tl">
                    <span class="theme-clr">Select Country & City For</span>
                    <h2 itemprop="headline">Prayer Timings</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="prayer-timing-wrp">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="timing-mockp"><img src="assets/images/resources/prayer-time-mockp.png"
                                    alt="prayer-time-mockp.png" itemprop="image"></div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="timing-data">
                                <div class="cntry-selc">
                                    <div class="selec-wrp brd-rd5">
                                        <select id="comboA" onchange="get_azan_time(this)">
                                            <option>Select Country</option>
                                            <option>UAE</option>
                                            <option>Turkey</option>
                                            <option>Pakistan</option>
                                        </select>
                                    </div>
                                    <div class="selec-wrp brd-rd5">
                                        <select id="comboB" onchange="get_azan_time(this)">
                                            <option>Select Location</option>
                                            <option>Dubai</option>
                                            <option>Ankarah</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="result-update"></div>
                                <div class="prayer-timings text-center">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th><span>Name of Salat</span><img src="assets/images/pshape.png"
                                                        alt=""></th>
                                                <th><span>Azan Time</span><img src="assets/images/pshape.png"
                                                        alt=""></th>
                                                <th><span>Prayer Time</span><img src="assets/images/pshape.png"
                                                        alt=""></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td><span>Fajar</span></td>
                                                <td class="fajr-azan-time">03:24 am</td>
                                                <td class="fajr-azan-prayer">04:30 am</td>
                                            </tr>
                                            <tr>
                                                <td><span>SunRise</span></td>
                                                <td class="sunrise-azan-time">05:10 am</td>
                                                <td class="sunrise-azan-prayer">05:10 am</td>
                                            </tr>
                                            <tr>
                                                <td><span>Zohar</span></td>
                                                <td class="zohar-azan-time">12:15 pm</td>
                                                <td class="zohar-azan-prayer">01:45 pm</td>
                                            </tr>
                                            <tr>
                                                <td><span>Asar</span></td>
                                                <td class="asr-azan-time">05:10 pm</td>
                                                <td class="asr-azan-prayer">05:30 pm</td>
                                            </tr>
                                            <tr>
                                                <td><span>Maghrib</span></td>
                                                <td class="maghrib-azan-time">07:15 pm</td>
                                                <td class="maghrib-azan-prayer">07:20 pm</td>
                                            </tr>
                                            <tr>
                                                <td><span>Isha</span></td>
                                                <td class="isha-azan-time">09:05 pm</td>
                                                <td class="isha-azan-prayer">09:25 pm</td>
                                            </tr>
                                            <tr>
                                                <td><span>SunSet</span></td>
                                                <td class="juma-azan-time">01:00 pm</td>
                                                <td class="juma-azan-prayer">02:00 pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap white-layer opc9">
            <img class="vector-bg-service" src="assets/images/bg-vector-3.png" alt="vector-bg" itemprop="image">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">Our Worldwide</span>
                    <h2 itemprop="headline">Offered Services</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="serv-wrp remove-ext3">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-bx text-center">
                                <i class="flaticon-open-book theme-clr"></i>
                                <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">Quran
                                        Learning</a></h5>
                                <div class="srv-inf theme-bg brd-rd10">
                                    <p itemprop="description">Quran Teaching sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-bx text-center">
                                <i class="flaticon-grave theme-clr"></i>
                                <h5 itemprop="headline"><a href="service-detail.html" title=""
                                        itemprop="url">Funeral Service</a></h5>
                                <div class="srv-inf theme-bg brd-rd10">
                                    <p itemprop="description">Providing expenses amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-bx text-center">
                                <i class="flaticon-mosque theme-clr"></i>
                                <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">Mosque
                                        Development</a></h5>
                                <div class="srv-inf theme-bg brd-rd10">
                                    <p itemprop="description">Renovation of mosques sit amet, consectetur elit, sed
                                        do eiusmod tempor incididunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-bx text-center">
                                <i class="flaticon-begging theme-clr"></i>
                                <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">Helps
                                        Poor</a></h5>
                                <div class="srv-inf theme-bg brd-rd10">
                                    <p itemprop="description">Gives food and shelter sit amet, consectetur elit, sed
                                        do eiusmod tempor incididunt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap black-layer opc8">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax2.jpg);"></div>
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">About Essential</span>
                    <h2 itemprop="headline">Pillars Of Islam</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="remove-ext3">
                    <ul class="plrs-wrp text-center">
                        <li>
                            <a class="plr-bx" href="./new_quran/read.html">
                                <i class="flaticon-clicker brd-rd50"></i>
                                <h5 itemprop="headline">Read Qur'an</h5>
                                <span class="theme-clr">(Faith)</span>
                            </a>
                        </li>
                        <li>
                            <a href="./new_quran/listen.html" class="plr-bx">
                                <i class="flaticon-muslim-man-praying brd-rd50"></i>
                                <h5 itemprop="headline">Listen Qur'an</h5>
                                <span class="theme-clr">(Prayer)</span>
                            </a>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-islamic-ramadan brd-rd50"></i>
                                <h5 itemprop="headline">Sawm</h5>
                                <span class="theme-clr">(Fasting)</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-money brd-rd50"></i>
                                <h5 itemprop="headline">Zakat</h5>
                                <span class="theme-clr">(Almsgiving)</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-kaaba-building brd-rd50"></i>
                                <h5 itemprop="headline">Hajj</h5>
                                <span class="theme-clr">(Pilgrimage)</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">Latest News & Updates</span>
                    <h2 itemprop="headline">Our Blog & Events</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="remove-ext3">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="post-bx lst brd-rd5">
                                <div class="post-thmb"><a href="blog-detail.html" title="" itemprop="url"><img
                                            src="assets/images/resources/post-img1-1.jpg" alt="post-img1-1.jpg"
                                            itemprop="image"></a></div>
                                <div class="post-inf">
                                    <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Is
                                            Islam a Liberal Philosophy?</a></h5>
                                    <ul class="pst-mta">
                                        <li><i class="far fa-calendar-alt theme-clr"></i> Nov 17, 2020</li>
                                        <li><i class="far fa-user theme-clr"></i><a href="#" title=""
                                                itemprop="url">William Blake</a></li>
                                    </ul>
                                    <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing
                                        elit sed do eiusd.</p>
                                    <a href="blog-detail.html" title="" itemprop="url">View Details</a>
                                </div>
                            </div>
                            <div class="post-bx lst brd-rd5">
                                <div class="post-thmb"><a href="blog-detail.html" title="" itemprop="url"><img
                                            src="assets/images/resources/post-img1-2.jpg" alt="post-img1-2.jpg"
                                            itemprop="image"></a></div>
                                <div class="post-inf">
                                    <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Is
                                            Islam a Liberal Philosophy?</a></h5>
                                    <ul class="pst-mta">
                                        <li><i class="far fa-calendar-alt theme-clr"></i> Dec 17, 2020</li>
                                        <li><i class="far fa-user theme-clr"></i><a href="#" title=""
                                                itemprop="url">William Blake</a></li>
                                    </ul>
                                    <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing
                                        elit sed do eiusd.</p>
                                    <a href="blog-detail.html" title="" itemprop="url">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="event-bx brd-rd5"
                                style="background-image: url(assets/images/resources/event-img1-1.jpg);">
                                <span class="theme-clr">17 <i>May</i></span>
                                <h5 itemprop="headline"><a href="event-detail.html" title=""
                                        itemprop="url">Importance Of Prayer In Islam</a></h5>
                                <ul class="pst-mta">
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i> Dehli, Jamia Mosque</li>
                                    <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 08:00 pm</li>
                                </ul>
                                <a href="event-detail.html" title="" itemprop="url">Event Details</a>
                            </div>
                            <div class="event-bx brd-rd5"
                                style="background-image: url(assets/images/resources/event-img1-2.jpg);">
                                <span class="theme-clr">25 <i>Nov</i></span>
                                <h5 itemprop="headline"><a href="event-detail.html" title=""
                                        itemprop="url">Importance Of Prayer In Islam</a></h5>
                                <ul class="pst-mta">
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i> Dhaka, Islamic Center</li>
                                    <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 08:00 pm</li>
                                </ul>
                                <a href="event-detail.html" title="" itemprop="url">Event Details</a>
                            </div>
                            <div class="event-bx brd-rd5"
                                style="background-image: url(assets/images/resources/event-img1-3.jpg);">
                                <span class="theme-clr">10 <i>Dec</i></span>
                                <h5 itemprop="headline"><a href="event-detail.html" title=""
                                        itemprop="url">Importance Of Prayer In Islam</a></h5>
                                <ul class="pst-mta">
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i> Park, Islamic Center</li>
                                    <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 08:00 pm</li>
                                </ul>
                                <a href="event-detail.html" title="" itemprop="url">Event Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap no-gap white-layer opc8">
            <div class="fixed-bg2" style="background-image: url(assets/images/parallax3.jpg);"></div>
            <div class="dnt-sec-wrp">
                <div class="row mrg">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-img-wrp dnt-car owl-carousel">
                            <div class="img-thmb"
                                style="background-image: url(assets/images/resources/car-img1-1.jpg);"></div>
                            <div class="img-thmb"
                                style="background-image: url(assets/images/resources/car-img1-2.jpg);"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-wrp">
                            <div class="sec-tl">
                                <span class="theme-clr">Give Food & Shelter To Poor</span>
                                <h2 itemprop="headline">Make Your Donation</h2>
                                <img src="assets/images/pshape.png" alt="">
                            </div>
                            <div class="dnt-lst">
                                <a class="brd-rd30" href="#" title="" itemprop="url">$100</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$200</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$300</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">other</a>
                            </div>
                            <form class="dnt-frm">
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Phone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Address">
                                    </div>
                                </div>
                            </form>
                            <img src="assets/images/pay-img.png" alt="pay-img.png" itemprop="image">
                            <div class="prg-wrp">
                                <h5 itemprop="headline">Raise Funds For poor</h5>
                                <div class="progress brd-rd5">
                                    <div class="progress-bar w70 theme-bg"><span
                                            class="brd-rd50 theme-bg">70%</span></div>
                                </div>
                                <span>Raised: <i class="theme-clr">$400.00</i></span> <span>Goal: <i
                                        class="theme-clr">$650.00</i></span>
                            </div>
                            <a class="theme-btn theme-bg brd-rd5" href="cause.html" title="" itemprop="url">DONATE
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">Our Expert</span>
                    <h2 itemprop="headline">Islamic Scholars</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="team-sec remove-ext7">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="team-bx text-center">
                                <div class="team-thmb brd-rd5"><a href="team-detail.html" title=""
                                        itemprop="url"><img src="assets/images/resources/team-img1-1.jpg"
                                            alt="team-img1-1.jpg" itemprop="image"></a></div>
                                <div class="team-inf brd-rd5">
                                    <div class="scl1">
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </div>
                                    <h5 itemprop="headline"><a href="team-detail.html" title=""
                                            itemprop="url">Sharuf Al Hammam</a></h5>
                                    <span>Islamic Scholar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="team-bx text-center">
                                <div class="team-thmb brd-rd5"><a href="team-detail.html" title=""
                                        itemprop="url"><img src="assets/images/resources/team-img1-2.jpg"
                                            alt="team-img1-2.jpg" itemprop="image"></a></div>
                                <div class="team-inf brd-rd5">
                                    <div class="scl1">
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </div>
                                    <h5 itemprop="headline"><a href="team-detail.html" title=""
                                            itemprop="url">Maryam Sheikh</a></h5>
                                    <span>Islamic Scholar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="team-bx text-center">
                                <div class="team-thmb brd-rd5"><a href="team-detail.html" title=""
                                        itemprop="url"><img src="assets/images/resources/team-img1-3.jpg"
                                            alt="team-img1-3.jpg" itemprop="image"></a></div>
                                <div class="team-inf brd-rd5">
                                    <div class="scl1">
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </div>
                                    <h5 itemprop="headline"><a href="team-detail.html" title="" itemprop="url">Samih
                                            Ibn Ali</a></h5>
                                    <span>Islamic Scholar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-more text-center">
                    <a class="theme-btn theme-bg brd-rd5" href="team.html" title="" itemprop="url">VIEW MORE</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <footer>
        <div class="gap no-gap">
            <img class="vector-bg-footer" src="assets/images/bg-vector.png" alt="vector-bg" itemprop="image">
            <div class="container">
                <div class="footer-data brd-rd20 overlap-220">
                    <div class="footer-data-inr">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">About Us</h5>
                                    <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing
                                        elit, sed do eiusd tempor incididunt ut labore dolore magna aliqua tempor.
                                    </p>
                                    <div class="loc-mp brd-rd5" id="loc-mp"></div>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Find us on Map</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">Latest Blogs</h5>
                                    <div class="rcnt-wrp">
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img
                                                    src="assets/images/resources/rcnt-img1.jpg" alt="rcnt-img1.jpg"
                                                    itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Help Poor People</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 09,
                                                    2020</span>
                                            </div>
                                        </div>
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img
                                                    src="assets/images/resources/rcnt-img2.jpg" alt="rcnt-img2.jpg"
                                                    itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Learn Modern Islam</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 05,
                                                    2020</span>
                                            </div>
                                        </div>
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img
                                                    src="assets/images/resources/rcnt-img2.jpg" alt="rcnt-img2.jpg"
                                                    itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Learn Modern Islam</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 05,
                                                    2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">Contact Info</h5>
                                    <ul class="cnt-inf">
                                        <li><i class="far fa-envelope theme-clr"></i><a href="#" title=""
                                                itemprop="url">bismillah@mail.com</a></li>
                                        <li><i class="fas fa-phone theme-clr"></i><span>1800-123-456-7</span></li>
                                        <li><i class="fas fa-map-marker-alt theme-clr"></i>19-J David Road H Block,
                                            America</li>
                                        <li><i class="fas fa-fax theme-clr"></i>1800-123-456-7</li>
                                    </ul>
                                    <div class="scl1">
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                class="fab fa-google-plus-g"></i></a>
                                        <a href="#" title="Instagram" itemprop="url" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                        <a href="#" title="Youtube" itemprop="url" target="_blank"><i
                                                class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">Quick Contact</h5>
                                    <form>
                                        <div class="row mrg10">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input class="brd-rd5" type="text" placeholder="Name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input class="brd-rd5" type="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea class="brd-rd5" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="brd-rd5 theme-btn theme-bg">SUBMIT NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpy-rgt text-center">
                        <p itemprop="description"><a href="#" title="" itemprop="url" target="_blank">BISMILLAH</a>
                            &copy; 2020 / ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- <section>
        <div class="gap theme-bg bottom-spac50 top-spac270">
            <div class="container">
                <div class="newsletter-wrp">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <h4 itemprop="headline">Subscribe, For Weekly Updates</h4>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <form class="newsletter brd-rd30">
                                <input type="email" placeholder="Enter your email address">
                                <button type="submit" class="green-bg theme-btn">SIGNUP NOW</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<?php

include 'footer.php'

?>