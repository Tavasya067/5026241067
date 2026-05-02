<!doctype html>
<html lang="en">
  <head>
    <title>TEAZZI LINKTREE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showme()
        {
            // alert("Hallo Selamat Siang");
            Swal.fire({
             title: "Hallo",
             text: "Selamat Siang",
             icon: "success"
            });

            console.log("Ini baris 19, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlahan : " + a);
            c = 1 * 2 * 3;
            console.log("Hasil Perkalian : " + c);
        }

        function changeText()
        {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS" ;
        }

        function changeStyle()
        {
            const element = document.getElementById("tombol");
            element.style.color = "red" ;
            element.style.background= "yellow";
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <style>
    /* BODY */
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #b2b2b2;
    }

    /* MAIN CONTAINER (WRAPPER) */
    .container-main {
      max-width: 38rem;
      margin: 0 auto;
      padding: 3rem 1rem;
    }

    /* CARD UTAMA */
    .card-main {
      background: white;
      border-radius: 1.5rem;
      padding-bottom: 2rem;
    }

    /* HEADER */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
    }

    /* BUTTON ICON DI HEADER */
    .icon-button {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }

    .icon-button img {
      width: 1.1rem;
      height: 1.1rem;
    }

    /* PROFILE SECTION */
    .profile-image {
      width: 5.5rem;
      height: 5.5rem;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin: 0 auto;
    }

    .profile-name {
      font-size: 1.5rem;
      font-weight: 700;
      text-align: center;
      margin: 0.75rem 0 1.5rem;
    }

    /* CONTAINER UNTUK LIST LINK */
    .link-container {
      padding: 0 2rem;
    }

    /* KOTAK LINK */
    .link-card {
      display: flex;
      align-items: center;
      background: #ebeef1;
      border-radius: 0.5rem;
      text-decoration: none;
      color: #1a1a1a;

      padding: 1rem;
      margin-bottom: 0.8rem;
      min-height: 3.5rem;

      box-shadow: 0 0.09375rem 0.1875rem rgba(0,0,0,0.12);
      transition: 0.2s;
    }

    .link-card:hover {
      filter: brightness(0.95);
      text-decoration: none;
      color: #1a1a1a;
    }

    /* TEXT DI DALAM LINK */
    .link-text {
      flex: 1;
      text-align: center;
      font-size: 0.9rem;
      font-weight: 600;
    }

    /* ICON TITIK 3 */
    .link-menu {
      color: #999;

    }

    /* BUTTON JOIN */
    .join-button {
      display: block;
      max-width: 15rem;
      margin: 4rem auto 1rem;
      background: #fff;
      border-radius: 2rem;
      padding: 0.7rem;
      text-align: center;
      font-weight: 700;
      text-decoration: none;
      color: #1a1a1a;

      box-shadow: 0 0.125rem 0.375rem rgba(0,0,0,0.1);
    }

    .join-button:hover {
      text-decoration: none;
      color: #1a1a1a;
    }

    /* FOOTER */
    .footer {
      text-align: center;
      font-size: 0.7rem;
      color: #555;
      padding: 2rem 0;
    }

    .footer a {
      color: #555;
      text-decoration: none;
      margin: 0 0.3rem;
    }

    /* RESPONSIVE MOBILE */
    @media (max-width: 36rem) {
      .container-main {
        padding: 0;
      }

      .card-main {
        border-radius: 0;
      }
    }

  </style>
</head>

<body>

  <!-- CONTAINER UTAMA  -->
  <div class="container-main">

    <!-- CARD -->
    <div class="card-main">

      <!--  HEADER -->
      <div class="header">
        <a href="#" class="icon-button">
          <img src="https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/logos/linktree-hrggdeqdzll06zjl9h6j.png/linktree-bafynmeua3noot52xbu71.png?_a=DATAiZAAZAA0">
        </a>

        <a href="#" class="icon-button">
          <img src="https://api.iconify.design/material-symbols:ios-share-rounded.svg?color=black">
        </a>
      </div>

      <!-- PROFILE -->
      <img class="profile-image" src="https://ugc.production.linktr.ee/EFeaDRVRT1ChzbfLBC2g_7BuxbR7xL9A4KMSM?io=true&size=avatar-v3_0">
      <div class="profile-name">@teazzi.id</div>


      <!-- LIST LINK -->
      <div class="link-container">

        <a id ="tombol" href="https://booking.chope.co/booking_index?rid=teazziselect2509jkt&source=rest_linktree_teazziselect&adults=2&lang=en_US&country_code=JAKARTA" class="link-card">
          <div class="link-text">
            TEAZZI EXPERIENCE (Central Park Mall)
          </div>
          <span class="link-menu">⋮</span>
        </a>

        <a id="intro" href="https://drive.google.com/file/d/1NXzm08xAxpdxM5n-T51TP_uXac9SKYPE/view" class="link-card">
          <div class="link-text">Menu Teazzi</div>
          <span class="link-menu">⋮</span>
        </a>

        <a href="https://www.grab.com/id/download/?is_retargeting=true&c=ID_CLUSTER-ALL_PAX_GF_SOCM_LOC__ID23GFPDF2BEBAS24_Broad_DalgyDelivery&af_ad=DalgyDelivery&pid=instagram-organic&af_sub5=organic&af_force_deeplink=true" class="link-card">
          <div class="link-text">GRABFOOD</div>
          <span class="link-menu">⋮</span>
        </a>

        <a href="https://gofood.link/a/EQBzXEh" class="link-card">
          <div class="link-text">GOFOOD</div>
          <span class="link-menu">⋮</span>
        </a>

        <a href="https://teazzi.com/" class="link-card">
          <div class="link-text">Website</div>
          <span class="link-menu">⋮</span>
        </a>

        <!-- BUTTON JOIN -->
        <a href="https://linktr.ee/" class="join-button">
          Join teazzi.id on Linktree
        </a>

        <button class="btn btn-primary" onclick="showme();">Show me</button>
        <button class="btn btn-primary" onclick="changeText();">Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>

        <!-- FOOTER -->
        <div class="footer">
          <a href="#">Cookie Preferences</a> ·
          <a href="#">Report</a> ·
          <a href="#">Privacy</a>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
