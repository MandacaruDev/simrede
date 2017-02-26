<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modal;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Anulada;
use App\Ocupacao;
use App\Pessoa;
use App\Siem;
use App\User;


/**
 * Class ModalController.
 *
 * @author  The scaffold-interface created at 2016-12-26 09:23:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function modalSimuladoEscola()

    {
        $siems = Siem::all()->pluck('nome','siem');

        // $title = 'ModalSimuladoEscola - modal';
        return view('modal.modalSimuladoEscola',compact('siems'));
    }

     public function modalSimuladoTurma()

    {
        $siems = Siem::all()->pluck('nome','siem');

        // $title = 'ModalSimuladoEscola - modal';
        return view('modal.modalSimuladoTurma',compact('siems'));
    }


        // Funções Relatórios Simulados
    public function simulado_escola_report()
    {
        return view('phpreport.SimuladosRelGeralEscolaDetalhado');
    }

    public function simulado_turma_report()
    {
        return view("phpreport.SimuladosRelGeralAlunoDetalhado");
    }

}