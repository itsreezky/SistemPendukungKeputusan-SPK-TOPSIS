<h4>Perhitungan Skala Perbandingan Otomatis</h4>
<div class="users-table table-wrapper mt-5">
    <center><b>SKALA NILAI KRITERIA</b> <br><br>
        <button class="btn btn-primary" id="submit-kriteria">Hitung Geomean</button>
        <button class="btn btn-success" id="save-kriteria" style="display: none;">Simpan</button>
        <button class="btn btn-danger" id="delete-kriteria" style="display: none;">Hapus</button>
    </center>
    <table class="posts-table">
        <thead class="users-table-info">
            <tr>
                <th>No</th>
                <th>Kriteria</th>
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
                <th>Kriteria</th>
                <th>GEOMEAN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kriteria as $index => $k1) : ?>
                <?php foreach ($kriteria as $k2) : ?>
                    <?php if ($k1['id'] < $k2['id']) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $k1['nama_kriteria'] ?></td>
                            <?php for ($i = 9; $i >= 1; $i--) : ?>
                                <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= $i ?>"></td>
                            <?php endfor; ?>
                            <?php for ($i = 2; $i <= 9; $i++) : ?>
                                <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= 1/$i ?>"></td>
                            <?php endfor; ?>
                            <td><?= $k2['nama_kriteria'] ?></td>
                            <td class="geomean-kriteria">0</td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#submit-kriteria').click(function() {
            var data = [];

            $('tbody tr').each(function() {
                var row = [];
                $(this).find('.scale-checkbox:checked').each(function() {
                    row.push(parseFloat($(this).data('weight')));
                });
                data.push(row);
            });

            $.ajax({
                url: '<?= base_url('function/skala_nilaiKriteria/hitungGeomeanKriteria') ?>',
                type: 'POST',
                data: { data: data },
                dataType: 'json',
                success: function(response) {
                    $('tbody tr').each(function(index) {
                        $(this).find('.geomean-kriteria').text(response.geomeans[index].toFixed(2));
                    });
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Geomean Kriteria telah dihitung.',
                        showConfirmButton: false,
                        timer: 2200
                    });
                    $('#save-kriteria').show();
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Terjadi kesalahan saat menghitung geomean kriteria.',
                    });
                }
            });
        });

        $('#save-kriteria').click(function() {
            $('.scale-checkbox:checked').prop('disabled', true).addClass('locked');
            $('#save-kriteria').hide();
            $('#delete-kriteria').show();
        });

        $('#delete-kriteria').click(function() {
            $('.scale-checkbox').prop('disabled', false).removeClass('locked').prop('checked', false);
            $('.geomean-kriteria').text('0');
            $('#delete-kriteria').hide();
            $('#save-kriteria').hide();
        });
    });
</script>
