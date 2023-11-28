<?php

namespace App\Http\Controllers;

use App\Http\Requests\PDF\GenerateFromHtmlRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function generateFromHtml(GenerateFromHtmlRequest $request)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($request->html);
        
        return $pdf->stream();
    }
}
