<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moodle_simulado;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Support\Facades\Auth;
use URL;
use Excel;

/**
 * Class Moodle_simuladoController.
 *
 * @author  The scaffold-interface created at 2016-12-20 04:11:13pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Moodle_simuladoController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        $data = Moodle_simulado::get()->toArray();
        return Excel::create('moodle_simulados', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel()
    {
        $ano = $_POST["ano"];
        $simu = $_POST["simulado"];
        foreach($_FILES["envsimulado"]["tmp_name"] as $nome_arquivo) {

            $objeto = fopen($nome_arquivo, 'r');

            while(($dados = fgetcsv($objeto, 1000, ",")) !== FALSE){
                $data  = str_replace(",", ".", $dados, $count);

                    $csv_data = new Moodle_simulado();

                    $csv_data->siem_cod = $data [0];
                    $csv_data->aluno = $data [1];
                    $csv_data->escola = $data [2];
                    $csv_data->serie = $data [3];
                    $csv_data->simulado = (int) $simu;
                    $csv_data->cadastro = (int) $ano;
                    $csv_data->nota1 = (float) $data[10];
                    $csv_data->nota2 = (float) $data[11];
                    $csv_data->nota3 = (float) $data[12];
                    $csv_data->nota4 = (float) $data[13];
                    $csv_data->nota5 = (float) $data[14];
                    $csv_data->nota6 = (float) $data[15];
                    $csv_data->nota7 = (float) $data[16];
                    $csv_data->nota8 = (float) $data[17];
                    $csv_data->nota9 = (float) $data[18];
                    $csv_data->nota10 = (float) $data[19];
                    $csv_data->nota11 = (float) $data[20];
                    $csv_data->nota12 = (float) $data[21];
                    $csv_data->nota13 = (float) $data[22];
                    $csv_data->nota14 = (float) $data[23];
                    $csv_data->nota15 = (float) $data[24];
                    $csv_data->nota16 = (float) $data[25];
                    $csv_data->nota17 = (float) $data[26];
                    $csv_data->nota18 = (float) $data[27];
                    $csv_data->nota19 = (float) $data[28];
                    $csv_data->nota20 = (float) $data[29];
                    $csv_data->situacao = $data[5];
                    $csv_data->save();
                }

                //fclose($objeto);
            }
        if(!empty($csv_data)){
            return back()->with('success','Dados inseridos com sucesso.');
        }
    return back()->with('error','Por favor verifique o arquivo, dados não inseridos.');
    }

    public function index()
    {
        if(Auth::user()->name == "Admin")

        {
            $search = \Request::get('search'); //<-- we use global request to get the param of URI
            $moodle_simulados = Moodle_simulado::where('aluno','like','%'.$search.'%')
                ->orderBy('aluno')
                ->paginate(10);

            return view('moodle_simulado.index',compact('moodle_simulados'));

        }
    }



//    {
//        $title = 'Index - moodle_simulado';
//        $moodle_simulados = Moodle_simulado::paginate(6);
//        return view('moodle_simulado.index',compact('moodle_simulados','title'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - moodle_simulado';
        
        return view('moodle_simulado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moodle_simulado = new Moodle_simulado();

        
        $moodle_simulado->siem_cod = $request->siem_cod;

        
        $moodle_simulado->aluno = $request->aluno;

        
        $moodle_simulado->escola = $request->escola;

        
        $moodle_simulado->serie = $request->serie;

        
        $moodle_simulado->simulado = $request->simulado;

        
        $moodle_simulado->cadastro = $request->cadastro;

        
        $moodle_simulado->nota1 = $request->nota1;

        
        $moodle_simulado->nota2 = $request->nota2;

        
        $moodle_simulado->nota3 = $request->nota3;

        
        $moodle_simulado->nota4 = $request->nota4;

        
        $moodle_simulado->nota5 = $request->nota5;

        
        $moodle_simulado->nota6 = $request->nota6;

        
        $moodle_simulado->nota7 = $request->nota7;

        
        $moodle_simulado->nota8 = $request->nota8;

        
        $moodle_simulado->nota9 = $request->nota9;

        
        $moodle_simulado->nota10 = $request->nota10;

        
        $moodle_simulado->nota11 = $request->nota11;

        
        $moodle_simulado->nota12 = $request->nota12;

        
        $moodle_simulado->nota13 = $request->nota13;

        
        $moodle_simulado->nota14 = $request->nota14;

        
        $moodle_simulado->nota15 = $request->nota15;

        
        $moodle_simulado->nota16 = $request->nota16;

        
        $moodle_simulado->nota17 = $request->nota17;

        
        $moodle_simulado->nota18 = $request->nota18;

        
        $moodle_simulado->nota19 = $request->nota19;

        
        $moodle_simulado->nota20 = $request->nota20;

        
        $moodle_simulado->situacao = $request->situacao;

        
        
        $moodle_simulado->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new moodle_simulado has been created !!']);

        return redirect('moodle_simulado');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - moodle_simulado';

        if($request->ajax())
        {
            return URL::to('moodle_simulado/'.$id);
        }

        $moodle_simulado = Moodle_simulado::findOrfail($id);
        return view('moodle_simulado.show',compact('title','moodle_simulado'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - moodle_simulado';
        if($request->ajax())
        {
            return URL::to('moodle_simulado/'. $id . '/edit');
        }

        
        $moodle_simulado = Moodle_simulado::findOrfail($id);
        return view('moodle_simulado.edit',compact('title','moodle_simulado'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $moodle_simulado = Moodle_simulado::findOrfail($id);
    	
        $moodle_simulado->siem_cod = $request->siem_cod;
        
        $moodle_simulado->aluno = $request->aluno;
        
        $moodle_simulado->escola = $request->escola;
        
        $moodle_simulado->serie = $request->serie;
        
        $moodle_simulado->simulado = $request->simulado;
        
        $moodle_simulado->cadastro = $request->cadastro;
        
        $moodle_simulado->nota1 = $request->nota1;
        
        $moodle_simulado->nota2 = $request->nota2;
        
        $moodle_simulado->nota3 = $request->nota3;
        
        $moodle_simulado->nota4 = $request->nota4;
        
        $moodle_simulado->nota5 = $request->nota5;
        
        $moodle_simulado->nota6 = $request->nota6;
        
        $moodle_simulado->nota7 = $request->nota7;
        
        $moodle_simulado->nota8 = $request->nota8;
        
        $moodle_simulado->nota9 = $request->nota9;
        
        $moodle_simulado->nota10 = $request->nota10;
        
        $moodle_simulado->nota11 = $request->nota11;
        
        $moodle_simulado->nota12 = $request->nota12;
        
        $moodle_simulado->nota13 = $request->nota13;
        
        $moodle_simulado->nota14 = $request->nota14;
        
        $moodle_simulado->nota15 = $request->nota15;
        
        $moodle_simulado->nota16 = $request->nota16;
        
        $moodle_simulado->nota17 = $request->nota17;
        
        $moodle_simulado->nota18 = $request->nota18;
        
        $moodle_simulado->nota19 = $request->nota19;
        
        $moodle_simulado->nota20 = $request->nota20;
        
        $moodle_simulado->situacao = $request->situacao;
        
        
        $moodle_simulado->save();

        return redirect('moodle_simulado');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/moodle_simulado/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$moodle_simulado = Moodle_simulado::findOrfail($id);
     	$moodle_simulado->delete();
        return URL::to('moodle_simulado');
    }
}
