<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PdfProduct;

class PdfProductUploadsController extends Controller
{
    //
    public function index(){
        echo 'Hello World.';

        $pdf_products = PdfProduct::all();

        dump($pdf_products);

        return View('pdf_product')->with('pdf_products',$pdf_products);
    }
}
