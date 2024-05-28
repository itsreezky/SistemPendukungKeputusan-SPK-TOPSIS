<h2 class="main-title">Data Kriteria</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKriteria">Tambah Kriteria</button>
    <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="kriteriaTable">
                  <?php foreach($kriteria as $k): ?>
                  <tr>
                    <td><?= $k['id']; ?></td>
                    <td>
      
                     <?= $k['Kode_Kriteria']; ?>
                      
                    </td>
                    <td><?= $k['Nama_Kriteria']; ?></td>
                    <td><?= $k['Jenis']; ?></td>
                    <td>
                        <button class="btn btn-warning btnEdit" data-id="<?= $k['id']; ?>">Edit</button>
                        <button class="btn btn-danger btnDelete" data-id="<?= $k['id']; ?>">Hapus</button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
<!-- Modal -->
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
                        <label for="Kode_Kriteria" class="form-label">Kode Kriteria</label>
                        <input type="text" class="form-control" id="Kode_Kriteria" name="Kode_Kriteria" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nama_Kriteria" class="form-label">Nama Kriteria</label>
                        <input type="text" class="form-control" id="Nama_Kriteria" name="Nama_Kriteria" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select class="form-select" id="Jenis" name="Jenis" required>
                        <option selected>Pilih Jenis Kriteria</option>
                        <option value="Cost">Cost</option>
                        <option value="Benefit">Benefit</option>
                    </select>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Kriteria</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Add or update kriteria
    $('#formKriteria').submit(function(e) {
        e.preventDefault();
        let id = $('#id').val();
        let url = id ? '<?= base_url('function/kriteria/update'); ?>' : '<?= base_url('function/kriteria/save'); ?>';
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

    // Edit kriteria
    $(document).on('click', '.btnEdit', function() {
        let id = $(this).data('id');
        $.get('<?= base_url('function/kriteria'); ?>/' + id, function(data) {
            $('#id').val(data.id);
            $('#Kode_Kriteria').val(data.Kode_Kriteria);
            $('#Nama_Kriteria').val(data.Nama_Kriteria);
            $('#Jenis').val(data.Jenis);
            $('#modalKriteria').modal('show');
        });
    });

    // Delete kriteria
    $(document).on('click', '.btnDelete', function() {
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
                $.post('<?= base_url('function/kriteria/delete'); ?>', {id: id}, function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadKriteria();
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                        text: errorThrown,
                        showConfirmButton: true
                    });
                });
            }
        });
    });

    // Load kriteria data
    function loadKriteria() {
        $.get('<?= base_url('function/kriteria'); ?>', function(data) {
            $('#kriteriaTable').html($(data).find('#kriteriaTable').html());
        });
    }
});
</script>

