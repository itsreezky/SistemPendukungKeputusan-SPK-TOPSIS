
    <!-- MATRIKS KRITERIA -->
    <h2 class="main-title">Data Matriks Perbandingan</h2>
    <h4> Matriks Kriteria </h4>
    <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                <button class="btn btn-info btnEdit mt-3 mb-3">Normalisasi Data</button>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Harga</th>
                    <th>Kualitas</th>
                    <th>Waktu</th>
                    <th>Kredibilitas</th>
                    <th>Responsif</th>
                  </tr>
                </thead>
                <tbody id="kriteriaTable">
                  <?php foreach($kriteria as $k): ?>
                  <tr>
                    <td><?= $k['id']; ?></td>
                    <td>
      
                     <?= $k['harga']; ?>
                      
                    </td>
                    <td><?= $k['kualitas']; ?></td>
                    <td><?= $k['waktu']; ?></td>
                    <td><?= $k['kredibilitas']; ?></td>
                    <td><?= $k['responsif']; ?></td>
          
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

    <h4> Matriks Kualitas </h4>
    <div class="users-table table-wrapper">
              <table class="posts-table">
              <button class="btn btn-info btnEdit mt-3 mb-3">Normalisasi Data</button>
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>

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
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>


            <h4> Matriks Harga </h4>
    <div class="users-table table-wrapper">
              <table class="posts-table">
              <button class="btn btn-info btnEdit mt-3 mb-3">Normalisasi Data</button>
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>
                  
                  </tr>
                </thead>
                <tbody id="responsiveTable">
                  <?php foreach($harga as $kr): ?>
                  <tr>
                    <td><?= $kr['id']; ?></td>
                    <td><?= $kr['vendor']; ?></td>
                    <td><?= $kr['alternatif1']; ?></td>
                    <td><?= $kr['alternatif2']; ?></td>
                    <td><?= $kr['alternatif3']; ?></td>
                    <td><?= $kr['alternatif4']; ?></td>
                    <td><?= $kr['alternatif5']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>


    <h4> Matriks Kredibilitas </h4>
    <div class="users-table table-wrapper">
              <table class="posts-table">
              <button class="btn btn-info btnEdit mt-3 mb-3">Normalisasi Data</button>
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>
                   
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
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

    
            
            <h4> Matriks Waktu </h4>
    <div class="users-table table-wrapper">
              <table class="posts-table">
              <button class="btn btn-info btnEdit mt-3 mb-3">Normalisasi Data</button>
                <thead>
                  <tr class="users-table-info">
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>
                 
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
                    <td><?= $k['alternatif4']; ?></td>
                    <td><?= $wk['alternatif5']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

