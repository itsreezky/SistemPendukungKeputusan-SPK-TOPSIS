<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSpkTables extends Migration
{
    public function up()
    {
        // Membuat tabel kriteria
        $this->forge->addField(array(
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
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('kriteria');

        // Insert data kriteria
        $data_kriteria = array(
            array('kode_kriteria' => 'C1', 'nama_kriteria' => 'Harga', 'jenis' => 'Cost', 'bobot' => 0.30),
            array('kode_kriteria' => 'C2', 'nama_kriteria' => 'Kualitas', 'jenis' => 'Benefit', 'bobot' => 0.33),
            array('kode_kriteria' => 'C3', 'nama_kriteria' => 'Waktu', 'jenis' => 'Benefit', 'bobot' => 0.06),
            array('kode_kriteria' => 'C4', 'nama_kriteria' => 'Kredibilitas', 'jenis' => 'Benefit', 'bobot' => 0.20),
            array('kode_kriteria' => 'C5', 'nama_kriteria' => 'Responsif', 'jenis' => 'Benefit', 'bobot' => 0.10),
        );
        $this->db->table('kriteria')->insertBatch($data_kriteria);

        // Membuat tabel vendor
        $this->forge->addField(array(
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
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('vendor');

        // Insert data vendor
        $data_vendor = array(
            array('nama_vendor' => 'Vendor A'),
            array('nama_vendor' => 'Vendor B'),
            array('nama_vendor' => 'Vendor C'),
            array('nama_vendor' => 'Vendor D'),
            array('nama_vendor' => 'Vendor E'),
        );
        $this->db->table('vendor')->insertBatch($data_vendor);

        // Membuat tabel penilaian vendor
        $this->forge->addField(array(
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
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('penilaian_vendor');

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
            array('id_vendor' => 5, 'id_kriteria' => 1, 'nilai' => 0.14235),
            array('id_vendor' => 5, 'id_kriteria' => 2, 'nilai' => 0.16922),
            array('id_vendor' => 5, 'id_kriteria' => 3, 'nilai' => 0.14818),
            array('id_vendor' => 5, 'id_kriteria' => 4, 'nilai' => 0.14883),
            array('id_vendor' => 5, 'id_kriteria' => 5, 'nilai' => 0.14422),
        );
        $this->db->table('penilaian_vendor')->insertBatch($data_penilaian_vendor);
            // Membuat tabel perbandingan kriteria
    $this->forge->addField(array(
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
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('perbandingan_kriteria');

    // Insert data perbandingan kriteria (Contoh, data perlu disesuaikan dengan perbandingan sebenarnya)
    $data_perbandingan_kriteria = array(
        array('kriteria1' => 1, 'kriteria2' => 1, 'nilai' => 1),
        array('kriteria1' => 1, 'kriteria2' => 2, 'nilai' => 1/3),
        array('kriteria1' => 1, 'kriteria2' => 3, 'nilai' => 5),
        array('kriteria1' => 1, 'kriteria2' => 4, 'nilai' => 1/7),
        array('kriteria1' => 1, 'kriteria2' => 5, 'nilai' => 1/5),
        // ... tambahkan data lainnya sesuai dengan perbandingan kriteria Anda
    );
    $this->db->table('perbandingan_kriteria')->insertBatch($data_perbandingan_kriteria);

    // Membuat tabel perbandingan vendor
    $this->forge->addField(array(
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
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('perbandingan_vendor');

    // Insert data perbandingan vendor (Contoh, data perlu disesuaikan dengan perbandingan sebenarnya)
    $data_perbandingan_vendor = array(
        array('vendor1' => 1, 'vendor2' => 1, 'kriteria' => 1, 'nilai' => 1),
        array('vendor1' => 1, 'vendor2' => 2, 'kriteria' => 1, 'nilai' => 3),
        array('vendor1' => 1, 'vendor2' => 3, 'kriteria' => 1, 'nilai' => 1/5),
        array('vendor1' => 1, 'vendor2' => 4, 'kriteria' => 1, 'nilai' => 7),
        array('vendor1' => 1, 'vendor2' => 5, 'kriteria' => 1, 'nilai' => 5),
        // ... tambahkan data lainnya sesuai dengan perbandingan vendor Anda
    );
    $this->db->table('perbandingan_vendor')->insertBatch($data_perbandingan_vendor);

    // Membuat tabel hasil normalisasi
    $this->forge->addField(array(
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
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('hasil_normalisasi');

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
        $this->db->table('hasil_normalisasi')->insertBatch($data_hasil_normalisasi);
        }
        public function down()
{
    $this->forge->dropTable('kriteria');
    $this->forge->dropTable('vendor');
    $this->forge->dropTable('penilaian_vendor');
    $this->forge->dropTable('perbandingan_kriteria');
    $this->forge->dropTable('perbandingan_vendor');
    $this->forge->dropTable('hasil_normalisasi');
}
}