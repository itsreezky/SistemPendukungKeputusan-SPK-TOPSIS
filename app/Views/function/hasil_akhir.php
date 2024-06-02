<h4>Perhitungan Skor Alternatif</h4>
<div class="users-table table-wrapper mt-5">
    <center>
        <button class="btn btn-primary" id="hitung-skor">Hitung Skor Alternatif</button>
    </center>
    <table class="posts-table mt-2">
        <thead class="users-table-info">
            <tr>
                <th>Vendor</th>
                <th>Harga</th>
                <th>Kualitas</th>
                <th>Waktu</th>
                <th>Kredibilitas</th>
                <th>Responsif</th>
            </tr>
        </thead>
        <tbody id="hasil-skor-body">
            <?php if (empty($hasil_skor)): ?>
                <tr>
                    <td colspan="6">Data hasil kosong. Silakan hitung data terlebih dahulu.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($hasil_skor as $hasil) : ?>
                    <tr>
                        <td><?= $hasil['vendor']; ?></td>
                        <td><?= $hasil['harga']; ?></td>
                        <td><?= $hasil['kualitas']; ?></td>
                        <td><?= $hasil['waktu']; ?></td>
                        <td><?= $hasil['kredibilitas']; ?></td>
                        <td><?= $hasil['responsif']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <!-- Tambahkan baris untuk bobot -->
                <tr>
                    <td>Bobot (w)</td>
                    <?php foreach ($bobot as $value) : ?>
                        <td><?= $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<h4>Hasil Perhitungan TOPSIS</h4>
<div class="users-table table-wrapper mt-5">
    <table class="posts-table mt-2">
        <thead class="users-table-info">
            <tr>
                <th>Nama Alternatif</th>
                <th>Jarak Ideal Positif (Si+)</th>
                <th>Jarak Ideal Negatif (Si-)</th>
                <th>Nilai V</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody id="hasil-topsis-body">
            <?php foreach ($nilaiPreferensi as $key => $nilai) : ?>
                <tr>
                    <td><?= $nilai['vendor']; ?></td>
                    <td><?= $jarakIdeal[$key]['jarakPositif']; ?></td>
                    <td><?= $jarakIdeal[$key]['jarakNegatif']; ?></td>
                    <td><?= $nilai['nilaiV']; ?></td>
                    <td><?= $key + 1; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#hitung-skor').on('click', function() {
            $.ajax({
                url: '<?= base_url('function/hasil_akhir/hitungSkor') ?>',
                type: 'POST',
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Perhitungan skor gagal',
                        });
                    }
                }
            });
        });
    });
</script>
