<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tugas Pertemuan 3 (Pagination)</h2>
  <p class="text-justify">Pada tugas Pemograman Web di pertemuan ketiga ini saya mencoba mengaplikasikan pagination dan breadcrumbs ke salah satu website yang sering diakses oleh mahasiswa ITS yakni website ITS Global Engagement, bagian yang saya jadikan referensi merupakan bagian informasi pertukaran pelajar (EXCHANGE)</p>

  <h2>List of Exchange Program</h2>
    <ul class="breadcrumb small bg-white">
        <li class="breadcrumb-item"><a href="#">ITS GOES GLOBAL</a></li>
        <li class="breadcrumb-item"><a href="#">ITS STUDENTS</a></li>
        <li class="breadcrumb-item"><a href="#">FROM OVERSEAS</a></li>
        <li class="breadcrumb-item active">EXCHANGE</li>
    </ul>

<div class="row">
    <div class="col border p-0">
        <img src="https://www.its.ac.id/international/wp-content/uploads/sites/66/2019/07/ntust_new-768x259.jpg"
             class="card-img-top"
             alt="Chonnam"
             style="width: 100%; height: 200px; object-fit: cover;">

        <div class="card-body p-3">
            <h6 class="card-title" style="min-height: 50px;">National Taiwan University of Science & Technology (NTUST) Semester Exchange Program Fall 2026</h6>
            <p class="card-text small text-muted mb-2">National Taiwan University of Science & Technology (NTUST) has opened applications for the Fall 2026 semester exchange program (September)</p>
        </div>
    </div>

    <div class="col border p-0">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3hcLwH6T36wjr4J1uzvlVDnGYdeXzAlunCw&s"
             class="card-img-top"
             alt="Kumamoto"
             style="width: 100%; height: 200px; object-fit: cover;">

        <div class="card-body p-3">
            <h6 class="card-title" style="min-height: 50px;">Universiti Utara Malaysia (UUM) Student Exchange Fall 2026</h6>
            <p class="card-text small text-muted mb-2">Universiti Utara Malaysia (UUM) is now accepting applications for its semester exchange program. ITS students are invited to experience</p>
        </div>
    </div>
</div>

   <div class="pagination-container">
      <nav>
        <ul class="pagination justify-content-center" style ="margin:20px 0">
        <li class="page-item"><a class="page-link" href="pagi1">Sebelumnya</a></li>
        <li class="page-item"><a class="page-link" href="pagi1">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="pagi3">3</a></li>
        <li class="page-item"><a class="page-link" href="pagi3">Selanjutnya</a></li>
        </ul>
      </nav>
    </div>

    <h6 class="text-center card-text small text-muted mb-2">Tavasya Alia Anjani_5026241067_PWEB B</h6>

</div>

</body>
</html>
