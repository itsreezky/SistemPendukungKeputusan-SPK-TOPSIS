<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Pendukung Keputusan | Vendor Interior</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="http://resource.reezky.cloud/reezky/itsreezky.png" type="image/x-icon">
  <!-- Custom styles --> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
        .locked {
            pointer-events: none;
        }
    </style> 
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->

<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <img class="img-fluid" src="http://resource.reezky.cloud/reezky/itsreezky-black.png" alt="">
                <div class="logo-text">
                    <span class="logo-title">Sistem Pendukung Keputusan</span>
                    <span class="logo-subtitle">Vendor Interior</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Halaman Utama</a>
                </li>
                <span class="system-menu__title">Perpustakaan Data</span>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Data Master
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Lihat Data</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                <li>
                    <a class="ajax-link" href="function/kriteria">
                        Data Kriteria
                    </a>
                </li>
                        <li>
                        <a class="ajax-link" href="function/alternatif">
                       Data Alternatif
                        </a>
                        </li>
                </li>
            </ul>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Hasil Data
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Lihat Data</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                        <a class="ajax-link" href="function/matriks">
                       Hasil Data Matriks
                      </a>
                        </li>
                        <li>
                        <a class="ajax-link" href="function/normalisasi">Hasil Data Normalisasi</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
            <span class="system-menu__title">Perhitungan</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a class="show-cat-btn" href="##">
                    <i class="fa-solid fa-square-root-variable me-3"></i>

                        </span>Skala Penilaian
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Lihat Data</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiKriteria"> Skala Nilai Kriteria </a>
                    </li>
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiKualitas"> Skala Nilai Kualitas </a>
                    </li>
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiHarga"> Skala Nilai Harga </a>
                    </li>
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiWaktu"> Skala Nilai Waktu </a>
                    </li>
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiKredibilitas"> Skala Nilai Kredibilitas </a>
                    </li>
                    <li>
                    <a class="ajax-link" href="function/skala_nilaiResponsif"> Skala Nilai Responsif </a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                    <i class="fa-solid fa-square-root-variable me-3"></i>

                        </span>Skor Akhir
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Lihat Data</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                    <a class="ajax-link" href="function/hasil_akhir"> Hitung Skor Akhir </a>
                    </li>
                    <li>

            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="assets/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="assets/img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">itsReezky</span>
                <span class="sidebar-user__subtitle">SPK - AHP TOPSIS</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="assets/img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="assets/img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page">
      <div class="container">
        <h2 class="main-title">Ringkasan Data</h2>
        <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="layers" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?= $jumlah_kriteria; ?></p>
                <p class="stat-cards-info__title">Data Kriteria</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="users" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
              <p class="stat-cards-info__num">
               <?= $jumlah_alternatif; ?>
                </p>
                <p class="stat-cards-info__title">Data Alternatif</p>
              </div>
            </article>
          </div>
        </div>
        <div class="row">   

          <div class="col-lg-9" id="load_content">
            <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div>
          </div>

          <div class="col-lg-3">
    <article class="customers-wrapper">
        <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
    </article>
    <article class="white-block">
        <div class="top-cat-title">
            <h3>Top Ranking Vendors</h3>
            <p>5 Kriteria, 5 Vendor</p>
        </div>
        <ul class="top-cat-list">
            <?php foreach ($topsis_results as $result) : ?>
                <li>
                    <a href="#">
                        <div class="top-cat-list__title">
                            <?= $result['vendor'] ?> <span>#<?= $result['rank'] ?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php if (isset($topsis_message)) : ?>
            <p><?= $topsis_message ?></p>
        <?php endif; ?>
    </article>
</div>


        </div>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 Â© Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>

</footer>
  </div>
</div>
<!-- Chart library -->
<script src="assets/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="assets/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="assets/js/script.js"></script>
<script>
$(document).ready(function() {
    // Load main content when a link is clicked
    $('.ajax-link').click(function(e) {
        e.preventDefault();
        $('#load_content').load($(this).attr('href'));
    });
});
</script>
<script>
window.onload = function() {
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Selamat Datang',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true
    });
}
</script>
</body>

</html>