<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsorship;
use App\Models\BeasiswaEksternal;

class EksternalBeasiswaController extends Controller
{
    public function index(){
        $sponsorship = Sponsorship::all();
        $eksternalBeasiswa = BeasiswaEksternal::select('beasiswa-eksternal.*')->paginate(3);
        return view('jenisbeasiswa.eksternal',
        compact ('sponsorship', 'eksternalBeasiswa')
    );
    }
}
