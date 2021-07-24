<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\JenisKasusModel;
use App\Model\KriminalitasModel;
use App\Model\LakalintasModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index()
    {
        $date = Carbon::now()->toDateString();
        $whereCuras = JenisKasusModel::where('j_kasus', 'curas')->value('id');
        $whereCuranmor = JenisKasusModel::where('j_kasus', 'curanmor')->value('id');
        $data = array(
            'lakalintas' => LakalintasModel::count(),
            'curas' => KriminalitasModel::where('j_kasus_id', $whereCuras)->count(),
            'curanmor' => KriminalitasModel::where('j_kasus_id', $whereCuranmor)->count(),
            'today' => KriminalitasModel::where('created_at', $date)->count()
        );
        return view('pages.Dashboard')->with('data', $data);
    }
}
