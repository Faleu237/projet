<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
//use DB;

class DynamicPDFController extends Controller
{
    function index()
    {
        //$fiche_technique = $this->get_fiche_technique();
        //return view('dynamic_pdf')-> with('fiche_technique', $fiche_technique);
    }

    function get_customer_data()
    {
      /*  $fiche_technique() = DB::table('fiche_technique')
                            ->limit(10)
                            ->get();
        return get_fiche_technique;*/
    }

    function gen()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>fiche technique pdf</h1>');
        return $pdf->stream();
    }
}
