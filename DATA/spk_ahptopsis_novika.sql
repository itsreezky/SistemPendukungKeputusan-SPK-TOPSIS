-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+jammy2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2024 at 04:10 PM
-- Server version: 11.3.2-MariaDB-1:11.3.2+maria~ubu2204
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ahptopsis_novika`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama_alternatif` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama_alternatif`) VALUES
(1, 'VENDOR A'),
(2, 'VENDOR B'),
(3, 'VENDOR C'),
(4, 'VENDOR D'),
(5, 'VENDOR E');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_skor_alternatif`
--

CREATE TABLE `hasil_skor_alternatif` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) DEFAULT NULL,
  `harga` decimal(10,5) DEFAULT NULL,
  `kualitas` decimal(10,5) DEFAULT NULL,
  `waktu` decimal(10,5) DEFAULT NULL,
  `kredibilitas` decimal(10,5) DEFAULT NULL,
  `responsif` decimal(10,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `hasil_skor_alternatif`
--

INSERT INTO `hasil_skor_alternatif` (`id`, `vendor`, `harga`, `kualitas`, `waktu`, `kredibilitas`, `responsif`) VALUES
(1, 'VENDOR A', 0.06761, 0.36554, 0.34617, 0.34856, 0.36607),
(2, 'VENDOR B', 0.51731, 0.06460, 0.03865, 0.04918, 0.04893),
(3, 'VENDOR C', 0.06222, 0.30887, 0.36296, 0.36962, 0.36264),
(4, 'VENDOR D', 0.21051, 0.09177, 0.10404, 0.08381, 0.07814),
(5, 'VENDOR E', 0.14235, 0.16922, 0.14818, 0.14883, 0.14422);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `jenis`) VALUES
(1, 'C1', 'Harga', 'Cost'),
(2, 'C2', 'Kualitas', 'Benefit'),
(3, 'C3', 'Waktu', 'Benefit'),
(4, 'C4', 'Kredibilitas', 'Benefit'),
(5, 'C5', 'Responsif', 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_harga`
--

CREATE TABLE `matriks_perbandingan_harga` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_harga`
--

INSERT INTO `matriks_perbandingan_harga` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`) VALUES
(1, 'VENDOR_A', 1.00, 0.20, 1.00, 0.33, 0.33),
(2, 'VENDOR_B', 5.00, 1.00, 9.00, 5.00, 3.00),
(3, 'VENDOR_C', 1.00, 0.11, 1.00, 0.33, 0.50),
(4, 'VENDOR_D', 3.00, 0.20, 3.00, 1.00, 3.00),
(5, 'VENDOR_E', 3.00, 0.33, 2.00, 0.33, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_kredibilitas`
--

CREATE TABLE `matriks_perbandingan_kredibilitas` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_kredibilitas`
--

INSERT INTO `matriks_perbandingan_kredibilitas` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`) VALUES
(1, 'VENDOR_A', 1.00, 5.00, 1.00, 5.00, 3.00),
(2, 'VENDOR_B', 0.20, 1.00, 0.14, 0.33, 0.33),
(3, 'VENDOR_C', 1.00, 7.00, 1.00, 5.00, 3.00),
(4, 'VENDOR_D', 0.20, 3.00, 0.20, 1.00, 0.33),
(5, 'VENDOR_E', 0.33, 3.00, 0.33, 3.00, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_kriteria`
--

CREATE TABLE `matriks_perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `kualitas` decimal(10,2) DEFAULT NULL,
  `waktu` decimal(10,2) DEFAULT NULL,
  `kredibilitas` decimal(10,2) DEFAULT NULL,
  `responsif` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_kriteria`
--

INSERT INTO `matriks_perbandingan_kriteria` (`id`, `nama_kriteria`, `harga`, `kualitas`, `waktu`, `kredibilitas`, `responsif`) VALUES
(1, 'Harga', 1.00, 1.00, 5.00, 1.00, 5.00),
(2, 'Kualitas', 1.00, 1.00, 3.00, 3.00, 4.00),
(3, 'Waktu', 0.20, 0.33, 1.00, 0.33, 0.33),
(4, 'Kredibilitas', 1.00, 0.33, 3.00, 1.00, 3.00),
(5, 'Responsif', 0.20, 0.25, 3.00, 0.33, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_kualitas`
--

CREATE TABLE `matriks_perbandingan_kualitas` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_kualitas`
--

INSERT INTO `matriks_perbandingan_kualitas` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`) VALUES
(1, 'VENDOR_A', 1.00, 0.20, 1.00, 0.33, 0.33),
(2, 'VENDOR_B', 5.00, 1.00, 9.00, 5.00, 3.00),
(3, 'VENDOR_C', 1.00, 0.11, 1.00, 0.33, 0.50),
(4, 'VENDOR_D', 3.00, 0.20, 3.00, 1.00, 3.00),
(5, 'VENDOR_E', 3.00, 0.33, 2.00, 0.33, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_responsif`
--

CREATE TABLE `matriks_perbandingan_responsif` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_responsif`
--

INSERT INTO `matriks_perbandingan_responsif` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`) VALUES
(1, 'VENDOR_A', 1.00, 5.00, 1.00, 7.00, 3.00),
(2, 'VENDOR_B', 0.20, 1.00, 0.14, 0.33, 0.33),
(3, 'VENDOR_C', 1.00, 7.00, 1.00, 5.00, 3.00),
(4, 'VENDOR_D', 0.14, 3.00, 0.20, 1.00, 0.33),
(5, 'VENDOR_E', 0.33, 3.00, 0.33, 3.00, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_perbandingan_waktu`
--

CREATE TABLE `matriks_perbandingan_waktu` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `matriks_perbandingan_waktu`
--

INSERT INTO `matriks_perbandingan_waktu` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`) VALUES
(1, 'VENDOR_A', 1.00, 9.00, 1.00, 3.00, 3.00),
(2, 'VENDOR_B', 0.11, 1.00, 0.14, 0.20, 0.50),
(3, 'VENDOR_C', 1.00, 7.00, 1.00, 5.00, 3.00),
(4, 'VENDOR_D', 0.33, 5.00, 0.20, 1.00, 0.50),
(5, 'VENDOR_E', 0.33, 2.00, 0.33, 2.00, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_harga`
--

CREATE TABLE `normalisasi_harga` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_harga`
--

INSERT INTO `normalisasi_harga` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'VENDOR A', 0.08, 0.11, 0.06, 0.05, 0.04, 0.34, 0.07, 0.88, 5.42, 0.10, 1.12, 0.09, 'KONSISTEN'),
(2, 'VENDOR B', 0.38, 0.54, 0.56, 0.71, 0.38, 2.59, 0.52, 0.95, 5.42, 0.10, 1.12, 0.09, 'KONSISTEN'),
(3, 'VENDOR C', 0.08, 0.06, 0.06, 0.05, 0.06, 0.31, 0.06, 1.00, 5.42, 0.10, 1.12, 0.09, 'KONSISTEN'),
(4, 'VENDOR D', 0.23, 0.11, 0.19, 0.14, 0.38, 1.05, 0.21, 1.47, 5.42, 0.10, 1.12, 0.09, 'KONSISTEN'),
(5, 'VENDOR E', 0.23, 0.18, 0.13, 0.05, 0.13, 0.71, 0.14, 1.12, 5.42, 0.10, 1.12, 0.09, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_kredibilitas`
--

CREATE TABLE `normalisasi_kredibilitas` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_kredibilitas`
--

INSERT INTO `normalisasi_kredibilitas` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'VENDOR A', 0.37, 0.26, 0.37, 0.35, 0.39, 1.74, 0.35, 0.95, 5.22, 0.05, 1.12, 0.05, 'KONSISTEN'),
(2, 'VENDOR B', 0.07, 0.05, 0.05, 0.02, 0.04, 0.25, 0.05, 0.93, 5.22, 0.05, 1.12, 0.05, 'KONSISTEN'),
(3, 'VENDOR C', 0.37, 0.37, 0.37, 0.35, 0.39, 1.85, 0.37, 0.99, 5.22, 0.05, 1.12, 0.05, 'KONSISTEN'),
(4, 'VENDOR D', 0.07, 0.16, 0.07, 0.07, 0.04, 0.42, 0.08, 1.20, 5.22, 0.05, 1.12, 0.05, 'KONSISTEN'),
(5, 'VENDOR E', 0.12, 0.16, 0.12, 0.21, 0.13, 0.74, 0.15, 1.14, 5.22, 0.05, 1.12, 0.05, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_kriteria`
--

CREATE TABLE `normalisasi_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `kualitas` decimal(10,2) DEFAULT NULL,
  `waktu` decimal(10,2) DEFAULT NULL,
  `kredibilitas` decimal(10,2) DEFAULT NULL,
  `responsif` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_kriteria`
--

INSERT INTO `normalisasi_kriteria` (`id`, `kriteria`, `harga`, `kualitas`, `waktu`, `kredibilitas`, `responsif`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'Harga', 0.29, 0.34, 0.33, 0.18, 0.38, 1.52, 0.30, 1.03, 5.40, 0.10, 1.12, 0.09, 'KONSISTEN'),
(2, 'Kualitas', 0.29, 0.34, 0.20, 0.53, 0.30, 1.67, 0.33, 0.97, 5.40, 0.10, 1.12, 0.09, 'KONSISTEN'),
(3, 'Waktu', 0.06, 0.11, 0.07, 0.06, 0.03, 0.32, 0.06, 0.97, 5.40, 0.10, 1.12, 0.09, 'KONSISTEN'),
(4, 'Kredibilitas', 0.29, 0.11, 0.20, 0.18, 0.23, 1.01, 0.20, 1.14, 5.40, 0.10, 1.12, 0.09, 'KONSISTEN'),
(5, 'Responsif', 0.06, 0.09, 0.20, 0.06, 0.08, 0.48, 0.10, 1.28, 5.40, 0.10, 1.12, 0.09, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_kualitas`
--

CREATE TABLE `normalisasi_kualitas` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_kualitas`
--

INSERT INTO `normalisasi_kualitas` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'VENDOR A', 0.37, 0.33, 0.33, 0.35, 0.45, 1.83, 0.37, 1.00, 5.35, 0.09, 1.12, 0.08, 'KONSISTEN'),
(2, 'VENDOR B', 0.07, 0.07, 0.11, 0.02, 0.05, 0.32, 0.06, 0.97, 5.35, 0.09, 1.12, 0.08, 'KONSISTEN'),
(3, 'VENDOR C', 0.37, 0.20, 0.33, 0.35, 0.30, 1.54, 0.31, 0.94, 5.35, 0.09, 1.12, 0.08, 'KONSISTEN'),
(4, 'VENDOR D', 0.07, 0.20, 0.07, 0.07, 0.05, 0.46, 0.09, 1.32, 5.35, 0.09, 1.12, 0.08, 'KONSISTEN'),
(5, 'VENDOR E', 0.12, 0.20, 0.16, 0.21, 0.15, 0.85, 0.17, 1.13, 5.35, 0.09, 1.12, 0.08, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_responsif`
--

CREATE TABLE `normalisasi_responsif` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_responsif`
--

INSERT INTO `normalisasi_responsif` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'VENDOR A', 0.37, 0.26, 0.37, 0.43, 0.39, 1.83, 0.37, 0.98, 5.26, 0.07, 1.12, 0.06, 'KONSISTEN'),
(2, 'VENDOR B', 0.07, 0.05, 0.05, 0.02, 0.04, 0.24, 0.05, 0.93, 5.26, 0.07, 1.12, 0.06, 'KONSISTEN'),
(3, 'VENDOR C', 0.37, 0.37, 0.37, 0.31, 0.39, 1.81, 0.36, 0.97, 5.26, 0.07, 1.12, 0.06, 'KONSISTEN'),
(4, 'VENDOR D', 0.05, 0.16, 0.07, 0.06, 0.04, 0.39, 0.08, 1.28, 5.26, 0.07, 1.12, 0.06, 'KONSISTEN'),
(5, 'VENDOR E', 0.12, 0.16, 0.12, 0.18, 0.13, 0.72, 0.14, 1.11, 5.26, 0.07, 1.12, 0.06, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_waktu`
--

CREATE TABLE `normalisasi_waktu` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `VENDOR_A` decimal(10,2) DEFAULT NULL,
  `VENDOR_B` decimal(10,2) DEFAULT NULL,
  `VENDOR_C` decimal(10,2) DEFAULT NULL,
  `VENDOR_D` decimal(10,2) DEFAULT NULL,
  `VENDOR_E` decimal(10,2) DEFAULT NULL,
  `priority_vector` decimal(10,2) DEFAULT NULL,
  `bobot` decimal(10,2) DEFAULT NULL,
  `eigen_value` decimal(10,2) DEFAULT NULL,
  `lambda_max` decimal(10,2) DEFAULT NULL,
  `ci` decimal(10,2) DEFAULT NULL,
  `ri` decimal(10,2) DEFAULT NULL,
  `cr` decimal(10,2) DEFAULT NULL,
  `consistency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `normalisasi_waktu`
--

INSERT INTO `normalisasi_waktu` (`id`, `vendor`, `VENDOR_A`, `VENDOR_B`, `VENDOR_C`, `VENDOR_D`, `VENDOR_E`, `priority_vector`, `bobot`, `eigen_value`, `lambda_max`, `ci`, `ri`, `cr`, `consistency`) VALUES
(1, 'VENDOR A', 0.36, 0.36, 0.37, 0.25, 0.39, 1.73, 0.35, 0.96, 5.30, 0.08, 1.12, 0.07, 'KONSISTEN'),
(2, 'VENDOR B', 0.04, 0.04, 0.05, 0.02, 0.04, 0.19, 0.04, 0.97, 5.30, 0.08, 1.12, 0.07, 'KONSISTEN'),
(3, 'VENDOR C', 0.36, 0.28, 0.37, 0.41, 0.39, 1.81, 0.36, 0.97, 5.30, 0.08, 1.12, 0.07, 'KONSISTEN'),
(4, 'VENDOR D', 0.12, 0.20, 0.07, 0.08, 0.04, 0.52, 0.10, 1.27, 5.30, 0.08, 1.12, 0.07, 'KONSISTEN'),
(5, 'VENDOR E', 0.12, 0.12, 0.12, 0.25, 0.13, 0.74, 0.15, 1.14, 5.30, 0.08, 1.12, 0.07, 'KONSISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `topsis_ranking`
--

CREATE TABLE `topsis_ranking` (
  `id` int(11) NOT NULL,
  `vendor` varchar(20) DEFAULT NULL,
  `jarak_ideal_positif` decimal(15,5) DEFAULT NULL,
  `jarak_ideal_negatif` decimal(15,5) DEFAULT NULL,
  `nilai_v` decimal(15,5) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `topsis_ranking`
--

INSERT INTO `topsis_ranking` (`id`, `vendor`, `jarak_ideal_positif`, `jarak_ideal_negatif`, `nilai_v`, `rank`) VALUES
(1, 'Vendor A', 0.00863, 0.33068, 0.97458, 1),
(2, 'Vendor B', 0.33566, 0.00000, 0.00000, 5),
(3, 'Vendor C', 0.03633, 0.31607, 0.89690, 2),
(4, 'Vendor D', 0.22769, 0.16174, 0.41532, 4),
(5, 'Vendor E', 0.16326, 0.21116, 0.56396, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_skor_alternatif`
--
ALTER TABLE `hasil_skor_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_harga`
--
ALTER TABLE `matriks_perbandingan_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_kredibilitas`
--
ALTER TABLE `matriks_perbandingan_kredibilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_kriteria`
--
ALTER TABLE `matriks_perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_kualitas`
--
ALTER TABLE `matriks_perbandingan_kualitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_responsif`
--
ALTER TABLE `matriks_perbandingan_responsif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks_perbandingan_waktu`
--
ALTER TABLE `matriks_perbandingan_waktu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_harga`
--
ALTER TABLE `normalisasi_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_kredibilitas`
--
ALTER TABLE `normalisasi_kredibilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_kriteria`
--
ALTER TABLE `normalisasi_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_kualitas`
--
ALTER TABLE `normalisasi_kualitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_responsif`
--
ALTER TABLE `normalisasi_responsif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi_waktu`
--
ALTER TABLE `normalisasi_waktu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topsis_ranking`
--
ALTER TABLE `topsis_ranking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hasil_skor_alternatif`
--
ALTER TABLE `hasil_skor_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_harga`
--
ALTER TABLE `matriks_perbandingan_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_kredibilitas`
--
ALTER TABLE `matriks_perbandingan_kredibilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_kriteria`
--
ALTER TABLE `matriks_perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_kualitas`
--
ALTER TABLE `matriks_perbandingan_kualitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_responsif`
--
ALTER TABLE `matriks_perbandingan_responsif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matriks_perbandingan_waktu`
--
ALTER TABLE `matriks_perbandingan_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_harga`
--
ALTER TABLE `normalisasi_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_kredibilitas`
--
ALTER TABLE `normalisasi_kredibilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_kriteria`
--
ALTER TABLE `normalisasi_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_kualitas`
--
ALTER TABLE `normalisasi_kualitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_responsif`
--
ALTER TABLE `normalisasi_responsif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `normalisasi_waktu`
--
ALTER TABLE `normalisasi_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topsis_ranking`
--
ALTER TABLE `topsis_ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
