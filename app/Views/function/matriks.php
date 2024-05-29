            <!-- MATRIKS KRITERIA -->
<h2 class="main-title">Data Matriks Perbandingan</h2>

<h4> Matriks Kriteria </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
  <button id="btnNormalisasiKriteria" class="btn btn-info mt-3 mb-3 me-3">Normalisasi Data</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKriteria">Tambah Kriteria</button>
  </div>
  <table class="posts-table">
    <thead class="users-table-info">
      <tr>
        <th>ID</th>
        <th>Harga</th>
        <th>Kualitas</th>
        <th>Waktu</th>
        <th>Kredibilitas</th>
        <th>Responsif</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="kriteriaTable">
      <?php foreach($kriteria as $k): ?>
      <tr>
        <td><?= $k['id']; ?></td>
        <td><?= $k['harga']; ?></td>
        <td><?= $k['kualitas']; ?></td>
        <td><?= $k['waktu']; ?></td>
        <td><?= $k['kredibilitas']; ?></td>
        <td><?= $k['responsif']; ?></td>
        <td>
          <button class="btn btn-warning btnEditKriteria" data-id="<?= $k['id']; ?>">Edit</button>
          <button class="btn btn-danger btnDeleteKriteria" data-id="<?= $k['id']; ?>">Hapus</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<h4> Matriks Kualitas </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
  <button id="btnNormalisasiKualitas" class="btn btn-info mt-3 mb-3 me-3">Normalisasi Data</button>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKualitas">Tambah Kualitas</button>
    </div>
    <table class="posts-table">
      <thead>
        <tr class="users-table-info">
          <th>ID</th>
          <th>Vendor</th>
          <th>Alternatif 1</th>
          <th>Alternatif 2</th>
          <th>Alternatif 3</th>
          <th>Alternatif 4</th>
          <th>Alternatif 5</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="kualitasTable">
      <?php foreach($kualitas as $kt): ?>
      <tr>
        <td><?= $kt['id']; ?></td>
        <td><?= $kt['vendor']; ?></td>
        <td><?= $kt['alternatif1']; ?></td>
        <td><?= $kt['alternatif2']; ?></td>
        <td><?= $kt['alternatif3']; ?></td>
        <td><?= $kt['alternatif4']; ?></td>
        <td><?= $kt['alternatif5']; ?></td>
        <td>
          <button class="btn btn-warning btnEditKualitas" data-id="<?= $kt['id']; ?>">Edit</button>
          <button class="btn btn-danger btnDeleteKualitas" data-id="<?= $kt['id']; ?>">Hapus</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<h4> Matriks Harga </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
    <button id="btnNormalisasiHarga" class="btn btn-info btnEdit mt-3 mb-3 me-3">Normalisasi Data</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHarga">Tambah Harga</button>
  </div>
  <table class="posts-table">
    <thead>
      <tr class="users-table-info">
        <th>ID</th>
        <th>Vendor</th>
        <th>Alternatif 1</th>
        <th>Alternatif 2</th>
        <th>Alternatif 3</th>
        <th>Alternatif 4</th>
        <th>Alternatif 5</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hargaTable">
      <?php foreach($harga as $kr): ?>
      <tr>
        <td><?= $kr['id']; ?></td>
        <td><?= $kr['vendor']; ?></td>
        <td><?= $kr['alternatif1']; ?></td>
        <td><?= $kr['alternatif2']; ?></td>
        <td><?= $kr['alternatif3']; ?></td>
        <td><?= $kr['alternatif4']; ?></td>
        <td><?= $kr['alternatif5']; ?></td>
        <td>
          <button class="btn btn-warning btnEditHarga" data-id="<?= $kr['id']; ?>">Edit</button>
          <button class="btn btn-danger btnDeleteHarga" data-id="<?= $kr['id']; ?>">Hapus</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<h4> Matriks Responsif </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
  <button id="btnNormalisasiResponsif" class="btn btn-info btnEdit mt-3 mb-3 me-3">Normalisasi Data</button>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalResponsif">Tambah Responsif</button>
  </div>
  <table class="posts-table">
      <thead>
        <tr class="users-table-info">
          <th>ID</th>
          <th>Vendor</th>
          <th>Alternatif 1</th>
          <th>Alternatif 2</th>
          <th>Alternatif 3</th>
          <th>Alternatif 4</th>
          <th>Alternatif 5</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="responsifTable">
        <?php foreach($responsif as $rs): ?>
        <tr>
          <td><?= $rs['id']; ?></td>
          <td><?= $rs['vendor']; ?></td>
          <td><?= $rs['alternatif1']; ?></td>
          <td><?= $rs['alternatif2']; ?></td>
          <td><?= $rs['alternatif3']; ?></td>
          <td><?= $rs['alternatif4']; ?></td>
          <td><?= $rs['alternatif5']; ?></td>
          <td>
            <button class="btn btn-warning btnEditResponsif" data-id="<?= $rs['id']; ?>">Edit</button>
            <button class="btn btn-danger btnDeleteResponsif" data-id="<?= $rs['id']; ?>">Hapus</button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
</div>



<h4> Matriks Kredibilitas </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
  <button id="btnNormalisasiKredibilitas" class="btn btn-info btnEdit mt-3 mb-3 me-3">Normalisasi Data</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKredibilitas">Tambah Kredibilitas</button>
  </div>
  <table class="posts-table">
    <thead>
      <tr class="users-table-info">
        <th>ID</th>
        <th>Vendor</th>
        <th>Alternatif 1</th>
        <th>Alternatif 2</th>
        <th>Alternatif 3</th>
        <th>Alternatif 4</th>
        <th>Alternatif 5</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="kredibilitasTable">
      <?php foreach($kredibilitas as $k): ?>
      <tr>
        <td><?= $k['id']; ?></td>
        <td><?= $k['vendor']; ?></td>
        <td><?= $k['alternatif1']; ?></td>
        <td><?= $k['alternatif2']; ?></td>
        <td><?= $k['alternatif3']; ?></td>
        <td><?= $k['alternatif4']; ?></td>
        <td><?= $k['alternatif5']; ?></td>
        <td>
          <button class="btn btn-warning btnEditKredibilitas" data-id="<?= $k['id']; ?>">Edit</button>
          <button class="btn btn-danger btnDeleteKredibilitas" data-id="<?= $k['id']; ?>">Hapus</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<h4> Matriks Waktu </h4>
<div class="users-table table-wrapper">
  <div class="mb-3">
  <button id="btnNormalisasiWaktu" class="btn btn-info btnEdit mt-3 mb-3 me-3">Normalisasi Data</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalWaktu">Tambah Waktu</button>
  </div>
  <table class="posts-table">
    <thead>
      <tr class="users-table-info">
        <th>ID</th>
        <th>Vendor</th>
        <th>Alternatif 1</th>
        <th>Alternatif 2</th>
        <th>Alternatif 3</th>
        <th>Alternatif 4</th>
        <th>Alternatif 5</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="waktuTable">
      <?php foreach($waktu as $wk): ?>
      <tr>
        <td><?= $wk['id']; ?></td>
        <td><?= $wk['vendor']; ?></td>
        <td><?= $wk['alternatif1']; ?></td>
        <td><?= $wk['alternatif2']; ?></td>
        <td><?= $wk['alternatif3']; ?></td>
        <td><?= $wk['alternatif4']; ?></td>
        <td><?= $wk['alternatif5']; ?></td>
        <td>
          <button class="btn btn-warning btnEditWaktu" data-id="<?= $wk['id']; ?>">Edit</button>
          <button class="btn btn-danger btnDeleteWaktu" data-id="<?= $wk['id']; ?>">Hapus</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Modal Templates -->

<!-- Modal Kriteria -->
<div class="modal fade" id="modalKriteria" tabindex="-1" aria-labelledby="modalKriteriaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKriteriaLabel">Form Kriteria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formKriteria">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="mb-3">
            <label for="kualitas" class="form-label">Kualitas</label>
            <input type="text" class="form-control" id="kualitas" name="kualitas" required>
          </div>
          <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" required>
          </div>
          <div class="mb-3">
            <label for="kredibilitas" class="form-label">Kredibilitas</label>
            <input type="text" class="form-control" id="kredibilitas" name="kredibilitas" required>
          </div>
          <div class="mb-3">
            <label for="responsif" class="form-label">Responsif</label>
            <input type="text" class="form-control" id="responsif" name="responsif" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Kualitas -->
<div class="modal fade" id="modalKualitas" tabindex="-1" aria-labelledby="modalKualitasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKualitasLabel">Form Kualitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formKualitas">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="vendor" class="form-label">Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
          </div>
          <div class="mb-3">
            <label for="alternatif1" class="form-label">Alternatif 1</label>
            <input type="text" class="form-control" id="alternatif1" name="alternatif1" required>
          </div>
          <div class="mb-3">
            <label for="alternatif2" class="form-label">Alternatif 2</label>
            <input type="text" class="form-control" id="alternatif2" name="alternatif2" required>
          </div>
          <div class="mb-3">
            <label for="alternatif3" class="form-label">Alternatif 3</label>
            <input type="text" class="form-control" id="alternatif3" name="alternatif3" required>
          </div>
          <div class="mb-3">
            <label for="alternatif4" class="form-label">Alternatif 4</label>
            <input type="text" class="form-control" id="alternatif4" name="alternatif4" required>
          </div>
          <div class="mb-3">
            <label for="alternatif5" class="form-label">Alternatif 5</label>
            <input type="text" class="form-control" id="alternatif5" name="alternatif5" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Harga -->
<div class="modal fade" id="modalHarga" tabindex="-1" aria-labelledby="modalHargaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHargaLabel">Form Harga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formHarga">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="vendor" class="form-label">Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
          </div>
          <div class="mb-3">
            <label for="alternatif1" class="form-label">Alternatif 1</label>
            <input type="text" class="form-control" id="alternatif1" name="alternatif1" required>
          </div>
          <div class="mb-3">
            <label for="alternatif2" class="form-label">Alternatif 2</label>
            <input type="text" class="form-control" id="alternatif2" name="alternatif2" required>
          </div>
          <div class="mb-3">
            <label for="alternatif3" class="form-label">Alternatif 3</label>
            <input type="text" class="form-control" id="alternatif3" name="alternatif3" required>
          </div>
          <div class="mb-3">
            <label for="alternatif4" class="form-label">Alternatif 4</label>
            <input type="text" class="form-control" id="alternatif4" name="alternatif4" required>
          </div>
          <div class="mb-3">
            <label for="alternatif5" class="form-label">Alternatif 5</label>
            <input type="text" class="form-control" id="alternatif5" name="alternatif5" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Responsif -->
<div class="modal fade" id="modalResponsif" tabindex="-1" aria-labelledby="modalResponsifLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalResponsifLabel">Form Responsif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formResponsif">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="vendor" class="form-label">Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
          </div>
          <div class="mb-3">
            <label for="alternatif1" class="form-label">Alternatif 1</label>
            <input type="text" class="form-control" id="alternatif1" name="alternatif1" required>
          </div>
          <div class="mb-3">
            <label for="alternatif2" class="form-label
            ">Alternatif 2</label>
            <input type="text" class="form-control" id="alternatif2" name="alternatif2" required>
          </div>
          <div class="mb-3">
            <label for="alternatif3" class="form-label
            ">Alternatif 3</label>
            <input type="text" class="form-control" id="alternatif3" name="alternatif3" required>
          </div>
          <div class="mb-3">
            <label for="alternatif4" class="form-label">Alternatif 4</label>
            <input type="text" class="form-control" id="alternatif4" name="alternatif4" required>
          </div>
          <div class="mb-3">
            <label for="alternatif5" class="form-label
            ">Alternatif 5</label>
            <input type="text" class="form-control" id="alternatif5" name="alternatif5" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Kredibilitas -->
<div class="modal fade" id="modalKredibilitas" tabindex="-1" aria-labelledby="modalKredibilitasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKredibilitasLabel">Form Kredibilitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formKredibilitas">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="vendor" class="form-label">Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
          </div>
          <div class="mb-3">
            <label for="alternatif1" class="form-label">Alternatif 1</label>
            <input type="text" class="form-control" id="alternatif1" name="alternatif1" required>
          </div>
          <div class="mb-3">
            <label for="alternatif2" class="form-label">Alternatif 2</label>
            <input type="text" class="form-control" id="alternatif2" name="alternatif2" required>
          </div>
          <div class="mb-3">
            <label for="alternatif3" class="form-label">Alternatif 3</label>
            <input type="text" class="form-control" id="alternatif3" name="alternatif3" required>
          </div>
          <div class="mb-3">
            <label for="alternatif4" class="form-label">Alternatif 4</label>
            <input type="text" class="form-control" id="alternatif4" name="alternatif4" required>
          </div>
          <div class="mb-3">
            <label for="alternatif5" class="form-label">Alternatif 5</label>
            <input type="text" class="form-control" id="alternatif5" name="alternatif5" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Waktu -->
<div class="modal fade" id="modalWaktu" tabindex="-1" aria-labelledby="modalWaktuLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="modalWaktuLabel">Form Waktu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formWaktu">
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="mb-3">
            <label for="vendor" class="form-label">Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
          </div>
          <div class="mb-3">
            <label for="alternatif1" class="form-label">Alternatif 1</label>
            <input type="text" class="form-control" id="alternatif1" name="alternatif1" required>
          </div>
          <div class="mb-3">
            <label for="alternatif2" class="form-label">Alternatif 2</label>
            <input type="text" class="form-control" id="alternatif2" name="alternatif2" required>
          </div>
          <div class="mb-3">
            <label for="alternatif3" class="form-label">Alternatif 3</label>
            <input type="text" class="form-control" id="alternatif3" name="alternatif3" required>
          </div>
          <div class="mb-3">
            <label for="alternatif4" class="form-label">Alternatif 4</label>
            <input type="text" class="form-control" id="alternatif4" name="alternatif4" required>
          </div>
          <div class="mb-3">
            <label for="alternatif5" class="form-label">Alternatif 5</label>
            <input type="text" class="form-control" id="alternatif5" name="alternatif5" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
// Add or update data for Kriteria
$('#formKriteria').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateKriteria'); ?>' : '<?= base_url('function/matriks/saveKriteria'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalKriteria').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
            loadKriteria();
            $('#id').val('');
            $('#formKriteria')[0].reset();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Kriteria
$(document).on('click', '.btnEditKriteria', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editKriteria'); ?>/' + id, function(data) {
        $('#id').val(data.kriteria.id);
        $('#harga').val(data.kriteria.harga);
        $('#kualitas').val(data.kriteria.kualitas);
        $('#waktu').val(data.kriteria.waktu);
        $('#kredibilitas').val(data.kriteria.kredibilitas);
        $('#responsif').val(data.kriteria.responsif);
        $('#modalKriteria').modal('show');
    });
});

// Delete data for Kriteria
$(document).on('click', '.btnDeleteKriteria', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteKriteria/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadKriteria();
                    $('#id').val('');
                    $('#formKriteria')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Kriteria
function loadKriteria() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#kriteriaTable').html($(data).find('#kriteriaTable').html());
    });
}

// Add or update data for Kualitas
$('#formKualitas').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateKualitas'); ?>' : '<?= base_url('function/matriks/saveKualitas'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalKualitas').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
            loadKualitas();
            $('#id').val('');
            $('#formKualitas')[0].reset();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Kualitas
$(document).on('click', '.btnEditKualitas', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editKualitas'); ?>/' + id, function(data) {
        $('#id').val(data.kualitas.id);
        $('#vendor').val(data.kualitas.vendor);
        $('#alternatif1').val(data.kualitas.alternatif1);
        $('#alternatif2').val(data.kualitas.alternatif2);
        $('#alternatif3').val(data.kualitas.alternatif3);
        $('#alternatif4').val(data.kualitas.alternatif4);
        $('#alternatif5').val(data.kualitas.alternatif5);
        $('#modalKualitas').modal('show');
    });
});

// Delete data for Kualitas
$(document).on('click', '.btnDeleteKualitas', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteKualitas/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadKualitas();
                    $('#id').val('');
            $('#formKualitas')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Kualitas
function loadKualitas() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#kualitasTable').html($(data).find('#kualitasTable').html());
    });
}

// Add or update data for Harga
$('#formHarga').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateHarga'); ?>' : '<?= base_url('function/matriks/saveHarga'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalHarga').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
            loadHarga();
            $('#id').val('');
            $('#formHarga')[0].reset();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Harga
$(document).on('click', '.btnEditHarga', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editHarga'); ?>/' + id, function(data) {
        $('#id').val(data.harga.id);
        $('#vendor').val(data.harga.vendor);
        $('#alternatif1').val(data.harga.alternatif1);
        $('#alternatif2').val(data.harga.alternatif2);
        $('#alternatif3').val(data.harga.alternatif3);
        $('#alternatif4').val(data.harga.alternatif4);
        $('#alternatif5').val(data.harga.alternatif5);
        $('#modalHarga').modal('show');
    });
});

// Delete data for Harga
$(document).on('click', '.btnDeleteHarga', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteHarga/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadHarga();
                    $('#id').val('');
                    $('#formHarga')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Harga
function loadHarga() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#hargaTable').html($(data).find('#hargaTable').html());
    });
}

// Add or update data for Kredibilitas
$('#formKredibilitas').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateKredibilitas'); ?>' : '<?= base_url('function/matriks/saveKredibilitas'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalKredibilitas').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Kredibilitas
$(document).on('click', '.btnEditKredibilitas', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editKredibilitas'); ?>/' + id, function(data) {
        $('#id').val(data.kredibilitas.id);
        $('#vendor').val(data.kredibilitas.vendor);
        $('#alternatif1').val(data.kredibilitas.alternatif1);
        $('#alternatif2').val(data.kredibilitas.alternatif2);
        $('#alternatif3').val(data.kredibilitas.alternatif3);
        $('#alternatif4').val(data.kredibilitas.alternatif4);
        $('#alternatif5').val(data.kredibilitas.alternatif5);
        $('#modalKredibilitas').modal('show');
    });
    loadKredibilitas();
    $('#id').val('');
    $('#formKredibilitas')[0].reset();
});

// Delete data for Kredibilitas
$(document).on('click', '.btnDeleteKredibilitas', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteKredibilitas/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadKredibilitas();
                    $('#id').val('');
                    $('#formKredibilitas')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Kredibilitas
function loadKredibilitas() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#kredibilitasTable').html($(data).find('#kredibilitasTable').html());
    });
}

// Add or update data for Waktu
$('#formWaktu').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateWaktu'); ?>' : '<?= base_url('function/matriks/saveWaktu'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalWaktu').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Waktu
$(document).on('click', '.btnEditWaktu', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editWaktu'); ?>/' + id, function(data) {
        $('#id').val(data.waktu.id);
        $('#vendor').val(data.waktu.vendor);
        $('#alternatif1').val(data.waktu.alternatif1);
        $('#alternatif2').val(data.waktu.alternatif2);
        $('#alternatif3').val(data.waktu.alternatif3);
        $('#alternatif4').val(data.waktu.alternatif4);
        $('#alternatif5').val(data.waktu.alternatif5);
        $('#modalWaktu').modal('show');
    });
    loadWaktu();
    $('#id').val('');
    $('#formWaktu')[0].reset();
});

// Delete data for Waktu
$(document).on('click', '.btnDeleteWaktu', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteWaktu/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Waktu
function loadWaktu() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#waktuTable').html($(data).find('#waktuTable').html());
    });
}


// Add or update data for Responsif
$('#formResponsif').submit(function(e) {
    e.preventDefault();
    let id = $('#id').val();
    let url = id ? '<?= base_url('function/matriks/updateResponsif'); ?>' : '<?= base_url('function/matriks/saveResponsif'); ?>';
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#modalResponsif').modal('hide');
            Swal.fire({
                icon: 'success',
                title: response.message,
                showConfirmButton: false,
                timer: 2000
            });
            loadKriteria();
            $('#id').val('');
            $('#formResponsif')[0].reset();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: errorThrown,
                showConfirmButton: true
            });
        }
    });
});

// Edit data for Responsif
$(document).on('click', '.btnEditResponsif', function() {
    let id = $(this).data('id');
    $.get('<?= base_url('function/matriks/editResponsif'); ?>/' + id, function(data) {
      $('#id').val(data.responsif.id);
        $('#vendor').val(data.responsif.vendor);
        $('#alternatif1').val(data.responsif.alternatif1);
        $('#alternatif2').val(data.responsif.alternatif2);
        $('#alternatif3').val(data.responsif.alternatif3);
        $('#alternatif4').val(data.responsif.alternatif4);
        $('#alternatif5').val(data.responsif.alternatif5);
        $('#modalResponsif').modal('show');
    });
});

// Delete data for Responsif
$(document).on('click', '.btnDeleteResponsif', function() {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('function/matriks/deleteResponsif/'); ?>' + id,
                type: 'DELETE',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadResponsif();
                    $('#id').val('');
                    $('#formResponsif')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});

// Load data for Responsif
function loadKriteria() {
    $.get('<?= base_url('function/matriks'); ?>', function(data) {
        $('#responsifTable').html($(data).find('#responsifTable').html());
    });
}

</script>

<script>
  // Normalisasi data kriteria
    document.getElementById('btnNormalisasiKriteria').addEventListener('click', function() {
        fetch('<?= site_url('function/normalisasi/kriteria') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    });
  // Normalisasi data kualitas
    document.getElementById('btnNormalisasiKualitas').addEventListener('click', function() {
      fetch('<?= site_url('function/normalisasi/kualitas') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    });
  // Normalisasi data harga
    document.getElementById('btnNormalisasiHarga').addEventListener('click', function() {
      fetch('<?= site_url('function/normalisasi/harga') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    });
// Normalisasi data kredibilitas
    document.getElementById('btnNormalisasiKredibilitas').addEventListener('click', function() {
      fetch('<?= site_url('function/normalisasi/kredibilitas') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    }); 

// Normalisasi data responsif
    document.getElementById('btnNormalisasiResponsif').addEventListener('click', function() {
      fetch('<?= site_url('function/normalisasi/responsif') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    });
// Normalisasi data waktu
    document.getElementById('btnNormalisasiWaktu').addEventListener('click', function() {
      fetch('<?= site_url('function/normalisasi/waktu') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: data.message
            });
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menormalisasi data'
            });
        });
    });
</script>

