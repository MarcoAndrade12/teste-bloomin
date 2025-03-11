<?php include 'inc/inc.seo.php' ?>
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center ajust-padding">
                            <h1>Contato</h1>
                            <p class="color-w"><a class="ajust-link" href="./" title="Ir ao início">Home</a> | <a class="ajust-link"><?= $title ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Entre em Contato</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contato_envia.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'"
                                        placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'"
                                        placeholder="Assunto">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'"
                                        placeholder=" Mensagem"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 mb-5">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3><a href="<?php echo CONF_SITE_MAP_LINK;?>" target="_blank"> <?php echo CONF_SITE_STREET_1;?></a>
                            </h3>
                            <p><?php echo CONF_SITE_STREET_2;?></p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK;?>"> <?php echo CONF_SITE_PHONE;?> 
                                </a> | <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK;?>"
                                    target="_blank"> <?php echo CONF_SITE_WHATSAPP;?>
                                </a></h3>
                            <p>Seg. a Sex: 08hs às 18:00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:<?php echo CONF_SITE_EMAIL;?>"><?php echo CONF_SITE_EMAIL;?></a>
                            </h3>
                            <p>Envie-nos um e-mail a qualquer momento!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe
                    src="<?php echo CONF_SITE_MAP_IFRAME;?>"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!--/ footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>