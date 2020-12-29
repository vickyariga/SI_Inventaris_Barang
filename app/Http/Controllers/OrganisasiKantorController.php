<?php

namespace App\Http\Controllers;

use App\Kantor;
use App\Opd;
use Illuminate\Http\Request;

class OrganisasiKantorController extends Controller
{
    public function index($id)
    {
        $kantors = Opd::find($id)->kantors;

        return view('kantor' , compact('kantors', 'id'));
    }

    public function show($idOpd, $idKantor)
    {

        $data = Kantor::find($idKantor)->barangs;


        return view('barang', compact('data', 'idOpd', 'idKantor'));
    }


}
