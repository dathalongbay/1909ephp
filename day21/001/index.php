<?php
/**
 * Bước 1 nạp tất cả các file chứa các class
 * include_once , include , require , require_once
 * include_once "đường dẫn file";
 */
include_once "Excel/import.php";
include_once "Excel/export.php";
include_once "Traits/momo.php";
include_once "Traits/napas.php";
include_once "Utilities/Payment/payment.php";
include_once "Utilities/Paypal/paypal.php";
include_once "Utilities/Pdf/pdf.php";



/**
 * Tiến hành khởi tạo 5 đối tượng từ các class Payment, Paypal , Pdf , ImportExcel,
 * ExportExcel
 * và gọi method demo() trong các class này
 * Bước 2 :
 * vào trong class Payment
 * và nạp các trait Momo và Napas vào class Payment
 * cuối cùng hãy dùng chính đối tượng payment khởi tạo từ class Payment
 * và gọi đến 2 method demoMomo và demoNapas từ đối tượng payment
 */

/**
 * Bước 2 import 5 namespace
 */
use \Excel\ExportExcel;
use \Excel\ImportExcel;
use \Utilities\Payment\Payment;
use \Utilities\Paypal\Paypal;
use \Utilities\Pdf\Pdf;

/**
 * Bước 3 khởi tạo đối tượng
 */
$exportExcel = new ExportExcel();
$importExcel = new ImportExcel();
$payment = new Payment();
$paypal = new Paypal();
$pdf = new Pdf();

/**
 * Bước gọi method demo()
 */
$exportExcel->demo();
$importExcel->demo();
$payment->demo();
$paypal->demo();
$pdf->demo();

$payment->demoMomo();
$payment->demoNapas();




