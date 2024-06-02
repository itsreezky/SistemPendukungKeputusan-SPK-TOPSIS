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
        <th>Kriteria</th>
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
        <td><?= $k['nama_kriteria']; ?></td>
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
          <th>VENDOR A</th>
          <th>VENDOR B</th>
          <th>VENDOR C</th>
          <th>VENDOR D</th>
          <th>VENDOR E</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="kualitasTable">
      <?php foreach($kualitas as $kt): ?>
      <tr>
        <td><?= $kt['id']; ?></td>
        <td><?= $kt['vendor']; ?></td>
        <td><?= $kt['VENDOR_A']; ?></td>
        <td><?= $kt['VENDOR_B']; ?></td>
        <td><?= $kt['VENDOR_C']; ?></td>
        <td><?= $kt['VENDOR_D']; ?></td>
        <td><?= $kt['VENDOR_E']; ?></td>
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
        <th>VENDOR A</th>
        <th>VENDOR B</th>
        <th>VENDOR C</th>
        <th>VENDOR D</th>
        <th>VENDOR E</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hargaTable">
      <?php foreach($harga as $kr): ?>
      <tr>
        <td><?= $kr['id']; ?></td>
        <td><?= $kr['vendor']; ?></td>
        <td><?= $kr['VENDOR_A']; ?></td>
        <td><?= $kr['VENDOR_B']; ?></td>
        <td><?= $kr['VENDOR_C']; ?></td>
        <td><?= $kr['VENDOR_D']; ?></td>
        <td><?= $kr['VENDOR_E']; ?></td>
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
          <th>VENDOR A</th>
          <th>VENDOR B</th>
          <th>VENDOR C</th>
          <th>VENDOR D</th>
          <th>VENDOR E</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="responsifTable">
        <?php foreach($responsif as $rs): ?>
        <tr>
          <td><?= $rs['id']; ?></td>
          <td><?= $rs['vendor']; ?></td>
          <td><?= $rs['VENDOR_A']; ?></td>
          <td><?= $rs['VENDOR_B']; ?></td>
          <td><?= $rs['VENDOR_C']; ?></td>
          <td><?= $rs['VENDOR_D']; ?></td>
          <td><?= $rs['VENDOR_E']; ?></td>
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
        <th>VENDOR A</th>
        <th>VENDOR B</th>
        <th>VENDOR C</th>
        <th>VENDOR D</th>
        <th>VENDOR E</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="kredibilitasTable">
      <?php foreach($kredibilitas as $k): ?>
      <tr>
        <td><?= $k['id']; ?></td>
        <td><?= $k['vendor']; ?></td>
        <td><?= $k['VENDOR_A']; ?></td>
        <td><?= $k['VENDOR_B']; ?></td>
        <td><?= $k['VENDOR_C']; ?></td>
        <td><?= $k['VENDOR_D']; ?></td>
        <td><?= $k['VENDOR_E']; ?></td>
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
        <th>VENDOR A</th>
        <th>VENDOR B</th>
        <th>VENDOR C</th>
        <th>VENDOR D</th>
        <th>VENDOR E</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="waktuTable">
      <?php foreach($waktu as $wk): ?>
      <tr>
        <td><?= $wk['id']; ?></td>
        <td><?= $wk['vendor']; ?></td>
        <td><?= $wk['VENDOR_A']; ?></td>
        <td><?= $wk['VENDOR_B']; ?></td>
        <td><?= $wk['VENDOR_C']; ?></td>
        <td><?= $wk['VENDOR_D']; ?></td>
        <td><?= $wk['VENDOR_E']; ?></td>
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
            <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
            <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
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
            <label for="VENDOR_A" class="form-label">VENDOR A</label>
            <input type="text" class="form-control" id="VENDOR_A" name="VENDOR_A" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_B" class="form-label">VENDOR B</label>
            <input type="text" class="form-control" id="VENDOR_B" name="VENDOR_B" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_C" class="form-label">VENDOR C</label>
            <input type="text" class="form-control" id="VENDOR_C" name="VENDOR_C" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_D" class="form-label">VENDOR D</label>
            <input type="text" class="form-control" id="VENDOR_D" name="VENDOR_D" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_E" class="form-label">VENDOR E</label>
            <input type="text" class="form-control" id="VENDOR_E" name="VENDOR_E" required>
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
            <label for="VENDOR_A" class="form-label">VENDOR A</label>
            <input type="text" class="form-control" id="VENDOR_A" name="VENDOR_A" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_B" class="form-label">VENDOR B</label>
            <input type="text" class="form-control" id="VENDOR_B" name="VENDOR_B" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_C" class="form-label">VENDOR C</label>
            <input type="text" class="form-control" id="VENDOR_C" name="VENDOR_C" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_D" class="form-label">VENDOR D</label>
            <input type="text" class="form-control" id="VENDOR_D" name="VENDOR_D" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_E" class="form-label">VENDOR E</label>
            <input type="text" class="form-control" id="VENDOR_E" name="VENDOR_E" required>
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
            <label for="VENDOR_A" class="form-label">VENDOR A</label>
            <input type="text" class="form-control" id="VENDOR_A" name="VENDOR_A" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_B" class="form-label
            ">VENDOR B</label>
            <input type="text" class="form-control" id="VENDOR_B" name="VENDOR_B" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_C" class="form-label
            ">VENDOR C</label>
            <input type="text" class="form-control" id="VENDOR_C" name="VENDOR_C" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_D" class="form-label">VENDOR D</label>
            <input type="text" class="form-control" id="VENDOR_D" name="VENDOR_D" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_E" class="form-label
            ">VENDOR E</label>
            <input type="text" class="form-control" id="VENDOR_E" name="VENDOR_E" required>
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
            <label for="VENDOR_A" class="form-label">VENDOR A</label>
            <input type="text" class="form-control" id="VENDOR_A" name="VENDOR_A" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_B" class="form-label">VENDOR B</label>
            <input type="text" class="form-control" id="VENDOR_B" name="VENDOR_B" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_C" class="form-label">VENDOR C</label>
            <input type="text" class="form-control" id="VENDOR_C" name="VENDOR_C" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_D" class="form-label">VENDOR D</label>
            <input type="text" class="form-control" id="VENDOR_D" name="VENDOR_D" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_E" class="form-label">VENDOR E</label>
            <input type="text" class="form-control" id="VENDOR_E" name="VENDOR_E" required>
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
            <label for="VENDOR_A" class="form-label">VENDOR A</label>
            <input type="text" class="form-control" id="VENDOR_A" name="VENDOR_A" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_B" class="form-label">VENDOR B</label>
            <input type="text" class="form-control" id="VENDOR_B" name="VENDOR_B" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_C" class="form-label">VENDOR C</label>
            <input type="text" class="form-control" id="VENDOR_C" name="VENDOR_C" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_D" class="form-label">VENDOR D</label>
            <input type="text" class="form-control" id="VENDOR_D" name="VENDOR_D" required>
          </div>
          <div class="mb-3">
            <label for="VENDOR_E" class="form-label">VENDOR E</label>
            <input type="text" class="form-control" id="VENDOR_E" name="VENDOR_E" required>
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
        $('#nama_kriteria').val(data.kriteria.nama_kriteria);
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
        $('#VENDOR_A').val(data.kualitas.VENDOR_A);
        $('#VENDOR_B').val(data.kualitas.VENDOR_B);
        $('#VENDOR_C').val(data.kualitas.VENDOR_C);
        $('#VENDOR_D').val(data.kualitas.VENDOR_D);
        $('#VENDOR_E').val(data.kualitas.VENDOR_E);
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
        $('#VENDOR_A').val(data.harga.VENDOR_A);
        $('#VENDOR_B').val(data.harga.VENDOR_B);
        $('#VENDOR_C').val(data.harga.VENDOR_C);
        $('#VENDOR_D').val(data.harga.VENDOR_D);
        $('#VENDOR_E').val(data.harga.VENDOR_E);
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
        $('#VENDOR_A').val(data.kredibilitas.VENDOR_A);
        $('#VENDOR_B').val(data.kredibilitas.VENDOR_B);
        $('#VENDOR_C').val(data.kredibilitas.VENDOR_C);
        $('#VENDOR_D').val(data.kredibilitas.VENDOR_D);
        $('#VENDOR_E').val(data.kredibilitas.VENDOR_E);
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
        $('#VENDOR_A').val(data.waktu.VENDOR_A);
        $('#VENDOR_B').val(data.waktu.VENDOR_B);
        $('#VENDOR_C').val(data.waktu.VENDOR_C);
        $('#VENDOR_D').val(data.waktu.VENDOR_D);
        $('#VENDOR_E').val(data.waktu.VENDOR_E);
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
        $('#VENDOR_A').val(data.responsif.VENDOR_A);
        $('#VENDOR_B').val(data.responsif.VENDOR_B);
        $('#VENDOR_C').val(data.responsif.VENDOR_C);
        $('#VENDOR_D').val(data.responsif.VENDOR_D);
        $('#VENDOR_E').val(data.responsif.VENDOR_E);
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

