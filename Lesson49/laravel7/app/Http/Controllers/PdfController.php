<?php
namespace App\Http\Controllers;

class PdfController extends Controller {

    public function index() {

      
        $mpdf = new \Mpdf\Mpdf(); // dependency 
        
        $mpdf->WriteHTML('<h1>'.request('user-input').'</h1>');
        $mpdf->Output();
    }
}