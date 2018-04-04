<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siem_simrede;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Support\Facades\Auth;
use URL;
use Excel;

/**
 * Class Siem_simredeController.
 *
 * @author  The scaffold-interface created at 2016-12-20 04:11:13pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Siem_simredeController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        $data = Siem_simrede::get()->toArray();
        return Excel::create('siem_simrede', function ($excel) use ($data) {
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

                    $csv_data = new Siem_simrede();

                    $csv_data->codsiem = $data [0];
                    $csv_data->nmaluno = $data [1];
                    $csv_data->nmescola = $data [2];
                    $csv_data->serie = $data [3];
                    $csv_data->simulado = (int) $simu;
                    $csv_data->datacad = (int) $ano;
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
            $siem_simrede = Siem_simrede::where('nmaluno','like','%'.$search.'%')
                ->orderBy('nmaluno')
                ->paginate(10);

            return view('siem_simrede.index',compact('siem_simrede'));

        }
    }



//    {
//        $title = 'Index - siem_simrede';
//        $siem_simrede = Siem_simrede::paginate(6);
//        return view('siem_simrede.index',compact('siem_simrede','title'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - siem_simrede';
        
        return view('siem_simrede.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siem_simrede = new Siem_simrede();

        
        $siem_simrede->codsiem = $request->codsiem;

        
        $siem_simrede->nmaluno = $request->nmaluno;

        
        $siem_simrede->nmescola = $request->nmescola;

        
        $siem_simrede->serie = $request->serie;

        
        $siem_simrede->simulado = $request->simulado;

        
        $siem_simrede->datacad = $request->datacad;

        
        $siem_simrede->nota1 = $request->nota1;

        
        $siem_simrede->nota2 = $request->nota2;

        
        $siem_simrede->nota3 = $request->nota3;

        
        $siem_simrede->nota4 = $request->nota4;

        
        $siem_simrede->nota5 = $request->nota5;

        
        $siem_simrede->nota6 = $request->nota6;

        
        $siem_simrede->nota7 = $request->nota7;

        
        $siem_simrede->nota8 = $request->nota8;

        
        $siem_simrede->nota9 = $request->nota9;

        
        $siem_simrede->nota10 = $request->nota10;

        
        $siem_simrede->nota11 = $request->nota11;

        
        $siem_simrede->nota12 = $request->nota12;

        
        $siem_simrede->nota13 = $request->nota13;

        
        $siem_simrede->nota14 = $request->nota14;

        
        $siem_simrede->nota15 = $request->nota15;

        
        $siem_simrede->nota16 = $request->nota16;

        
        $siem_simrede->nota17 = $request->nota17;

        
        $siem_simrede->nota18 = $request->nota18;

        
        $siem_simrede->nota19 = $request->nota19;

        
        $siem_simrede->nota20 = $request->nota20;

        
        $siem_simrede->situacao = $request->situacao;

        
        
        $siem_simrede->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new siem_simrede has been created !!']);

        return redirect('siem_simrede');
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
        $title = 'Show - siem_simrede';

        if($request->ajax())
        {
            return URL::to('siem_simrede/'.$id);
        }

        $siem_simrede = Siem_simrede::findOrfail($id);
        return view('siem_simrede.show',compact('title','siem_simrede'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - siem_simrede';
        if($request->ajax())
        {
            return URL::to('siem_simrede/'. $id . '/edit');
        }

        
        $siem_simrede = Siem_simrede::findOrfail($id);
        return view('siem_simrede.edit',compact('title','siem_simrede'  ));
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
        $siem_simrede = Siem_simrede::findOrfail($id);
    	
        $siem_simrede->codsiem = $request->codsiem;
        
        $siem_simrede->nmaluno = $request->nmaluno;
        
        $siem_simrede->nmescola = $request->nmescola;
        
        $siem_simrede->serie = $request->serie;
        
        $siem_simrede->simulado = $request->simulado;
        
        $siem_simrede->datacad = $request->datacad;
        
        $siem_simrede->nota1 = $request->nota1;
        
        $siem_simrede->nota2 = $request->nota2;
        
        $siem_simrede->nota3 = $request->nota3;
        
        $siem_simrede->nota4 = $request->nota4;
        
        $siem_simrede->nota5 = $request->nota5;
        
        $siem_simrede->nota6 = $request->nota6;
        
        $siem_simrede->nota7 = $request->nota7;
        
        $siem_simrede->nota8 = $request->nota8;
        
        $siem_simrede->nota9 = $request->nota9;
        
        $siem_simrede->nota10 = $request->nota10;
        
        $siem_simrede->nota11 = $request->nota11;
        
        $siem_simrede->nota12 = $request->nota12;
        
        $siem_simrede->nota13 = $request->nota13;
        
        $siem_simrede->nota14 = $request->nota14;
        
        $siem_simrede->nota15 = $request->nota15;
        
        $siem_simrede->nota16 = $request->nota16;
        
        $siem_simrede->nota17 = $request->nota17;
        
        $siem_simrede->nota18 = $request->nota18;
        
        $siem_simrede->nota19 = $request->nota19;
        
        $siem_simrede->nota20 = $request->nota20;
        
        $siem_simrede->situacao = $request->situacao;
        
        
        $siem_simrede->save();

        return redirect('siem_simrede');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/siem_simrede/'. $id . '/delete');

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
     	$siem_simrede = Siem_simrede::findOrfail($id);
     	$siem_simrede->delete();
        return URL::to('siem_simrede');
    }
}
