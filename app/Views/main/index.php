<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/materialize/css/materialize.min.css') ?>" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LD Ulul Albaab</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Signika&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

        body {
            background-color: #e0f2f1;
        }

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


    <!--Slider-->
    <div id="slider" class="slider">
        <ul class="slides">
            <?php foreach ($slider as $slider) : ?>
                <li>
                    <img src="/img/<?php echo $slider['gambar'] ?>">
                </li>
            <?php endforeach; ?>
    </div>

    <!--About Us-->
    <div id="aboutus" class="container">
        <div class="row center-align">
            <div class="col s12 m8">
                <h3 style="font-family: 'Bebas Neue';">About Us</h3>
                <h5 style="text-align: justify; text-indent: 50px;">Lembaga Dakwah Ulul Albaab FMIPA UNJ adalah wadahnya sobat mahasiswa muslim FMIPA untuk berhijrah dan bisa beristiqomah bersama-sama menjadi pribadi yang lebih baik lagi, bersama saling mengingat dan menguatkan. Mengenalkan lebih dekat apa itu islam, arti manisnya persaudaraan (ukhuwah).</h5>
            </div>
            <div class="col s12 m4">
                <div class="card" style="border-radius:15px">
                    <div class="card-content">
                        <img class="vertical-middle" src="<?php echo base_url('materialize/img/ldua.png') ?>" alt="Logo" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Budaya Muslim-->
    <div class="teal lighten-4">
        <div class="row center-align">
            <br>
            <h3 style="font-family: 'Kaushan Script'; margin-top: 50 px; margin-bottom: 50px;">10 Budaya Muslim UNJ</h3>
            <div class="col s12 m2 offset-m1">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/saw.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>SAW</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Sholat Awal Waktu<i class="material-icons right">close</i></span>
                        <p style="text-align: justify;">Rasulullah SAW juga pernah ditanya, amalan apakah yang paling afdhol. Beliau menjawab "Shalat di awal waktunya." (HR. Abu Daud)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/tibas.png') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>TIBAS</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Tilawah Ba'da Shalat<i class="material-icons right">close</i></span>
                        <p>"Orang-orang yang telah kami berikan al-kitab kepadanya, mereka membacanya dengan bacaan yang sebenarnya, mereka itu beriman kepadanya, dan barang siapa yang ingkar kepadanya, maka mereka itulah orang-orang yang rugi." (Al-Baqarah:121)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/sks.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>SKS</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Senin Kamis Shaum<i class="material-icons right">close</i></span>
                        <p>"Berbagai amalan dihadapkan (kepada Allah) pada Senin dan Kamis, maka aku suka jika amalanku dihadapkan sementara aku sedang berpuasa." (HR. Tirmidzi)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/gt5s.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>GT-5S</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Gerakan Tebar Salam, Senyum, Sapa, Sopan Santun<i class="material-icons right">close</i></span>
                        <p>"Senyummu di depan saudaramu, adalah sedekah bagimu" (HR. Tirmidzi no 1956)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px;">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/spd.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>SPD</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Setiap Pagi Dhuha<i class="material-icons right">close</i></span>
                        <p>Allah Ta'ala berfirman: "Wahai anak Adam, janganlah engkau tinggalkan empat raka'at shalat di awal siang (di waktu Dhuha). Maka itu akan mencukupimu di akhir siang." (HR. Ahmad, 5:286; Abu Daud, no. 1289; At Tirmidzi, no. 475; Ad Darimi, no. 1451)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row center-align">
            <div class="col s12 m2 offset-m1">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/gemar.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>GEMAR</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Gerakan Mari Berinfaq<i class="material-icons right">close</i></span>
                        <p>"Dan berinfaklah kamu (bersedekah atau nafakah) di jalan Allah dan janganlah kamu mencampakkan diri kamu ke dalam kebinasaan, dan berbuat baiklah karena sesungguhnya Allah mencintai orang-orang yang berbuat baik." (Al-Baqarah:195)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/gst.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b> GST</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Gerakan Setengah Tujuh<i class="material-icons right">close</i></span>
                        <p>Katakanlah: "Aku berlindung kepada tuhan yang menguasai subuh, dari kejahatan makhluknya, dan dari kejahatan malam apabila gelap gulita..." (Al-Falaq:1-3)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/gemes.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>GEMES</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Gerakan Muslimah Berhias Syar'i<i class="material-icons right">close</i></span>
                        <p>Hai Nabi, katakanlah kepada isteri-isterimu, anak-anak perempuanmu dan isteri-isteri orang mukmin: "Hendaklah mereka mengulurkan jilbabnya ke seluruh tubuh mereka." Yang demikian itu supaya mereka lebih mudah untuk dikenal, karena itu mereka tidak di ganggu. Dan Allah adalah Maha Pengampun lagi Maha Penyayang. (Al-Ahzab:59)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/jsalim.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>J-SALIM</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Jumat Berbusana Muslim<i class="material-icons right">close</i></span>
                        <p>"Siapa yang mandi hari Jum'at, sikat gigi, memakai parfum, dan memakai pakaian paling bagus yang dimilikinya, pergi shalat jum'at dan tidak melangkahi bahu orang, kemudian shalat sunnah dan mendengarkan khutbah sampai selesai, serta tidak berbicara, maka diampuni dosa antara jum'at itu dan jum'at sebelumnya." (HR. Ahmad)</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card" style="border-radius:15px; margin-bottom: 50px;">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="border-radius:15px" src="<?php echo base_url('materialize/img/gam.jpg') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator" style="font-size: 20px; font-family:'Kaushan Script'"><b>GAM</b></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title" style="font-family:'Kaushan Script';">Gerakan Ayo Mentoring<i class="material-icons right">close</i></span>
                        <p>Nabi SAW bersabda, "Apabila kalian berjalan melewati taman-taman Surga, perbanyaklah berzikir." Para sahabat bertanya, "Wahai Rasulullah, apakah yang dimaksud taman-taman surga itu," Nabi menjawab, "Yaitu halaqah-halaqah zikir (majelis ilmu)." (HR. at-Tarmidzi no. 3510)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Punggawa LDUA 1441 H-->
    <div id="punggawa" class="container center-align">
        <h3 style="font-family: 'Bebas Neue';">| Punggawa LDUA 1441 H |</h3>
    </div>
    <div class="container center-align">
        <div class="row center-align">
            <!--Sekretaris-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Sekretaris</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Shantyka Virgita Aldina / Fisika<br>Trisha Julita / Pend Biologi</h6>
                </div>
            </div>
            <!--Ketua-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Ketua</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Kukuh Kurniawan / Pend Fisika</h6>
                    <h6>Adila Nur (Keputrian) / Pend Kimia</h6>
                </div>
            </div>
            <!--Bendahara-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Bendahara</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Shafarani Silalahi / Pend Kimia</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container center-align">
        <div class="row center-align">
            <!--Dept. Kaderisasi-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Kaderisasi</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Alfian Putra Utama / Kimia<br>Ahmad Syauqy / Statistika<br>Dimas Adi Saputra / Fisika<br>
                        Firman Prastiawan / Pend Fisika</br>Harits Asaduddin / Pend Kimia</h6>
                    <h6>Yuli Eri Susanti / Pend Fisika<br>Aisyah Nur / Pend Fisika<br>Alyssa Maharani / Matematika<br>
                        Annisa Tussholeha / Pend Fisika<br>Ayu Virnanda / Pend Fisika<br>
                        Desi Ramadanniati / Pend Kimia<br>Jumrati / Matematika<br>Nadia Nisa / Pend Biologi<br>
                        Nia Yulianti Amin / Pend Biologi<br>Tri Aprilia Lita / Fisika<br>
                        Vilia Nur Oktaviani / Pend Kimia</h6>
                </div>
            </div>
            <!--Dept. Syiar-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Syiar</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Emier Hamzah / Pend Fisika<br>Ahmad Hafidzon Illah / Fisika<br>Ardi Kumara / Pend Fisika<br>
                        Ikhsan Fadillah / Pend Matematika<br>M. Andrianto Abdillah / Fisika<br>
                        Mujahid Mu’afa Hifni / Pend Fisika<br>Naufal Hibatullah / Pend Fisika</h6>
                    <h6>Siti Fatimah / Pend Kimia<br>Allaya Binta Maulida / Fisika<br>Fajar Subekti / Fisika<br>
                        Hafsah Mujahidah / Fisika<br>Lydia Nurkumalawati / Fisika<br>Monika Aprilia / Pend Matematika<br>
                        Noorin Siti Mardiyyah / Pend Fisika<br>Novi Aryani / Pend Biologi<br>Rita Septia NR / Statistika<br>
                        Safina Zahira / Pend Biologi<br>Salwa Nabilah / Pend Biologi</h6>
                </div>
            </div>
            <!--Dept. Learning Center-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Learning Center</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Nur Azis Aji Pangestu / Pend Kimia<br>Mulyana / Matematika<br>Abdurrahman Adkhil / Statistika<br>
                        Fahry Hidayah / Pend Fisika<br>M Raffi Athallah / Ilmu Komputer</h6>
                    <h6>Qurrota ‘Aini / Pend Biologi<br>Ajeng Setyani / Pendidikan Biologi<br>
                        Duwi Ratna Sari / Pend Matematika<br>Herlina Nofita / Pend Matematika<br>
                        Intan Puspita Sari / Pend Biologi<br>Julia Jasmin Rifka / Pend Fisika<br>
                        Marliana Candra Kartika / Fisika<br>Meilindah Putri / Pend Biologi<br>
                        Nur Shofwah Luthfiyani / Biologi<br>Qurrota A'yuni / Pend Biologi<br>
                        Widya Septianingrum / Pend Kimia</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container center-align">
        <div class="row center-align">
            <!--Dept. Quran Center-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Quran Center</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Mush’ab Utsmani / Ilmu Komputer<br>Ahmad Yadih / Pend Matematika<br>
                        Fiqri Aditya Riyanto / Fisika<br>Hudzaifah Fakhroni / Biologi<br>
                        Huzaifi Hafizhahullah / Fisika</h6>
                    <h6>Putri Ahma Niyara / Pend Kimia<br>Ariska Novianti / Biologi<br>Hanna Hayyina Az-Zahra / Fisika<br>
                        I Gusti Ayu Isnaini Fatha R / Fisika<br>Khairatunnisa / Pend Fisika<br>
                        Lathifah Sekar Azmi / Pend Fisika<br>Muthiah Rahmah Ilahi / Biologi<br>
                        Nabilah Mardhiyah / Pend Kimia<br>Rahmah Nurmalila / Pend Fisika<br>
                        Rena Rahmani / Pend Fisika</h6>
                </div>
            </div>
            <!--Dept. Huda-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Huda</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Gilang Muhammad Iqbal / Kimia<br>Eric Vicky Jonathan / Pend Kimia<br>
                        Priya Yuga Prasetya / Biologi<br>Ilham Maulana / Kimia<br>Hary Susilo / Ilmu Komputer</h6>
                    <h6>Shabrina Syifa / Pend Biologi<br>Agnes Putri Khairani / Pend Kimia<br>
                        Ana Riadlatush / Pend Matematika<br>Cindi Tri Fitikasari / Ilmu Komputer<br>
                        Hajar Imtihani / Pend Fisika<br>Inas Fawaz Raihani / Pend Biologi<br>
                        Mariska Diah / Pend Biologi<br>Nurhazizah / Pend Biologi<br>
                        Rania Virda Sukmaningsih / Fisika<br>Zahra Nabilla / Fisika</h6>
                </div>
            </div>
            <!--Dept. Maisyah-->
            <div class="col s12 m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Maisyiah</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>M Rizky Putra / Statistika<br>Rakha Aditria / Pend Fisika<br>Rifqi Ramadhan / Fisika
                    </h6>
                    <h6>Salma Amalia Aini / Pend Biologi<br>Salsa Ghina / Pend Fisika<br>Istiqomah / Pend Kimia<br>
                        Kamila Aulia / Pend Fisika<br>Kiky Amalia Putri / Biologi<br>Listia Wati / Pend Fisika<br>
                        Lita Izzatunnisa / Pend Biologi<br>Maulida Rokhimah / Pend Fisika<br>Sekar Afifah / Statistika<br>
                        Shinta Putri Maharani / Matematika<br>Siti Sarah Utami / Pend Fisika<br>Widda Taslimah / Pend Fisika
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container center-align">
        <div class="row center-align">
            <!--Dept. Keputrian-->
            <div class="col s12 m4 offset-m4">
                <h5 style="border-radius:10px; background-color:#80cbc4; font-family: 'Balsamiq Sans';">Dept. Keputrian</h5>
                <div style="border-radius:10px; background-color:#b2dfdb; font-family: 'Signika';">
                    <h6>Mega Gladiani Sutrisno / Kimia<br>Annisa Auliya / Kimia<br>Alya Hisan Nur Rahmah / Kimia<br>
                        Amira Zahra Azhari / Pend Fisika<br>Halimah Al-Hasanah / Pend Fisika<br>Kartini / Pend Fisika<br>
                        Khansa / Pend Matematika<br>Miftahul Jannah / Matematika<br>
                        Nabila Putri Denisa / Pend Biologi<br>Nurstani Islamiah / Pend Fisika<br>
                        Rani Maharani / Pend Fisika<br>Refi Putri Kamiliya / Pend Fisika<br>
                        Ridha Octa Al-Hurriyah / Fisika<br>Syalwa Dhiya / Pend Matematika</h6>
                </div>
            </div>
        </div>
    </div>

    <!--Social Media-->
    <div class="row center-align">
        <div class="col s12 m4 deep-purple lighten-4">
            <h5 style="font-family: 'Bebas Neue';">Instagram | 1.630+ Followers</h5>
        </div>
        <div class="col s12 m4 red lighten-3">
            <h5 style="font-family: 'Bebas Neue';">Youtube | 173+ Subscribers</h5>
        </div>
        <div class="col s12 m4 blue lighten-3">
            <h5 style="font-family: 'Bebas Neue';">Facebook | 1.087+ Followers</h5>
        </div>
    </div>

    <!--Donasi-->
    <div class="container center-align">
        <h3 style="font-family: 'Bebas Neue';">Dukung Kami</h3>
        <img src="<?php echo base_url('materialize/img/donasi.png') ?>" width="75%">
    </div>
    <div class="container center-align">
        <a href="http://wa.me/+6282298482140" target='_blank' class="waves-effect waves-light btn" style="border-radius:10px; margin-bottom:50px;">Konfirmasi Donasi</a>
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
        const slider = document.querySelectorAll('.slider')
        M.Slider.init(slider);
    </script>
</body>

</html>