<h2 class="main-title">Data Alternatif</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlternatif">Tambah Alternatif</button>
    <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Nama Alternatif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="alternatifTable">
                  <?php foreach($alternatif as $a): ?>
                  <tr>
                    <td><?= $a['id']; ?></td>
                    <td>
      
                     <?= $a['Nama_Alternatif']; ?>
                      
                    </td>
                    <td>
                        <button class="btn btn-warning btnEdit" data-id="<?= $a['id']; ?>">Edit</button>
                        <button class="btn btn-danger btnDelete" data-id="<?= $a['id']; ?>">Hapus</button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
<!-- Modal -->
<div class="modal fade" id="modalAlternatif" tabindex="-1" aria-labelledby="modalAlternatifLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAlternatifLabel">Form Alternatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formAlternatif">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="Nama_Alternatif" class="form-label">Nama Alternatif</label>
                        <input type="text" class="form-control" id="Nama_Alternatif" name="Nama_Alternatif" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Alternatif</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Add or update Alternatif
    $('#formAlternatif').submit(function(e) {
        e.preventDefault();
        let id = $('#id').val();
        let url = id ? '<?= base_url('function/alternatif/update'); ?>' : '<?= base_url('function/alternatif/save'); ?>';
        $.ajax({
            url: url,
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#modalAlternatif').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000
                });
                loadAlternatif();
                $('#id').val('');
                $('#formAlternatif')[0].reset();
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

    // Edit Alternatif
    $(document).on('click', '.btnEdit', function() {
        let id = $(this).data('id');
        $.get('<?= base_url('function/alternatif'); ?>/' + id, function(data) {
            $('#id').val(data.id);
            $('#Nama_Alternatif').val(data.Nama_Alternatif);
            $('#modalAlternatif').modal('show');
        });
    });

    // Delete Alternatif
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
                $.post('<?= base_url('function/alternatif/delete'); ?>', {id: id}, function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    loadAlternatif();

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

    // Load Alternatif data
    function loadAlternatif() {
        $.get('<?= base_url('function/alternatif'); ?>', function(data) {
            $('#alternatifTable').html($(data).find('#alternatifTable').html());
        });
    }
});
</script>

