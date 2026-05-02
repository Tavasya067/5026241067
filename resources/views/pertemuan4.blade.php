<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pertemuan 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

 <style>
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      color: #2d314d;
      background-color: #f8f9fc;
    }

    .section {
      min-height: 100vh;
    }

    .title {
      font-size: 36px;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .desc {
      font-size: 14px;
      color: #7f8bba;
      line-height: 1.7;
      margin-bottom: 25px;
      max-width: 800px;
    }

    .feature-title {
      font-size: 14px;
      font-weight: 600;
      margin-top: 10px;
      margin-bottom: 5px;
    }

    .feature-desc {
      font-size: 12px;
      color: #6c757d;
      line-height: 1.6;
    }

    .icon-img {
      width: 35px;
    }

    .img-left {
      height: 100vh;
      width: 100%;
      object-fit: cover;
    }

    .content-right {
      padding: 100px;
    }
  </style>
</head>

<body>

<div class="container-fluid p-0 section">
  <div class="row no-gutters">

    <!-- Foto sisi kiri -->
    <div class="col-md-4 p-0">
      <img src="assets/img/image.png" class="img-left">
    </div>

    <!-- Konten sisi kanan -->
    <div class="col-md-8 d-flex align-items-center">
      <div class="content-right">

        <h2 class="title">Light, Fast & Powerful</h2>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
          Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
        </p>

        <p class="desc">
          mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        </p>

        <div class="row mt-4">

          <div class="col-md-6 mb-4">
            <img src="assets/img/Icon.png" class="icon-img">
            <div class="feature-title">Title Goes Here</div>
            <div class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</div>
          </div>

          <div class="col-md-6 mb-4">
            <img src="assets/img/Icon.png" class="icon-img">
            <div class="feature-title">Title Goes Here</div>
            <div class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</div>
          </div>

          <div class="col-md-6 mb-4">
            <img src="assets/img/Icon.png" class="icon-img">
            <div class="feature-title">Title Goes Here</div>
            <div class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</div>
          </div>

          <div class="col-md-6 mb-4">
            <img src="assets/img/Icon.png" class="icon-img">
            <div class="feature-title">Title Goes Here</div>
            <div class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</div>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

</body>
</html>
