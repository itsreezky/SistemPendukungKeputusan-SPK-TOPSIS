### Data yang ready

1. **Kriteria dan Bobot:**
   - `Harga`, `Kualitas`, `Waktu`, `Kredibilitas`, `Responsif`
   - Bobot: 0.30, 0.33, 0.06, 0.20, 0.10
   - Jenis: `Cost` untuk `Harga`, `Benefit` untuk yang lainnya

2. **Penilaian Vendor:**
   - Vendor A: 0.06761, 0.36554, 0.34617, 0.34856, 0.36607
   - Vendor B: 0.51731, 0.06460, 0.03865, 0.04918, 0.04893
   - Vendor C: 0.06222, 0.30887, 0.36296, 0.36962, 0.36264
   - Vendor D: 0.21051, 0.09177, 0.10404, 0.08381, 0.07814
   - Vendor E: 0.14235, 0.16922, 0.14818, 0.14883, 0.14422

3. **Hasil Normalisasi:**
   - Vendor A: 0.11584, 0.70315, 0.64748, 0.64760, 0.67421
   - Vendor B: 0.88636, 0.12426, 0.07229, 0.09138, 0.09011
   - Vendor C: 0.10661, 0.59415, 0.67888, 0.68671, 0.66788
   - Vendor D: 0.36068, 0.17654, 0.19459, 0.15571, 0.14392
   - Vendor E: 0.24391, 0.32551, 0.27715, 0.27651, 0.26562

### Tabel yang Dibutuhkan

1. **Kriteria:** Menyimpan kriteria dan bobotnya.
2. **Vendor:** Menyimpan nama vendor.
3. **Penilaian Vendor:** Menyimpan penilaian setiap vendor berdasarkan setiap kriteria.
4. **Perbandingan Kriteria:** Menyimpan perbandingan antar kriteria (untuk AHP).
5. **Perbandingan Vendor:** Menyimpan perbandingan antar vendor berdasarkan setiap kriteria (untuk AHP).
6. **Hasil Normalisasi:** Menyimpan hasil normalisasi penilaian vendor.

### Kode Migrasi Lengkap

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_spk_tables extends CI_Migration {

    public function up()
    {
        // Membuat tabel kriteria
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'kode_kriteria' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'nama_kriteria' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'jenis' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'bobot' => array(
                'type' => 'FLOAT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('kriteria');

        // Insert data kriteria
        $data_kriteria = array(
            array('kode_kriteria' => 'C1', 'nama_kriteria' => 'Harga', 'jenis' => 'Cost', 'bobot' => 0.30),
            array('kode_kriteria' => 'C2', 'nama_kriteria' => 'Kualitas', 'jenis' => 'Benefit', 'bobot' => 0.33),
            array('kode_kriteria' => 'C3', 'nama_kriteria' => 'Waktu', 'jenis' => 'Benefit', 'bobot' => 0.06),
            array('kode_kriteria' => 'C4', 'nama_kriteria' => 'Kredibilitas', 'jenis' => 'Benefit', 'bobot' => 0.20),
            array('kode_kriteria' => 'C5', 'nama_kriteria' => 'Responsif', 'jenis' => 'Benefit', 'bobot' => 0.10),
        );
        $this->db->insert_batch('kriteria', $data_kriteria);

        // Membuat tabel vendor
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nama_vendor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('vendor');

        // Insert data vendor
        $data_vendor = array(
            array('nama_vendor' => 'Vendor A'),
            array('nama_vendor' => 'Vendor B'),
            array('nama_vendor' => 'Vendor C'),
            array('nama_vendor' => 'Vendor D'),
            array('nama_vendor' => 'Vendor E'),
        );
        $this->db->insert_batch('vendor', $data_vendor);

        // Membuat tabel penilaian vendor
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'id_vendor' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'id_kriteria' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'nilai' => array(
                'type' => 'FLOAT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('penilaian_vendor');

        // Insert data penilaian vendor
        $data_penilaian_vendor = array(
            array('id_vendor' => 1, 'id_kriteria' => 1, 'nilai' => 0.06761),
            array('id_vendor' => 1, 'id_kriteria' => 2, 'nilai' => 0.36554),
            array('id_vendor' => 1, 'id_kriteria' => 3, 'nilai' => 0.34617),
            array('id_vendor' => 1, 'id_kriteria' => 4, 'nilai' => 0.34856),
            array('id_vendor' => 1, 'id_kriteria' => 5, 'nilai' => 0.36607),
            array('id_vendor' => 2, 'id_kriteria' => 1, 'nilai' => 0.51731),
            array('id_vendor' => 2, 'id_kriteria' => 2, 'nilai' => 0.06460),
            array('id_vendor' => 2, 'id_kriteria' => 3, 'nilai' => 0.03865),
            array('id_vendor' => 2, 'id_kriteria' => 4, 'nilai' => 0.04918),
            array('id_vendor' => 2, 'id_kriteria' => 5, 'nilai' => 0.04893),
            array('id_vendor' => 3, 'id_kriteria' => 1, 'nilai' => 0.06222),
            array('id_vendor' => 3, 'id_kriteria' => 2, 'nilai' => 0.30887),
            array('id_vendor' => 3, 'id_kriteria' => 3, 'nilai' => 0.36296),
            array('id_vendor' => 3, 'id_kriteria' => 4, 'nilai' => 0.36962),
            array('id_vendor' => 3, 'id_kriteria' => 5, 'nilai' => 0.36264),
            array('id_vendor' => 4, 'id_kriteria' => 1, 'nilai' => 0.21051),
            array('id_vendor' => 4, 'id_kriteria' => 2, 'nilai' => 0.09177),
            array('id_vendor' => 4, 'id_kriteria' => 3, 'nilai' => 0.10404),
            array('id_vendor' => 4, 'id_kriteria' => 4, 'nilai' => 0.08381),
            array('id_vendor' => 4, 'id_kriteria' => 5, 'nilai' => 0.07814),
            array('

id_vendor' => 5, 'id_kriteria' => 1, 'nilai' => 0.14235),
            array('id_vendor' => 5, 'id_kriteria' => 2, 'nilai' => 0.16922),
            array('id_vendor' => 5, 'id_kriteria' => 3, 'nilai' => 0.14818),
            array('id_vendor' => 5, 'id_kriteria' => 4, 'nilai' => 0.14883),
            array('id_vendor' => 5, 'id_kriteria' => 5, 'nilai' => 0.14422),
        );
        $this->db->insert_batch('penilaian_vendor', $data_penilaian_vendor);

        // Membuat tabel perbandingan kriteria
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'kriteria1' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'kriteria2' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'nilai' => array(
                'type' => 'FLOAT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('perbandingan_kriteria');

        // Insert data perbandingan kriteria (Contoh, data perlu disesuaikan dengan perbandingan sebenarnya)
        $data_perbandingan_kriteria = array(
            array('kriteria1' => 1, 'kriteria2' => 1, 'nilai' => 1),
            array('kriteria1' => 1, 'kriteria2' => 2, 'nilai' => 1/3),
            array('kriteria1' => 1, 'kriteria2' => 3, 'nilai' => 5),
            array('kriteria1' => 1, 'kriteria2' => 4, 'nilai' => 1/7),
            array('kriteria1' => 1, 'kriteria2' => 5, 'nilai' => 1/5),
            // ... tambahkan data lainnya sesuai dengan perbandingan kriteria Anda
        );
        $this->db->insert_batch('perbandingan_kriteria', $data_perbandingan_kriteria);

        // Membuat tabel perbandingan vendor
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'vendor1' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'vendor2' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'kriteria' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'nilai' => array(
                'type' => 'FLOAT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('perbandingan_vendor');

        // Insert data perbandingan vendor (Contoh, data perlu disesuaikan dengan perbandingan sebenarnya)
        $data_perbandingan_vendor = array(
            array('vendor1' => 1, 'vendor2' => 1, 'kriteria' => 1, 'nilai' => 1),
            array('vendor1' => 1, 'vendor2' => 2, 'kriteria' => 1, 'nilai' => 3),
            array('vendor1' => 1, 'vendor2' => 3, 'kriteria' => 1, 'nilai' => 1/5),
            array('vendor1' => 1, 'vendor2' => 4, 'kriteria' => 1, 'nilai' => 7),
            array('vendor1' => 1, 'vendor2' => 5, 'kriteria' => 1, 'nilai' => 5),
            // ... tambahkan data lainnya sesuai dengan perbandingan vendor Anda
        );
        $this->db->insert_batch('perbandingan_vendor', $data_perbandingan_vendor);

        // Membuat tabel hasil normalisasi
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'id_vendor' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'id_kriteria' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'nilai_normalisasi' => array(
                'type' => 'FLOAT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('hasil_normalisasi');

        // Insert data hasil normalisasi
        $data_hasil_normalisasi = array(
            array('id_vendor' => 1, 'id_kriteria' => 1, 'nilai_normalisasi' => 0.11584),
            array('id_vendor' => 1, 'id_kriteria' => 2, 'nilai_normalisasi' => 0.70315),
            array('id_vendor' => 1, 'id_kriteria' => 3, 'nilai_normalisasi' => 0.64748),
            array('id_vendor' => 1, 'id_kriteria' => 4, 'nilai_normalisasi' => 0.64760),
            array('id_vendor' => 1, 'id_kriteria' => 5, 'nilai_normalisasi' => 0.67421),
            array('id_vendor' => 2, 'id_kriteria' => 1, 'nilai_normalisasi' => 0.88636),
            array('id_vendor' => 2, 'id_kriteria' => 2, 'nilai_normalisasi' => 0.12426),
            array('id_vendor' => 2, 'id_kriteria' => 3, 'nilai_normalisasi' => 0.07229),
            array('id_vendor' => 2, 'id_kriteria' => 4, 'nilai_normalisasi' => 0.09138),
            array('id_vendor' => 2, 'id_kriteria' => 5, 'nilai_normalisasi' => 0.09011),
            array('id_vendor' => 3, 'id_kriteria' => 1, 'nilai_normalisasi' => 0.10661),
            array('id_vendor' => 3, 'id_kriteria' => 2, 'nilai_normalisasi' => 0.59415),
            array('id_vendor' => 3, 'id_kriteria' => 3, 'nilai_normalisasi' => 0.67888),
            array('id_vendor' => 3, 'id_kriteria' => 4, 'nilai_normalisasi' => 0.68671),
            array('id_vendor' => 3, 'id_kriteria' => 5, 'nilai_normalisasi' => 0.66788),
            array('id_vendor' => 4, 'id_kriteria' => 1, 'nilai_normalisasi' => 0.36068),
            array('id_vendor' => 4, 'id_kriteria' => 2, 'nilai_normalisasi' => 0.17654),
            array('id_vendor' => 4, 'id_kriteria' => 3, 'nilai_normalisasi' => 0.19459),
            array('id_vendor' => 4, 'id_kriteria' => 4, 'nilai_normalisasi' => 0.15571),
            array('id_vendor' => 4, 'id_kriteria' => 5, 'nilai_normalisasi' => 0.14392),
            array('id_vendor' => 5, 'id_kriteria' => 1, 'nilai_normalisasi' => 0.24391),
            array('id_vendor' => 5, 'id_kriteria' => 2, 'nilai_normalisasi' => 0.32551),
            array('id_vendor' => 5, 'id_kriteria' => 3, 'nilai_normalisasi' => 0.27715),
            array('id_vendor' => 5, 'id_kriteria' => 4, 'nilai_normalisasi' => 0.27651),
            array('id_vendor' => 5, 'id_kriteria' => 5, 'nilai_normalisasi' => 0.26562),
        );
        $this->db->insert_batch('hasil_normalisasi', $data_hasil_normalisasi);
    }

    public function down()
    {
        $this->dbforge->drop_table('kriteria');
        $this->dbforge->drop_table('vendor');
        $this->dbforge->drop_table('penilaian_vendor');
        $this->dbforge->drop_table('perbandingan_kriteria');
        $this->dbforge->drop_table('perbandingan_vendor');
        $this->dbforge->drop_table('hasil_normalisasi');
    }
}

