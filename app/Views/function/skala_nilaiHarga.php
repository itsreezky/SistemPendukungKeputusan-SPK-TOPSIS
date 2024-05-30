<h4>Perhitungan Skala Perbandingan Otomatis</h4>
    <div class="users-table table-wrapper mt-5">
    <center><b>SKALA NILAI Harga</b> <br><br>
        <button class="btn btn-primary" id="submit-harga">Hitung Geomean</button>
        </center>
        <table class="posts-table">
            <thead class="users-table-info">
                <tr>
                    <th>No</th>
                    <th>Harga</th>
                    <th>9</th>
                    <th>8</th>
                    <th>7</th>
                    <th>6</th>
                    <th>5</th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>Harga</th>
                    <th>GEOMEAN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alternatif as $index => $k1) : ?>
                    <?php foreach ($alternatif as $k2) : ?>
                        <?php if ($k1['id'] < $k2['id']) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $k1['nama_alternatif'] ?></td>
                                <?php for ($i = 9; $i >= 1; $i--) : ?>
                                    <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= $i ?>"></td>
                                <?php endfor; ?>
                                <?php for ($i = 2; $i <= 9; $i++) : ?>
                                    <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= 1/$i ?>"></td>
                                <?php endfor; ?>
                                <td><?= $k2['nama_alternatif'] ?></td>
                                <td class="geomean-harga">0</td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#submit-harga').click(function() {
                var data = [];

                $('tbody tr').each(function() {
                    var row = [];
                    $(this).find('.scale-checkbox:checked').each(function() {
                        row.push(parseFloat($(this).data('weight')));
                    });
                    data.push(row);
                });

                $.ajax({
                    url: '<?= base_url('function/skala_nilaiHarga/hitungGeomeanHarga') ?>',
                    type: 'POST',
                    data: { data: data },
                    dataType: 'json',
                    success: function(response) {
                        $('tbody tr').each(function(index) {
                            $(this).find('.geomean-harga').text(response.geomeans[index].toFixed(2));
                            $(this).find('.scale-checkbox').prop('disabled', true).addClass('locked');
                        });
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Geomean Harga telah dihitung dan checkbox dikunci.',
                            showConfirmButton: false,
                            timer: 2200
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: 'Terjadi kesalahan saat menghitung geomean harga.',
                        });
                    }
                });
            });
        });

        
    </script>