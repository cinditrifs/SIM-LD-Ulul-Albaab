<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/materialize/css/materialize.min.css') ?>" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LD Ulul Albaab | Prodak</title>
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

    <!--Program Dakwah-->
    <div class="container center-align">
        <h3 style="font-family: 'Bebas Neue'; margin-bottom: 0px;">Program Dakwah</h3>
        <h5 style="font-family: 'Balsamiq Sans'; margin-top: 0px;">Kumpulan Program Dakwah LD Ulul Albaab 1441 H</h5>
        <hr color="teal" width="70%" style="margin-bottom:35px">
        <div class="row center-align">
            <!-- disini fornya -->
            <div class="col s12 m4">
                <div class="card" style="border-radius:15px">
                    <div class="card-content activator">
                        <img class="vertical-middle activator" src="<?php echo base_url('materialize/img/mlt.png') ?>" width="100%">
                        <h5 style="font-family: 'Balsamiq Sans';">Muslim Leadership Training</h5>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title " style="font-family:'Kaushan Script';">Sholat Awal Waktu<i class="material-icons right">close</i></span>
                        <p style="text-align: justify;">Rasulullah SAW juga pernah ditanya, amalan apakah yang paling afdhol. Beliau menjawab "Shalat di awal waktunya." (HR. Abu Daud)</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card" style="border-radius:15px">
                    <div class="card-content activator">
                        <img class="vertical-middle activator" src="<?php echo base_url('materialize/img/mlt.png') ?>" width="100%">
                        <h5 style="font-family: 'Balsamiq Sans';">Muslim Leadership Training</h5>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title " style="font-family:'Kaushan Script';">Sholat Awal Waktu<i class="material-icons right">close</i></span>
                        <p style="text-align: justify;">Rasulullah SAW juga pernah ditanya, amalan apakah yang paling afdhol. Beliau menjawab "Shalat di awal waktunya." (HR. Abu Daud)</p>
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
    <!-- modal add -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Punggawa </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form class="ml-3 mt-3">

                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputprodi" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputdivisi" aria-placeholder="Pilih">
                                    <option>Pendidikan Matematika</option>
                                    <option>Matematika</option>
                                    <option>Ilmu Komputer</option>
                                    <option>Statistika</option>
                                    <option>Pendidikan Fisika</option>
                                    <option>Fisika</option>
                                    <option>Pendidikan Kimia</option>
                                    <option>Kimia</option>
                                    <option>Pendidikan Biologi</option>
                                    <option>Biologi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputprodi" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputangkatan" aria-placeholder="Pilih">
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputdivisi" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputdivisi" aria-placeholder="Pilih">
                                    <option>Mas'ul</option>
                                    <option>Mas'ulah</option>
                                    <option>Sekretaris</option>
                                    <option>Bendahara</option>
                                    <option>Ketua Departemen Kaderisasi</option>
                                    <option>Kaderisasi</option>
                                    <option>Ketua Departemen Huda</option>
                                    <option>Huda</option>
                                    <option>Ketua Departemen Syi'ar</option>
                                    <option>Syi'ar</option>
                                    <option>Ketua Departemen Learning Center</option>
                                    <option>Learning Center</option>
                                    <option>Keputrian</option>
                                    <option>Ketua Departemen Keputrian</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="button" data-toggle="modal" data-target="#saveModal" class="btn  btn-success btn-block">Save</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal add -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url('/materialize/js/materialize.min.js') ?>"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav)
    </script>
</body>

</html>