<?php
require('../fpdf181/fpdf.php');
include ("../config/koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $sql = "SELECT id_transaksi, nama, tanggal, total, status, nama_pencuci FROM transaksi WHERE nama = '$nama'";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) > 0) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);

        $pdf->Cell(0,10,'Laporan Transaksi',0,1,'C');
        $pdf->Ln(10);

        // Header
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,10,'No',1);
        $pdf->Cell(30,10,'Nama',1);
        $pdf->Cell(30,10,'Tanggal',1);
        $pdf->Cell(30,10,'Total',1);
        $pdf->Cell(30,10,'Status',1);
        $pdf->Cell(60,10,'Nama Pencuci',1);
        $pdf->Ln();

        // Data
        $pdf->SetFont('Arial','',10);
        $nomor = 1;
        while($data = mysql_fetch_array($result)){
            $pdf->Cell(10,10,$nomor++,1);
            $pdf->Cell(30,10,$data['nama'],1);
            $pdf->Cell(30,10,$data['tanggal'],1);
            $pdf->Cell(30,10,$data['total'],1);
            $pdf->Cell(30,10,$data['status'],1);
            $pdf->Cell(60,10,$data['nama_pencuci'],1);
            $pdf->Ln();
        }

        $pdf->Output();
    } else {
        echo 'Data not found!';
        echo mysql_error();
    }
} else {
    echo 'Data yang diinputkan salah!';
}
?>
