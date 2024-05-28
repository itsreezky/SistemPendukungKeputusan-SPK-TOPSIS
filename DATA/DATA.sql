CREATE TABLE kriteria (
    No INT,
    Kode_Kriteria VARCHAR(2),
    Nama_Kriteria VARCHAR(20),
    Jenis VARCHAR(10)
);
INSERT INTO kriteria (id, Kode_Kriteria, Nama_Kriteria, Jenis)
VALUES (1, 'C1', 'Harga', 'Cost'),
    (2, 'C2', 'Kualitas', 'Benefit'),
    (3, 'C3', 'Waktu', 'Benefit'),
    (4, 'C4', 'Kredibilitas', 'Benefit'),
    (5, 'C5', 'Responsif', 'Benefit');

CREATE TABLE nama_alternatif (
  Nama_Alternatif VARCHAR(20)
);

INSERT INTO nama_alternatif (Nama_Alternatif)
VALUES 
  ('Vendor A'),
  ('Vendor B'),
  ('Vendor C'),
  ('Vendor D'),
  ('Vendor E');


CREATE TABLE matriks_perbandingan_kriteria (
    Kriteria1 VARCHAR(20),
    Kriteria2 VARCHAR(20),
    Nilai DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_kriteria (Kriteria1, Kriteria2, Nilai)
VALUES ('Harga', 'Harga', 1.00),
    ('Harga', 'Kualitas', 1.00),
    ('Harga', 'Waktu', 5.00),
    ('Harga', 'Kredibilitas', 1.00),
    ('Harga', 'Responsif', 5.00),
    ('Kualitas', 'Harga', 1.00),
    ('Kualitas', 'Kualitas', 1.00),
    ('Kualitas', 'Waktu', 3.00),
    ('Kualitas', 'Kredibilitas', 3.00),
    ('Kualitas', 'Responsif', 4.00),
    ('Waktu', 'Harga', 0.20),
    ('Waktu', 'Kualitas', 0.33),
    ('Waktu', 'Waktu', 1.00),
    ('Waktu', 'Kredibilitas', 0.33),
    ('Waktu', 'Responsif', 0.33),
    ('Kredibilitas', 'Harga', 1.00),
    ('Kredibilitas', 'Kualitas', 0.33),
    ('Kredibilitas', 'Waktu', 3.00),
    ('Kredibilitas', 'Kredibilitas', 1.00),
    ('Kredibilitas', 'Responsif', 3.00),
    ('Responsif', 'Harga', 0.20),
    ('Responsif', 'Kualitas', 0.25),
    ('Responsif', 'Waktu', 3.00),
    ('Responsif', 'Kredibilitas', 0.33),
    ('Responsif', 'Responsif', 1.00);
CREATE TABLE matriks_perbandingan_harga (
    Harga VARCHAR(20),
    Vendor_A DECIMAL(5, 2),
    Vendor_B DECIMAL(5, 2),
    Vendor_C DECIMAL(5, 2),
    Vendor_D DECIMAL(5, 2),
    Vendor_E DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_harga (
        Harga,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E
    )
VALUES ('Vendor_A', 1.00, 0.20, 1.00, 0.33, 0.33),
    ('Vendor_B', 5.00, 1.00, 9.00, 5.00, 3.00),
    ('Vendor_C', 1.00, 0.11, 1.00, 0.33, 0.50);
CREATE TABLE matriks_perbandingan_kualitas (
    Kualitas VARCHAR(20),
    Vendor_A DECIMAL(5, 2),
    Vendor_B DECIMAL(5, 2),
    Vendor_C DECIMAL(5, 2),
    Vendor_D DECIMAL(5, 2),
    Vendor_E DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_kualitas (
        Kualitas,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E
    )
VALUES ('Vendor_A', 1.00, 5.00, 1.00, 5.00, 3.00),
    ('Vendor_B', 0.20, 1.00, 0.33, 0.33, 0.33),
    ('Vendor_C', 1.00, 3.00, 1.00, 5.00, 2.00),
    ('Vendor_D', 0.20, 3.00, 0.20, 1.00, 0.33),
    ('Vendor_E', 0.33, 3.00, 0.50, 3.00, 1.00);
CREATE TABLE matriks_perbandingan_waktu (
    Waktu VARCHAR(20),
    Vendor_A DECIMAL(5, 2),
    Vendor_B DECIMAL(5, 2),
    Vendor_C DECIMAL(5, 2),
    Vendor_D DECIMAL(5, 2),
    Vendor_E DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_waktu (
        Waktu,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E
    )
VALUES ('Vendor_A', 1.00, 9.00, 1.00, 3.00, 3.00),
    ('Vendor_B', 0.11, 1.00, 0.14, 0.20, 0.33),
    ('Vendor_C', 1.00, 7.00, 1.00, 5.00, 3.00),
    ('Vendor_D', 0.33, 5.00, 0.20, 1.00, 0.33),
    ('Vendor_E', 0.33, 3.00, 0.33, 3.00, 1.00);
CREATE TABLE matriks_perbandingan_kredibilitas (
    Kredibilitas VARCHAR(20),
    Vendor_A DECIMAL(5, 2),
    Vendor_B DECIMAL(5, 2),
    Vendor_C DECIMAL(5, 2),
    Vendor_D DECIMAL(5, 2),
    Vendor_E DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_kredibilitas (
        Kredibilitas,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E
    )
VALUES ('Vendor_A', 1.00, 5.00, 1.00, 5.00, 3.00),
    ('Vendor_B', 0.20, 1.00, 0.14, 0.33, 0.33),
    ('Vendor_C', 1.00, 7.00, 1.00, 5.00, 3.00),
    ('Vendor_D', 0.20, 3.00, 0.20, 1.00, 0.33),
    ('Vendor_E', 0.33, 3.00, 0.33, 3.00, 1.00);
CREATE TABLE matriks_perbandingan_responsif (
    Responsif VARCHAR(20),
    Vendor_A DECIMAL(5, 2),
    Vendor_B DECIMAL(5, 2),
    Vendor_C DECIMAL(5, 2),
    Vendor_D DECIMAL(5, 2),
    Vendor_E DECIMAL(5, 2)
);
INSERT INTO matriks_perbandingan_responsif (
        Responsif,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E
    )
VALUES ('Vendor_A', 1.00, 5.00, 1.00, 7.00, 3.00),
    ('Vendor_B', 0.20, 1.00, 0.14, 0.33, 0.33),
    ('Vendor_C', 1.00, 7.00, 1.00, 5.00, 3.00),
    ('Vendor_D', 0.14, 3.00, 0.20, 1.00, 0.33),
    ('Vendor_E', 0.33, 3.00, 0.33, 3.00, 1.00);
CREATE TABLE hasil_matriks_skor_alternatif (
    Vendor VARCHAR(20),
    Harga DECIMAL(8, 5),
    Kualitas DECIMAL(8, 5),
    Waktu DECIMAL(8, 5),
    Kredibilitas DECIMAL(8, 5),
    Responsif DECIMAL(8, 5)
);
INSERT INTO hasil_matriks_skor_alternatif (
        Vendor,
        Harga,
        Kualitas,
        Waktu,
        Kredibilitas,
        Responsif
    )
VALUES (
        'VENDOR A',
        0.06761,
        0.36554,
        0.34617,
        0.34856,
        0.36607
    ),
    (
        'VENDOR B',
        0.51731,
        0.06460,
        0.03865,
        0.04918,
        0.04893
    ),
    (
        'VENDOR C',
        0.06222,
        0.30887,
        0.36296,
        0.36962,
        0.36264
    ),
    (
        'VENDOR D',
        0.21051,
        0.09177,
        0.10404,
        0.08381,
        0.07814
    ),
    (
        'VENDOR E',
        0.14235,
        0.16922,
        0.14818,
        0.14883,
        0.14422
    );
CREATE TABLE normalisasi_kriteria (
    Kriteria VARCHAR(20),
    Harga DECIMAL(8, 5),
    Kualitas DECIMAL(8, 5),
    Waktu DECIMAL(8, 5),
    Kredibilitas DECIMAL(8, 5),
    Responsif DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_kriteria (
        Kriteria,
        Harga,
        Kualitas,
        Waktu,
        Kredibilitas,
        Responsif,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Harga',
        0.29,
        0.34,
        0.33,
        0.18,
        0.38,
        1.52,
        0.30,
        1.03
    ),
    (
        'Kualitas',
        0.29,
        0.34,
        0.20,
        0.53,
        0.30,
        1.67,
        0.33,
        0.97
    ),
    (
        'Waktu',
        0.06,
        0.11,
        0.07,
        0.06,
        0.03,
        0.32,
        0.06,
        0.97
    ),
    (
        'Kredibilitas',
        0.29,
        0.11,
        0.20,
        0.18,
        0.23,
        1.01,
        0.20,
        1.14
    ),
    (
        'Responsif',
        0.06,
        0.09,
        0.20,
        0.06,
        0.08,
        0.48,
        0.10,
        1.28
    );
CREATE TABLE normalisasi_harga (
    Harga VARCHAR(20),
    Vendor_A DECIMAL(8, 5),
    Vendor_B DECIMAL(8, 5),
    Vendor_C DECIMAL(8, 5),
    Vendor_D DECIMAL(8, 5),
    Vendor_E DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_harga (
        Harga,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Vendor_A',
        0.08,
        0.11,
        0.06,
        0.05,
        0.04,
        0.34,
        0.07,
        0.88
    ),
    (
        'Vendor_B',
        0.38,
        0.54,
        0.56,
        0.71,
        0.38,
        2.59,
        0.52,
        0.95
    ),
    (
        'Vendor_C',
        0.08,
        0.06,
        0.06,
        0.05,
        0.06,
        0.31,
        0.06,
        1.00
    ),
    (
        'Vendor_D',
        0.23,
        0.11,
        0.19,
        0.14,
        0.38,
        1.05,
        0.21,
        1.47
    ),
    (
        'Vendor_E',
        0.23,
        0.18,
        0.13,
        0.05,
        0.13,
        0.71,
        0.14,
        1.12
    );
CREATE TABLE normalisasi_kualitas (
    Kualitas VARCHAR(20),
    Vendor_A DECIMAL(8, 5),
    Vendor_B DECIMAL(8, 5),
    Vendor_C DECIMAL(8, 5),
    Vendor_D DECIMAL(8, 5),
    Vendor_E DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_kualitas (
        Kualitas,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Vendor_A',
        0.37,
        0.33,
        0.33,
        0.35,
        0.45,
        1.83,
        0.37,
        1.00
    ),
    (
        'Vendor_B',
        0.07,
        0.07,
        0.11,
        0.02,
        0.05,
        0.32,
        0.06,
        0.97
    ),
    (
        'Vendor_C',
        0.37,
        0.20,
        0.33,
        0.35,
        0.30,
        1.54,
        0.31,
        0.94
    ),
    (
        'Vendor_D',
        0.07,
        0.20,
        0.07,
        0.07,
        0.05,
        0.46,
        0.09,
        1.32
    ),
    (
        'Vendor_E',
        0.12,
        0.20,
        0.16,
        0.21,
        0.15,
        0.85,
        0.17,
        1.13
    );
CREATE TABLE normalisasi_waktu (
    Waktu VARCHAR(20),
    Vendor_A DECIMAL(8, 5),
    Vendor_B DECIMAL(8, 5),
    Vendor_C DECIMAL(8, 5),
    Vendor_D DECIMAL(8, 5),
    Vendor_E DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_waktu (
        Waktu,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Vendor_A',
        0.36,
        0.36,
        0.37,
        0.25,
        0.39,
        1.73,
        0.35,
        0.96
    ),
    (
        'Vendor_B',
        0.04,
        0.04,
        0.05,
        0.02,
        0.04,
        0.19,
        0.04,
        0.97
    ),
    (
        'Vendor_C',
        0.36,
        0.28,
        0.37,
        0.41,
        0.39,
        1.81,
        0.36,
        0.97
    ),
    (
        'Vendor_D',
        0.12,
        0.20,
        0.07,
        0.08,
        0.04,
        0.52,
        0.10,
        1.27
    ),
    (
        'Vendor_E',
        0.12,
        0.12,
        0.12,
        0.25,
        0.13,
        0.74,
        0.15,
        1.14
    );
CREATE TABLE normalisasi_kredibilitas (
    Kredibilitas VARCHAR(20),
    Vendor_A DECIMAL(8, 5),
    Vendor_B DECIMAL(8, 5),
    Vendor_C DECIMAL(8, 5),
    Vendor_D DECIMAL(8, 5),
    Vendor_E DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_kredibilitas (
        Kredibilitas,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Vendor_A',
        0.37,
        0.26,
        0.37,
        0.35,
        0.39,
        1.74,
        0.35,
        0.95
    ),
    (
        'Vendor_B',
        0.07,
        0.05,
        0.05,
        0.02,
        0.04,
        0.25,
        0.05,
        0.93
    ),
    (
        'Vendor_C',
        0.37,
        0.37,
        0.37,
        0.35,
        0.39,
        1.85,
        0.37,
        0.99
    ),
    (
        'Vendor_D',
        0.07,
        0.16,
        0.07,
        0.07,
        0.04,
        0.42,
        0.08,
        1.20
    ),
    (
        'Vendor_E',
        0.12,
        0.16,
        0.12,
        0.21,
        0.13,
        0.74,
        0.15,
        1.14
    );
CREATE TABLE normalisasi_responsif (
    Responsif VARCHAR(20),
    Vendor_A DECIMAL(8, 5),
    Vendor_B DECIMAL(8, 5),
    Vendor_C DECIMAL(8, 5),
    Vendor_D DECIMAL(8, 5),
    Vendor_E DECIMAL(8, 5),
    Priority_Vector DECIMAL(8, 5),
    Bobot DECIMAL(8, 5),
    Eigen_Value DECIMAL(8, 5)
);
INSERT INTO normalisasi_responsif (
        Responsif,
        Vendor_A,
        Vendor_B,
        Vendor_C,
        Vendor_D,
        Vendor_E,
        Priority_Vector,
        Bobot,
        Eigen_Value
    )
VALUES (
        'Vendor A',
        0.37,
        0.26,
        0.37,
        0.43,
        0.39,
        1.83,
        0.37,
        0.98
    ),
    (
        'Vendor B',
        0.07,
        0.05,
        0.05,
        0.02,
        0.04,
        0.24,
        0.05,
        0.93
    ),
    (
        'Vendor C',
        0.37,
        0.37,
        0.37,
        0.31,
        0.39,
        1.81,
        0.36,
        0.97
    ),
    (
        'Vendor D',
        0.05,
        0.16,
        0.07,
        0.06,
        0.04,
        0.39,
        0.08,
        1.28
    ),
    (
        'Vendor E',
        0.12,
        0.16,
        0.12,
        0.18,
        0.13,
        0.72,
        0.14,
        1.11
    );
CREATE TABLE random_index (
    Ukuran_Matriks INT,
    Random_Index DECIMAL(5, 2)
);
INSERT INTO random_index (Ukuran_Matriks, Random_Index)
VALUES (1, 0),
    (2, 0),
    (3, 0.58),
    (4, 0.9),
    (5, 1.12),
    (6, 1.24),
    (7, 1.32),
    (8, 1.41),
    (9, 1.45),
    (10, 1.49);