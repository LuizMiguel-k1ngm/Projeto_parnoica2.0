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


    //CADASTRO

       public function cadastro_acesso_colaborador()
    {
        
        return view('cadastro.cadastro_acesso_colaborador');
    }

     public function cadastro_acomodacao()
    {
        
        return view('cadastro.cadastro_acomodacao');
    }

     public function cadastro_colaborador()
    {
        
        return view('cadastro.cadastro_colaborador');
    }

    
     public function cadastro_consumo()
    {
        
        return view('cadastro.cadastro_consumo');
    }

    
     public function cadastro_frigobar()
    {
        
        return view('cadastro.cadastro_frigobar');
    }

    
     public function cadastro_itens()
    {
        
        return view('cadastro.cadastro_itens');
    }



    //RECEPÇÃO


     public function check_in()
    {
        
        return view('recepcao.cadastro_check_in');
    }

    
     public function check_out()
    {
        
        return view('recepcao.cadastro_check_out');
    }

    
     public function cadastro_cliente()
    {
        
        return view('recepcao.cadastro_cliente');
    }

     public function cadastro_reserva()
    {
       
        return view('recepcao.cadastro_reserva');
    }
    

    //RELATORIO

       public function relatorio_financeiro()
    {
       
        return view('relatorio.relatorio_financeiro');
    }
    




    //DASHBORD

       public function dashbord_financeiro()
    {
       
        return view('dashbord.dashbord_financeiro');
    }








   


}
