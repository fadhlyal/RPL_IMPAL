<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://kit.fontawesome.com/1b514b8e9a.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\styled.css">

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
</head>

<body>
    <section id="menu">
        <div class="logo">
            <a href="/dashboard"><img src="images\logo sidebar.png" alt=""></a>
        </div>

        <div class="items">
            <!-- <li><i class="fa-solid fa-circle-user"></i><a href="/profile">Profile</a></li> -->
            <li><i class="fa-solid fa-clipboard-list"></i><a href="">Laporan</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="/logout">Keluar</a></li>
        </div>
    </section>

    <section id="interface">
        
        <!-- <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Cari">
                </div>
            </div>

            <div class="profile">
                    <i class="far fa-bell"></i>
            </div>
        </div> -->

        <h3 class="i-name">
            Laporan
        </h3>

        <div class="values">
            <div class="val-box">
                <h3>
                    Semua Laporan
                </h3>
            </div>

            <div class="val-box">
                <h3>
                    Progres
                </h3>
            </div>

            <div class="val-box">
                <h3>
                    Tertunda
                </h3>
            </div>

            <div class="val-box">
                <h3>
                    Selesai
                </h3>
            </div>
        </div>

        <div class="board">
            <table width="100%">
               <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Judul Laporan</td>
                        <td>Provinsi</td>
                        <td>Kab/Kota</td>
                        <td>Kecamatan</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                        <td class="people">
                            <img src="images\man1.jpg" alt="">
                            <div class="people-de">
                                <h5>Kian Naila</h5>
                                <p>kianizz@gmail.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>Perbaikan jalan</h5>
                        </td>

                        <td class="people-prov">
                            <h5>Jawa Barat</h5>
                        </td>

                        <td class="people-city">
                            <h5>Kab. Bandung</h5>
                        </td>

                        <td class="people-kec">
                            <h5>Bojongsoang</h5>
                        </td>

                        <td class="active"><p>Selesai</p></td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="images\man1.jpg" alt="">
                            <div class="people-de">
                                <h5>Kian Naila</h5>
                                <p>kianizz@gmail.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>Perbaikan jalan</h5>
                        </td>

                        <td class="people-prov">
                            <h5>Jawa Barat</h5>
                        </td>

                        <td class="people-city">
                            <h5>Kab. Bandung</h5>
                        </td>

                        <td class="people-kec">
                            <h5>Bojongsoang</h5>
                        </td>

                        <td class="active"><p>Selesai</p></td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="images\man1.jpg" alt="">
                            <div class="people-de">
                                <h5>Kian Naila</h5>
                                <p>kianizz@gmail.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>Perbaikan jalan</h5>
                        </td>

                        <td class="people-prov">
                            <h5>Jawa Barat</h5>
                        </td>

                        <td class="people-city">
                            <h5>Kab. Bandung</h5>
                        </td>

                        <td class="people-kec">
                            <h5>Bojongsoang</h5>
                        </td>

                        <td class="active"><p>Selesai</p></td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="images\man1.jpg" alt="">
                            <div class="people-de">
                                <h5>Kian Naila</h5>
                                <p>kianizz@gmail.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>Perbaikan jalan</h5>
                        </td>

                        <td class="people-prov">
                            <h5>Jawa Barat</h5>
                        </td>

                        <td class="people-city">
                            <h5>Kab. Bandung</h5>
                        </td>

                        <td class="people-kec">
                            <h5>Bojongsoang</h5>
                        </td>

                        <td class="active"><p>Selesai</p></td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="images\man1.jpg" alt="">
                            <div class="people-de">
                                <h5>Kian Naila</h5>
                                <p>kianizz@gmail.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>Perbaikan jalan</h5>
                        </td>

                        <td class="people-prov">
                            <h5>Jawa Barat</h5>
                        </td>

                        <td class="people-city">
                            <h5>Kab. Bandung</h5>
                        </td>

                        <td class="people-kec">
                            <h5>Bojongsoang</h5>
                        </td>

                        <td class="active"><p>Selesai</p></td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
               </tbody>
            </table>
        </div>

        

    </section>

    <script>
        $('#menu-btn').click(function() {
            $('#menu').toggleClass("active");
        })
    </script>


</body>
</html>