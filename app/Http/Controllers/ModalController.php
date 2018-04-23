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
    public function modalAlunos()

    {
        $siems = Siem::all()->pluck('nome','siem');

        return view('modal.modalAlunos',compact('siems'));
    }

    public function modalGabarito()
    
        {
            $siems = Siem::all()->pluck('nome','siem');
    
            // $title = 'modalMediaEscola - modal';
            return view('modal.modalGabarito',compact('siems'));
        }

    public function modalMediaRede()
    
        {
            $siems = Siem::all()->pluck('nome','siem');
    
            // $title = 'modalMediaEscola - modal';
            return view('modal.modalMediaRede',compact('siems'));
        }    

    public function modalMediaEscola()
    
        {
            $siems = Siem::all()->pluck('nome','siem');
    
            // $title = 'modalMediaEscola - modal';
            return view('modal.modalMediaEscola',compact('siems'));
        }

    public function modalMediaTurma()
        
            {
                $siems = Siem::all()->pluck('nome','siem');
        
                // $title = 'modalMediaEscola - modal';
                return view('modal.modalMediaTurma',compact('siems'));
            }        

     public function modalMediaAluno()

    {
        $siems = Siem::all()->pluck('nome','siem');

        // $title = 'modalMediaEscola - modal';
        return view('modal.modalMediaAluno',compact('siems'));
    }


// Funções Relatórios Simulados

    public function simulado_lista_alunos_report()
    {
    return view('phpreport.simOnLineAlunos');
    }

    public function simulado_rede_report()
    {
        return view('phpreport.simOnLineMediaQuestoesPorRede');
    }

    public function simulado_escola_report()
    {
        return view('phpreport.simOnLineMediaQuestoesPorEscolas');
    }

    public function simulado_turma_report()
    {
        return view("phpreport.simOnLineMediaQuestoesPorTurmas");
    }

    public function simulado_aluno_report()
    {
        return view("phpreport.simOnLineMediaAlunos");
    }

    public function simulado_gabarito_report()
    {
        return view("phpreport.simOnLineGabaritos");
    }
}