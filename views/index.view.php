<?php require 'partials/head.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="public/images/logo/logoregterink.png" alt="" class="brand-logo"> Gezinshuis Regterink
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-white">
        <div class="mask text-center d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h2>Ontmoet de familie regterink</h2>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="darker-text mb-5">Al jaren werken wij met kinderen die het moeilijk thuis hebben, of
                            met kinderen
                            met gedragsproblemen. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae,
                            quos?</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger line" href="#contact">Bekijk jou
                            mogelijkheden</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="line">
        <div class="jumbotron">
            <div class="container">
                <h1>Over ons</h1>

                <div class="row">
                    <div class="col-md-12">
                        Waar zal ik beginnen? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci
                        aliquid consectetur cum enim, est labore nihil obcaecati odio placeat quis rem unde vero! A
                        aperiam asperiores cumque illum nemo omnis quidem rem repellat sint vel. Fugit harum labore
                        natus!
                    </div>

                    <div class="col-md-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ducimus fuga ipsam
                        molestiae neque sint temporibus. Aut earum esse id iste itaque labore magni modi omnis sit
                        voluptatem! Ad at, dolore eius ex fugit impedit itaque laborum libero nam nemo, nihil omnis
                        possimus provident reprehenderit saepe sit ut vel vero.
                    </div>

                    <div class="row mt-4">
                        <?php
                        foreach ($administrators as $admin) {
                            ?>
                            <div class="col-md-3">
                                <div class="card mb-4 line">
                                    <img class="img-fluid img-responsive"
                                         src="public/images/profile/<?php echo $admin['file'] ?>"/>
                                    <div class="card-body">
                                        <h4 class="card-text"><?php echo $admin['fname'] . " " . $admin['lname'] ?></h4>
                                        <h6 class="card-text"><i><?php echo $admin['role'] ?></i></h6>
                                        <p class="card-text">
                                            Wilt u een afspraak? U kunt mij bereiken op het email adres <i><?php echo $admin['email'] ?></i><br />
                                            Dit geld ook voor mijn collega's.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- the map by the footer -->
    <section id='map' class="line">
        <?php require 'partials/map.php'; ?>
    </section>

    <section id="footer" class="line">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Waar zitten wij</h3>
                        <div class="row">
                            <div class="col-md-12">
                                Mitchell Regterink
                            </div>
                            <div class="col-md-12">
                                De landstrekenwijk Rijnland 8
                            </div>
                            <div class="col-md-12">
                                8274 ED Lelystad Nederland
                            </div>
                            <div class="col-md-12">
                                06-123847303
                            </div>
                            <div class="col-md-12">
                                mitchell.regterink@chello.nl
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Volg ons op</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fab fa-facebook-square"></i> Facebook</a>
                            </div>
                            <div class="col-md-12">
                                <a href=""><i class="fab fa-twitter-square"></i> Twitter</a>
                            </div>
                            <div class="col-md-12">
                                <a href=""><i class="fab fa-instagram"></i> Instagram</a>
                            </div>
                        </div>
                    </div>
                    <div id="contact" class="col-md-4">
                        <h3>Contact</h3>
                        <form action="" method="POST">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Voornaam:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Achternaam:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    Bericht:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4" align="right">
                                    <a class="btn btn-secondary" href="#about">Send</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'partials/foot.php'; ?>