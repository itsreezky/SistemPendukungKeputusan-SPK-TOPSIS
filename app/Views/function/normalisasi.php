<!-- NORMALISASI KRITERIA -->
<h2 class="main-title">Data Matriks Hasil Normalisasi</h2>

<h4> Matriks Kriteria Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Kriteria</th>
                <th>Harga</th>
                <th>Kualitas</th>
                <th>Waktu</th>
                <th>Kredibilitas</th>
                <th>Responsif</th>
                <th>Priority Vector</th>
                <th>Bobot</th>
                <th>Eigen Value</th>
            </tr>
        </thead>
        <tbody id="tableNormalisasiKriteria">
            <?php if (empty($kriteria)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach($kriteria as $k): ?>
                <tr>
                    <td><?= $k['id']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['harga']; ?></td>
                    <td><?= $k['kualitas']; ?></td>
                    <td><?= $k['waktu']; ?></td>
                    <td><?= $k['kredibilitas']; ?></td>
                    <td><?= $k['responsif']; ?></td>
                    <td><?= $k['priority_vector']; ?></td>
                    <td><?= $k['bobot']; ?></td>
                    <td><?= $k['eigen_value']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $k['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $k['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $k['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $k['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $k['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>

<h4> Matriks Kualitas Normalisasi </h4>
<div class="users-table table-wrapper">
        <table class="posts-table">
            <thead class="users-table-info">
                <tr>
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>VENDOR A</th>
                    <th>VENDOR B</th>
                    <th>VENDOR C</th>
                    <th>VENDOR D</th>
                    <th>VENDOR E</th>
                    <th>Priority Vector</th>
                    <th>Bobot</th>
                    <th>Eigen Value</th>
                </tr>
            </thead>
            <tbody id="tableNormalisasiKualitas">
            <?php if (empty($kualitas)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>

                <?php foreach ($kualitas as $kl) : ?>
                    <tr>
                        <td><?= $kl['id']; ?></td>
                        <td><?= $kl['vendor']; ?></td>
                        <td><?= $kl['VENDOR_A']; ?></td>
                        <td><?= $kl['VENDOR_B']; ?></td>
                        <td><?= $kl['VENDOR_C']; ?></td>
                        <td><?= $kl['VENDOR_D']; ?></td>
                        <td><?= $kl['VENDOR_E']; ?></td>
                        <td><?= $kl['priority_vector']; ?></td>
                        <td><?= $kl['bobot']; ?></td>
                        <td><?= $kl['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $kl['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $kl['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $kl['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $kl['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $kl['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>

<h4> Matriks Harga Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>VENDOR A</th>
                <th>VENDOR B</th>
                <th>VENDOR C</th>
                <th>VENDOR D</th>
                <th>VENDOR E</th>
                <th>Priority Vector</th>
                <th>Bobot</th>
                <th>Eigen Value</th>
            </tr>
        </thead>
        <tbody id="tableNormalisasiHarga">
            <?php if (empty($harga)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($harga as $h) : ?>
                    <tr>
                        <td><?= $h['id']; ?></td>
                        <td><?= $h['vendor']; ?></td>
                        <td><?= $h['VENDOR_A']; ?></td>
                        <td><?= $h['VENDOR_B']; ?></td>
                        <td><?= $h['VENDOR_C']; ?></td>
                        <td><?= $h['VENDOR_D']; ?></td>
                        <td><?= $h['VENDOR_E']; ?></td>
                        <td><?= $h['priority_vector']; ?></td>
                        <td><?= $h['bobot']; ?></td>
                        <td><?= $h['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $h['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $h['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $h['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $h['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $h['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>

<h4> Matriks Kredibilitas Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>VENDOR A</th>
                <th>VENDOR B</th>
                <th>VENDOR C</th>
                <th>VENDOR D</th>
                <th>VENDOR E</th>
                <th>Priority Vector</th>
                <th>Bobot</th>
                <th>Eigen Value</th>
            </tr>
        </thead>
        <tbody id="tableNormalisasiKredibilitas">
            <?php if (empty($kredibilitas)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($kredibilitas as $kr) : ?>
                    <tr>
                        <td><?= $kr['id']; ?></td>
                        <td><?= $kr['vendor']; ?></td>
                        <td><?= $kr['VENDOR_A']; ?></td>
                        <td><?= $kr['VENDOR_B']; ?></td>
                        <td><?= $kr['VENDOR_C']; ?></td>
                        <td><?= $kr['VENDOR_D']; ?></td>
                        <td><?= $kr['VENDOR_E']; ?></td>
                        <td><?= $kr['priority_vector']; ?></td>
                        <td><?= $kr['bobot']; ?></td>
                        <td><?= $kr['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $kr['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $kr['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $kr['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $kr['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $kr['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>

<h4> Matriks Responsif Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>VENDOR A</th>
                <th>VENDOR B</th>
                <th>VENDOR C</th>
                <th>VENDOR D</th>
                <th>VENDOR E</th>
                <th>Priority Vector</th>
                <th>Bobot</th>
                <th>Eigen Value</th>
            </tr>
        </thead>
        <tbody id="tableNormalisasiResponsif">
            <?php if (empty($responsif)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($responsif as $r) : ?>
                    <tr>
                        <td><?= $r['id']; ?></td>
                        <td><?= $r['vendor']; ?></td>
                        <td><?= $r['VENDOR_A']; ?></td>
                        <td><?= $r['VENDOR_B']; ?></td>
                        <td><?= $r['VENDOR_C']; ?></td>
                        <td><?= $r['VENDOR_D']; ?></td>
                        <td><?= $r['VENDOR_E']; ?></td>
                        <td><?= $r['priority_vector']; ?></td>
                        <td><?= $r['bobot']; ?></td>
                        <td><?= $r['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $r['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $r['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $r['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $r['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $r['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>

<h4> Matriks Waktu Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>VENDOR A</th>
                <th>VENDOR B</th>
                <th>VENDOR C</th>
                <th>VENDOR D</th>
                <th>VENDOR E</th>
                <th>Priority Vector</th>
                <th>Bobot</th>
                <th>Eigen Value</th>
            </tr>
        </thead>
        <tbody id="tableNormalisasiWaktu">
            <?php if (empty($waktu)): ?>
                <tr>
                    <td colspan="10">Data normalisasi kosong. Silakan normalisasi data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($waktu as $w) : ?>
                    <tr>
                        <td><?= $w['id']; ?></td>
                        <td><?= $w['vendor']; ?></td>
                        <td><?= $w['VENDOR_A']; ?></td>
                        <td><?= $w['VENDOR_B']; ?></td>
                        <td><?= $w['VENDOR_C']; ?></td>
                        <td><?= $w['VENDOR_D']; ?></td>
                        <td><?= $w['VENDOR_E']; ?></td>
                        <td><?= $w['priority_vector']; ?></td>
                        <td><?= $w['bobot']; ?></td>
                        <td><?= $w['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <center>
    <div class="card col-12 mt-4 mb-4">
  <div class="card-header">
    HASIL PERHITUNGAN
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">𝞴 maks = <?= $w['lambda_max']; ?> </li>
    <li class="list-group-item">CI = <?= $w['ci']; ?> </li>
    <li class="list-group-item">RI = <?= $w['ri']; ?> </li>
    <li class="list-group-item">CR = <?= $w['cr']; ?> </li>
    <li class="list-group-item text-success"><?= $w['consistency']; ?> <i class="fa-regular fa-circle-check"></i></li>
  </ul>
</div>
</center>
</div>
