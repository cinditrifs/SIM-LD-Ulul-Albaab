<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/materialize/css/materialize.min.css') ?>" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LD Ulul Albaab | LPJ</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');

        body {
            background-color: #e0f2f1;
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
                    <li><a href="/surat" style="font-family: 'Bebas Neue'; font-size: 20px;">Surat Keluar</a></li>
                    <li><a href="/presensi" style="font-family: 'Bebas Neue'; font-size: 20px;">Presensi Kajian</a></li>
                    <li><a href="/syuro" style="font-family: 'Bebas Neue'; font-size: 20px;">Syuro</a></li>
                    <li><a href="/lpj" style="font-family: 'Bebas Neue'; font-size: 20px;">LPJ</a></li>
                    <li><a href="/proposal" style="font-family: 'Bebas Neue'; font-size: 20px;">Proposal</a></li>

                    <li><a href="/" style="font-family: 'Bebas Neue'; font-size: 20px; margin-right: 50px">| Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="/surat" style="font-family: 'Bebas Neue'; font-size: 20px;">Surat Keluar</a></li>
        <li><a href="/presensi" style="font-family: 'Bebas Neue'; font-size: 20px;">Presensi Kajian</a></li>
        <li><a href="/syuro" style="font-family: 'Bebas Neue'; font-size: 20px;">Syuro</a></li>
        <li><a href="/lpj" style="font-family: 'Bebas Neue'; font-size: 20px;">LPJ</a></li>
        <li><a href="/proposal" style="font-family: 'Bebas Neue'; font-size: 20px;">Proposal</a></li>
        <li><a href="/" style="font-family: 'Bebas Neue'; font-size: 20px;">Logout</a></li>
    </ul>

    <!--Breadcrumb-->
    <nav class="teal lighten-3">
        <div class="nav-wrapper container">
            <a href="/sekret" class="breadcrumb">Kesekretariatan</a>
            <a href="/lpj" class="breadcrumb">LPJ</a>
        </div>
    </nav>
    <!--LPJ-->
    <div class="container center-align">
        <div class="card" style="border-radius:15px; margin-top: 30px; margin-bottom: 30px;">
            <div class="card-content">
                <h3 id="lpj" style="font-family: 'Bebas Neue'; margin-top: 0px;">LPJ</h3>
                <div class="input-field">
                    <input id="namakegiatan" type="text" class="validate" required>
                    <label for="namakegiatan">Nama Kegiatan</label>
                </div>
                <div class="left-align">
                    <label>Tanggal Kegiatan</label>
                    <input id="tglkegiatan" type="date" class="validate" required>
                </div>
                <div class="file-field input-field">
                    <div class="btn-small waves-effect waves-effect" style="border-radius:10px">
                        <span>Choose File</span>
                        <input type="file" id="filelpj" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="Upload LPJ" required>
                    </div>
                </div>
                <a class="waves-effect waves-light btn modal-trigger" type="submit" name="action" style="border-radius:10px;" href="#modal1">Submit<i class="material-icons right">send</i></a>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h5>Data Berhasil di Input</h5>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
                    </div>
                </div>
            </div>
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
        const modal1 = document.querySelectorAll('.modal');
        M.Modal.init(modal1)
    </script>
</body>

</html>