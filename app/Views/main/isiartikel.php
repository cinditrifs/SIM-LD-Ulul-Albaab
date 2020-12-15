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
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap");

        body {
            background-color: #e0f2f1;
        }

        p {
            text-align: justify;
            font-family: "Quicksand";
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
    <div class="container">
        <div class="row">
            <div class="col s12 ">
                <h3 class="center-align" style="font-family: 'Kaushan Script'"><?= $artikel['judul'] ?></h3>
            </div>
            <div class="col s12 center-align">
                <img sty src="/img/<?php echo $artikel['gambar'] ?>" style="width: 20%">
            </div>
        </div>
        <div>
            <p class="right-align" style="font-size: 15px;">Posted on <?= $artikel['created_at'] ?></p>
            <p style="text-align: justify; font-family: 'quicksand' text-indent: 50px;"><?= $artikel['konten'] ?></p>
        </div>
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