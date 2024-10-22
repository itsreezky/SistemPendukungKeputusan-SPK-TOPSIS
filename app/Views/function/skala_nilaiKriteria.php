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
            <?php $rowNumber = 1; ?>
            <?php foreach ($kriteria as $k1) : ?>
                <?php foreach ($kriteria as $k2) : ?>
                    <?php if ($k1['id'] < $k2['id']) : ?>
                        <tr>
                            <td><?= $rowNumber++ ?></td>
                            <td><?= $k1['nama_kriteria'] ?></td>
                            <?php for ($i = 9; $i >= 1; $i--) : ?>
                                <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= $i ?>"></td>
                            <?php endfor; ?>
                            <?php for ($i = 2; $i <= 9; $i++) : ?>
                                <td><input type="radio" name="scale-<?= $k1['id'] ?>-<?= $k2['id'] ?>" class="scale-checkbox" data-weight="<?= 1/$i ?>"></td>
                            <?php endfor; ?>
                            <td><?= $k2['nama_kriteria'] ?></td>
                            <td class="geomean-kriteria p-5">0</td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
    function handleAjaxError(xhr, status, error) {
        console.error('Error:', xhr, status, error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan! ' + error,
        });
    }

    function showSuccessMessage(message) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: message,
            showConfirmButton: false,
            timer: 2200
        });
    }

    function disableCheckboxes() {
        $('.scale-checkbox').prop('disabled', true).addClass('locked');
    }

    function enableCheckboxes() {
        $('.scale-checkbox').prop('disabled', false).removeClass('locked');
    }

    function updateGeomeans(geomeans) {
        $('tbody tr').each(function(index) {
            $(this).find('.geomean-kriteria').text(geomeans[index].toFixed(2));
        });
    }

    $('#submit-kriteria').click(function() {
        var data = [];
        var criteriaCount = <?= count($kriteria) ?>;

        $('tbody tr').each(function() {
            var row = [];
            $(this).find('.scale-checkbox:checked').each(function() {
                var weight = parseFloat($(this).data('weight'));
                row.push(weight);
            });
            if (row.length > 0) {
                data.push(row);
            }
        });

        console.log('Data to send for Geomean calculation:', data);

        $.ajax({
            url: '<?= base_url('function/skala_nilaiKriteria/hitungGeomeanKriteria') ?>',
            type: 'POST',
            data: JSON.stringify({ data: data }),
            contentType: 'application/json',
            dataType: 'json',
            success: function(response) {
                updateGeomeans(response.geomeans);
                showSuccessMessage('Geomean Kriteria telah dihitung.');
                $('#save-kriteria').show();
            },
            error: handleAjaxError
        });
    });

    $('#save-kriteria').click(function() {
        var data = [];
        var criteriaCount = <?= count($kriteria) ?>;

        for (var i = 0; i < criteriaCount; i++) {
            var row = [];
            for (var j = i + 1; j < criteriaCount; j++) {
                var weight = $('input[name="scale-' + (i + 1) + '-' + (j + 1) + '"]:checked').data('weight');
                row.push(weight);
            }
            if (row.length > 0) {
                data.push(row);
            }
        }

        console.log('Data to save:', data);

        $.ajax({
            url: '<?= base_url('function/skala_nilaiKriteria/simpanDataKriteria') ?>',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ data: data }),
            success: function(response) {
                showSuccessMessage(response.message);
                $('#save-kriteria').hide();
                $('#delete-kriteria').show();
                disableCheckboxes();
            },
            error: function(xhr, status, error) {
                handleAjaxError(xhr, status, error);
            }
        });
    });

    $('#delete-kriteria').click(function() {
        $.ajax({
            url: '<?= base_url('function/skala_nilaiKriteria/hapusDataKriteria') ?>',
            type: 'POST',
            success: function(response) {
                showSuccessMessage('Data kriteria telah dihapus.');
                enableCheckboxes();
                $('#save-kriteria').hide();
                $('#delete-kriteria').hide();
                $('tbody tr').find('.geomean-kriteria').text('0');
            },
            error: handleAjaxError
        });
    });

    // Load saved data
    loadSavedData();
});
</script>