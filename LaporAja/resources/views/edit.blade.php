<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://kit.fontawesome.com/1b514b8e9a.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="\css\styled.css">

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
</head>

<body>
    <section id="menu">
        <div class="logo">
            <a href="/dashboard"><img src="\images\logo sidebar.png" alt=""></a>
        </div>

        <div class="items">
            <!-- <li><i class="fa-solid fa-circle-user"></i><a href="#">Profile</a></li> -->
            <li><i class="fa-solid fa-clipboard-list"></i><a href="/profile">Laporan</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="/logout">Keluar</a></li>
        </div>
    </section>

    <section id="interface">
        <h3 class="i-name">
            Tanggapan
        </h3>

        <div class="radio">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Diproses
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Ditolak
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Selesai
                </label>
              </div>
        </div>

        <!-- <div class="text">
                <input type="text" class="form-control" id="inputAddress" placeholder="Jenis Instansi">
        </div> -->
        <button type="button" class="btn btn-outline-primary">Simpan</button>         
    </section>
</body>

    