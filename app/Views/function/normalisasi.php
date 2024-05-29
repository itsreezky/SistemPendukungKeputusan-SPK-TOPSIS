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
</div>

<h4> Matriks Kualitas Normalisasi </h4>
<div class="users-table table-wrapper">
        <table class="posts-table">
            <thead class="users-table-info">
                <tr>
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>
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
                        <td><?= $kl['alternatif1']; ?></td>
                        <td><?= $kl['alternatif2']; ?></td>
                        <td><?= $kl['alternatif3']; ?></td>
                        <td><?= $kl['alternatif4']; ?></td>
                        <td><?= $kl['alternatif5']; ?></td>
                        <td><?= $kl['priority_vector']; ?></td>
                        <td><?= $kl['bobot']; ?></td>
                        <td><?= $kl['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
</div>

<h4> Matriks Harga Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>Alternatif 1</th>
                <th>Alternatif 2</th>
                <th>Alternatif 3</th>
                <th>Alternatif 4</th>
                <th>Alternatif 5</th>
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
                        <td><?= $h['alternatif1']; ?></td>
                        <td><?= $h['alternatif2']; ?></td>
                        <td><?= $h['alternatif3']; ?></td>
                        <td><?= $h['alternatif4']; ?></td>
                        <td><?= $h['alternatif5']; ?></td>
                        <td><?= $h['priority_vector']; ?></td>
                        <td><?= $h['bobot']; ?></td>
                        <td><?= $h['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<h4> Matriks Kredibilitas Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>Alternatif 1</th>
                <th>Alternatif 2</th>
                <th>Alternatif 3</th>
                <th>Alternatif 4</th>
                <th>Alternatif 5</th>
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
                        <td><?= $kr['alternatif1']; ?></td>
                        <td><?= $kr['alternatif2']; ?></td>
                        <td><?= $kr['alternatif3']; ?></td>
                        <td><?= $kr['alternatif4']; ?></td>
                        <td><?= $kr['alternatif5']; ?></td>
                        <td><?= $kr['priority_vector']; ?></td>
                        <td><?= $kr['bobot']; ?></td>
                        <td><?= $kr['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<h4> Matriks Responsif Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>Alternatif 1</th>
                <th>Alternatif 2</th>
                <th>Alternatif 3</th>
                <th>Alternatif 4</th>
                <th>Alternatif 5</th>
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
                        <td><?= $r['alternatif1']; ?></td>
                        <td><?= $r['alternatif2']; ?></td>
                        <td><?= $r['alternatif3']; ?></td>
                        <td><?= $r['alternatif4']; ?></td>
                        <td><?= $r['alternatif5']; ?></td>
                        <td><?= $r['priority_vector']; ?></td>
                        <td><?= $r['bobot']; ?></td>
                        <td><?= $r['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<h4> Matriks Waktu Normalisasi </h4>
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>ID</th>
                <th>Vendor</th>
                <th>Alternatif 1</th>
                <th>Alternatif 2</th>
                <th>Alternatif 3</th>
                <th>Alternatif 4</th>
                <th>Alternatif 5</th>
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
                        <td><?= $w['alternatif1']; ?></td>
                        <td><?= $w['alternatif2']; ?></td>
                        <td><?= $w['alternatif3']; ?></td>
                        <td><?= $w['alternatif4']; ?></td>
                        <td><?= $w['alternatif5']; ?></td>
                        <td><?= $w['priority_vector']; ?></td>
                        <td><?= $w['bobot']; ?></td>
                        <td><?= $w['eigen_value']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
