<?php include 'inc/inc.seo.php' ?>
</head>

<body>

    <!-- header -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header -->

    <main>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/banner01mob.jpg">
                        <source media="(min-width: 576px)" srcset="img/banner/banner01.jpg">
                        <img class="d-block w-100 banner-desk" src="img/banner/banner01.jpg" alt="Banner 1" title="Banner 1">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/banner02mob.jpg">
                        <source media="(min-width: 576px)" srcset="img/banner/banner02.jpg">
                        <img class="d-block w-100 banner-desk" src="img/banner/banner02.jpg" alt="Banner 2" title="Banner 2">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 575px)" srcset="img/banner/banner03mob.jpg">
                        <source media="(min-width: 576px)" srcset="img/banner/banner03.jpg">
                        <img class="d-block w-100 banner-desk" src="img/banner/banner03.jpg" alt="Banner 3" title="Banner 3">
                    </picture>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="about mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center mt-5 mb-5">
                            <h1 class="underline-title">ABOUT US</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <p>For over 30 years, commitment to our Core Values has made Edifice Construction Company the ideal building partner for the region's most forward-thinking organizations. Our success comes from a steadfast commitment to the client's vision and a culture of balance, integrity, leadership, and dedication to our customers.</p>
                        </div>
                        <div class="icon-area">
                            <div class="icon-single">
                                <h2><i class="fas fa-handshake"></i> PROFESSIONAL APPROACH</h2>
                                <div class="icon-text">
                                    <p>Our approach to building sustainable facilities is based on high professionalism and delivering projects with fairness and excellence.</p>
                                </div>
                            </div>
                            <div class="icon-single">
                                <h2><i class="fas fa-users"></i> EXPERT TEAM</h2>
                                <div class="icon-text">
                                    <p>We employ the best experts in construction that make our every project a reliable one. You can trust each member of Edifice team.</p>
                                </div>
                            </div>
                            <div class="icon-single">
                                <h2><i class="fas fa-lightbulb"></i> BEST SOLUTIONS</h2>
                                <div class="icon-text">
                                    <p>Our company offers top-notch construction solutions to corporate and individual clients worldwide, while also covering their needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="thumb">
                            <img class="img-fluid" src="img/gallery/about.jpg" alt="About Us" title="About Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'inc/inc.topics.php' ?>

        <div class="gallery-area mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="section-title text-center mt-5 mb-5">
                            <h2 class="underline-title">OUR PROJECTS</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/01.jpg" data-fancybox="gallery">
                                <img src="img/projects/01.jpg" class="img-fluid" alt="Project 1" title="Project 1">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/02.jpg" data-fancybox="gallery">
                                <img src="img/projects/02.jpg" class="img-fluid" alt="Project 2" title="Project 2">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/03.jpg" data-fancybox="gallery">
                                <img src="img/projects/03.jpg" class="img-fluid" alt="Project 3" title="Project 3">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/04.jpg" data-fancybox="gallery">
                                <img src="img/projects/04.jpg" class="img-fluid" alt="Project 4" title="Project 4">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/05.jpg" data-fancybox="gallery">
                                <img src="img/projects/05.jpg" class="img-fluid" alt="Project 5" title="Project 5">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="d-flex justify-content-center">
                            <a href="img/projects/06.jpg" data-fancybox="gallery">
                                <img src="img/projects/06.jpg" class="img-fluid" alt="Project 6" title="Project 6">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'inc/inc.parallax.php' ?>

        <div class="services-area section-padding mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center mt-5 mb-5">
                            <h2 class="underline-title">OUR SERVICES</h2>
                        </div>
                    </div>

                    <!-- Pre-Construction Services -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-drafting-compass icon-service"></i>
                            <div>
                                <h3>PRE-CONSTRUCTION SERVICES</h3>
                                <p>We take our time on initial planning before any construction begins, to balance all the financial and efficiency issues beforehand.</p>
                            </div>
                        </div>
                    </div>

                    <!-- General Contracting -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-hard-hat icon-service"></i>
                            <div>
                                <h3>GENERAL CONTRACTING</h3>
                                <p>We have a long list of professional contractors, whom our engineers and architects enjoy to work with on a majority of our projects!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Services -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-tools icon-service"></i>
                            <div>
                                <h3>CONSTRUCTION SERVICES</h3>
                                <p>Our customers love the pace/quality tempo that we show during each of the principal construction processes!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Management -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-clipboard-list icon-service"></i>
                            <div>
                                <h3>CONSTRUCTION MANAGEMENT</h3>
                                <p>Construction project management is essential. We're using the most time and iterations efficient life cycles methods for that.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Building Information Modeling (BIM) -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-cube icon-service"></i>
                            <div>
                                <h3>BUILDING INFORMATION MODELING (BIM)</h3>
                                <p>Oftentimes physical and functional essence of any construction project needs to be represented digitally, in a 3D model format.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Design-Build -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-pencil-ruler icon-service"></i>
                            <div>
                                <h3>DESIGN-BUILD</h3>
                                <p>If a project is not too complex, we may hire a designer-builder type of contractor, to make the longevity of the construction shorter.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cost Containment -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-coins icon-service"></i>
                            <div>
                                <h3>COST CONTAINMENT</h3>
                                <p>It is vital for any contractor not to exceed the budget and that is why we pay utmost attention to cost containment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Assurance -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-check-circle icon-service"></i>
                            <div>
                                <h3>QUALITY ASSURANCE</h3>
                                <p>Every project we work on is checked for quality assurance to satisfy the needs of the modern society.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Equipment Installation -->
                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <div class="single-service">
                            <i class="fas fa-toolbox icon-service"></i>
                            <div>
                                <h3>EQUIPMENT INSTALLATION</h3>
                                <p>Our professional team can install all kinds of equipment in the finished building as a part of post-construction services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="pricing mb-5">
            <div class="section-title text-center mt-5 mb-5">
                <h2 class="underline-title">PRICING</h2>
            </div>
            <div class="pricing-container">
                <div class="pricing-card col-lg-6 col-md-6 mb-6">
                    <h3>STARTER</h3>
                    <p class="price">$14.89 <span>/monthly</span></p>
                    <ul>
                        <li>Construction Planning</li>
                        <li>Cost Containment</li>
                        <li>General Contracting</li>
                        <li>Phone Consultation</li>
                    </ul>
                    <button>BUY NOW!</button>
                </div>

                <div class="pricing-card popular col-lg-6 col-md-6 mb-6">
                    <h3>STANDARD</h3>
                    <p class="price">$32.89 <span>/monthly</span></p>
                    <ul>
                        <li>Pre-construction Services</li>
                        <li>Construction Administration</li>
                        <li>Virtual Design</li>
                        <li>Project Management</li>
                    </ul>
                    <button>BUY NOW!</button>
                    <div class="popular-badge"><img src="img/gallery/most-popular.png" alt="Most Popular"></div>
                </div>

                <div class="pricing-card col-lg-6 col-md-6 mb-6">
                    <h3>BUSINESS</h3>
                    <p class="price">$76.89 <span>/monthly</span></p>
                    <ul>
                        <li>Construction Services</li>
                        <li>Self-perform</li>
                        <li>Construction Management</li>
                        <li>Cost Estimation</li>
                    </ul>
                    <button>BUY NOW!</button>
                </div>

                <div class="pricing-card col-lg-6 col-md-6 mb-6">
                    <h3>PROFESSIONAL</h3>
                    <p class="price">$89.89 <span>/monthly</span></p>
                    <ul>
                        <li>Design-build</li>
                        <li>Equipment Installation</li>
                        <li>Quality Assurance</li>
                        <li>Green Construction</li>
                    </ul>
                    <button>BUY NOW!</button>
                </div>
            </div>
        </section>

        <div class="testimonial-area fix mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="section-title text-center mt-5 mb-5">
                            <h2 class="underline-title">WHAT PEOPLE SAY</h2>
                        </div>
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Imagem do Depoimento -->
                                <div class="testimonial-icon mb-4">
                                    <img src="img/avavaliacoes/jane.jpg" alt="Jane Smith" title="Jane Smith">
                                </div>
                                <!-- Conteúdo do Depoimento -->
                                <div class="testimonial-caption text-center">
                                    <p>For 22 years, we have partnered with Edifice on a variety of projects, and each time they are completed on time and on budget. Our relationship is built on quality and trust. We recommend them for any job—big or small.</p>
                                    <div class="rattiong-caption">
                                        <span>Jane Smith</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Segundo Depoimento -->
                            <div class="single-testimonial pt-65">
                                <!-- Imagem do Depoimento -->
                                <div class="testimonial-icon mb-4">
                                    <img src="img/avavaliacoes/crifor.jpg" alt="Clifford Frazier" title="Clifford Frazier">
                                </div>
                                <!-- Conteúdo do Depoimento -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and follow the well-worn path. You need to create a new and original path for yourself.</p>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="blog-area section-padding mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center mt-5 mb-5">
                            <h2 class="underline-title">RECENT NEWS
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="img/gallery/about.jpg" alt="Ribbon Cut to Open New Bus Center" title="Ribbon Cut to Open New Bus Center">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="#">RIBBON “CUT” ТО ОРЕN NEW BUS
                                            CENTER</a></h3>
                                    <p><span>Jan.20, 2018</span> by Brian Williamson
                                    </p>
                                    <p>Yesterday was a big day for the City of Burlington as a Green Mountain Transit bus literally drove through the ribbon to officially open the new Downtown Transit Center in Vermont. We have finally...</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="img/gallery/about.jpg" alt="New DoubleRed Residence Facility" title="New DoubleRed Residence Facility">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="#">NEW DOUBLERED RESIDENCE FACILITY
                                        </a></h3>
                                    <p><span>Jan.20, 2018</span> by Brian Williamson
                                    </p>
                                    <p>Last month, our construction company turned over the 110,000-square-foot, 237-bed Fox Run at Fulton housing facility for occupancy. Located adjacent to Marist College, the facility is now home to 237...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="img/gallery/about.jpg" alt="667 Congress Street Project Finished" title="667 Congress Street Project Finished">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="#">667 CONGRESS STREET PROJECT IS
                                            FINISHED!</a></h3>
                                    <p><span>Jan.20, 2018</span> by Brian Williamson
                                    </p>
                                    <p>Today we commemorated the completion of steel erection at the 667 Congress Street Apartments project with a traditional topping out ceremony. Despite the dreary weather, spirits were high in Portland, Maine, as...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.4926494013935!2d-46.564367399999995!3d-23.550743599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5fd709bb842f%3A0x4a1b6b907f391a72!2sAg%C3%AAncia%20Bloomin!5e0!3m2!1spt-BR!2sbr!4v1741663289506!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </main>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>

    <!-- footer -->
    <?php include 'inc/inc.footer.php' ?>
    <!-- footer -->

    <?php include 'inc/inc.js.php' ?>
    <!-- JS here -->

</body>

</html>