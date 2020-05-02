<?php

namespace App\Http\Controllers;

use App\Charts\CovidDaerah;
use App\Charts\CovidIndo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function indo(){

        $suspectIndo = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $suspectDataIndo = $suspectIndo;

        // dd($suspectDataIndo);
        $suspectDaerah = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        // $suspectDataDaerah[0];
        $dataDaerah = $suspectDaerah;
        foreach ($dataDaerah as $data) {
            // var_dump($data["attributes"]);
            
        }
        

        $form_counter = 1;

        // dd($suspectDataDaerah);

        $labelSembuh = $suspectDataIndo[0]["sembuh"];
        $labelMeninggal = $suspectDataIndo[0]["meninggal"];
        $labelPositif = $suspectDataIndo[0]["positif"];

        
        $chartIndo = new CovidIndo;


        return view('corona', [
            'labelSembuh' => $labelSembuh,
            'labelMeninggal' => $labelMeninggal,
            'labelPositif' => $labelPositif,
            'dataDaerah' => $dataDaerah,
            'form_counter' => $form_counter,
        ]);
    }

    public function daerah(){

        $suspectDaerah = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspecDataDaerah = $suspectDaerah->flatten(1);
        
        $labelProvinsi = $suspecDataDaerah->pluck('Provinsi');
        $labelPositifDareah = $suspecDataDaerah->pluck('Kasus_Posi');
        $colors = $labelProvinsi->map(function($item){
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chartDaerah = new CovidDaerah;
        $chartDaerah->labels($labelProvinsi);
        $chartDaerah->dataset('Data Kasus Positif di Indonesia', 'doughnut', $labelPositifDareah)->backgroundColor($colors);

        return view('chartProvinsi', [
            'chartDaerah' => $chartDaerah,
        ]);
    }
}
