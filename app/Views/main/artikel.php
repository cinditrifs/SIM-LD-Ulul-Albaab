<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/materialize/css/materialize.min.css') ?>" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LD Ulul Albaab | Artikel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');

        body {
            background-color: #e0f2f1;
        }

        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nerko+One&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap");

        .slider .slides {
            background-color: transparent;
            margin: 0;
            height: 400px;
        }

        .slider .slides li img {
            height: 100%;
            width: 100%;
            background-position: center;
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        .white {
            box-shadow: none;
        }


        .side-left {
            border: solid 1px black;
            border-radius: 15px;
        }

        p {
            text-align: justify;
            font-family: "Quicksand";
        }

        .card-title {
            font-family: "Bebas Neue";
        }
    </style>
</head>

<body>
    <!--Header-->
    <div class="navbar-fixed">
        <nav class="teal">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo"><img src="<?php echo base_url('materialize/img/navbarlogo.png') ?>" style="height:60px; margin-left: 50px;"></a>
                <a href="#!" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/" style="font-family: 'Bebas Neue'; font-size: 23px;">| Home</a></li>
                    <li><a href="/#aboutus" style="font-family: 'Bebas Neue'; font-size: 23px;">| About Us</a></li>
                    <li><a href="/prodak" style="font-family: 'Bebas Neue'; font-size: 23px;">| Program Dakwah</a></li>
                    <li><a href="/artikel" style="font-family: 'Bebas Neue'; font-size: 23px;">| Artikel</a></li>
                    <li><a href="/sekret" style="font-family: 'Bebas Neue'; font-size: 23px; margin-right: 50px;">| Kesekretariatan</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="/" class="black-text" style="font-family: 'Bebas Neue';">Home</a></li>
        <li><a href="/#aboutus" class="black-text" style="font-family: 'Bebas Neue';">About Us</a></li>
        <li><a href="/prodak" class="black-text" style="font-family: 'Bebas Neue';">Program Dakwah</a></li>
        <li><a href="/artikel" class="black-text" style="font-family: 'Bebas Neue';">Artikel</a></li>
        <li><a href="/sekret" class="black-text" style="font-family: 'Bebas Neue';">Kesekretariatan</a></li>
    </ul>

    <!--Artikel-->
    <div class="container center-align">
        <h3 style="font-family: 'Bebas Neue'; margin-bottom: 0px;">Artikel Terbaru</h3>
        <hr color="teal" width="50%" style="margin-bottom:35px">
    </div>


    <div class="container">
        <?php foreach ($artikel as $ar) : ?>
            <div class="card artikel" style="margin-left: 20px; box-shadow: none; border-bottom:1px solid black;">
                <div class="row">

                    <div class="col s4 m4 vertical-align">
                        <div class="card-image">
                            <img style="vertical-align: middle; margin-top:50px " src="/img/<?php echo $ar['gambar'] ?>">
                        </div>
                    </div>
                    <div class="col s8 m8 ">
                        <div class="card-title">
                            <h5><?= $ar['judul'] ?></h5>
                        </div>
                        <div class="card-detail">
                            <p> POSTED BY LD Ulul Albaab FMIPA UNJ POSTED ON <?= $ar['created_at'] ?> </p>
                        </div>
                        <div class="card-content">
                            <p><?= substr($ar['konten'], 0, 500), "........" ?></p>
                        </div>
                        <div class="container action" style="text-align: right;">
                            <a href="../isiartikel/<?= $ar['slug'] ?>" class="waves-effect waves-light btn">See detail</a>
                        </div><br>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>



    <!--Footer-->
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <h5 class="white-text">Lokasi</h5>
                    <p class="grey-text text-lighten-4">Jln. Rawamangun Muka, Jakarta Timur Gd. KH.Hasjim Asj'arie LT.4 Kampus A Universitas Negeri Jakarta</p>
                </div>
                <div class="col l4 s12 m4">
                    <h5 class="white-text">Hubungi Kami</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/ululalbaab.unj/" target='_blank'>ululalbaab.unj</a></li>
                        <li><a class="grey-text text-lighten-3">mua.unj@gmail.com</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://wa.me/+6281334637773" target='_blank'>081334637773</a></li>
                    </ul>
                </div>
                <div class="col l4 s12 m4">
                    <h5 class="white-text">Part of LDUA</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/mutia_ululalbaab/" target='_blank'>mutia_ululalbaab</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/maisyah_ululalbaab/" target='_blank'>maisyah_ululalbaab</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/mensqu_fmipa/" target='_blank'>mensqu_fmipa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright center-align">
            <div class="container">
                © 2020 Lembaga Dakwah Ulul Albaab
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url('/materialize/js/materialize.min.js') ?>"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav)
    </script>
</body>

</html>