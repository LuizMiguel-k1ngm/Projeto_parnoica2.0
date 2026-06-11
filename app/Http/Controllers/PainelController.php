<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function painel_colaborador()
    {
        return view('painel_colaborador');
    }


    // CONSULTAS

    public function cliente()
    {
        return view('consulta.consulta_cliente');
    }


    public function colaborador()
    {
        return view('consulta.consulta_colaborador');
    }


   public function frigobar()
    {
        return view('consulta.consulta_frigobar');
    }

      public function acomodacao()
    {
        return view('consulta.consulta_acomodacao');
    }

   


}
