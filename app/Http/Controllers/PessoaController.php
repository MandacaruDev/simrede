<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use Auth;


/**
 * Class PessoaController.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:02:11am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PessoaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    /*public function index()
    {
        $pessoas = Pessoa::paginate(6);
        return view('pessoa.index',compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */

    public function index()
        {
            
            $usuario_logado = Auth::user()->name;
 

if($usuario_logado == "Admin") {

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            $pessoas = Pessoa::where('nome','like','%'.$search.'%')
                ->orderBy('nome')
                ->paginate(30);

            return view('pessoa.index',compact('pessoas'));
            
        } else {

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            if ($search == "") {

                
            $pessoas = Pessoa::
                where('vinculo',"Liberado")
                ->orwhere('vinculo',Auth::user()->name)
                ->orderBy('nome')
                ->paginate(5);

            return view('pessoa.index',compact('pessoas'));


            } else {


            $pessoas = Pessoa::where('nome','like','%'.$search.'%')
                ->orwhere('vinculo',"Liberado")
                ->where('vinculo',Auth::user()->name)
                ->orderBy('nome')
                ->paginate(5);

            return view('pessoa.index',compact('pessoas'));
                    }

        }
    }
    public function create()
    {
        
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


// validação de campos do formulário
        // print_r($request->all());
        $this->validate($request,[
         'vinculo'=>'required|max:50',
         'nome'=>'required|max:100',
         'rg'=>'required|unique:pessoas'
        ]);
// Fim validação de campos de formulário


        $pessoa = new Pessoa();

        $pessoa->vinculo = $request->vinculo;


        $pessoa->user_id = $request->user_id;

        
        $pessoa->nome = $request->nome;

        
        $pessoa->cep = $request->cep;

        
        $pessoa->distrito = $request->distrito;

        
        $pessoa->bairro = $request->bairro;

        
        $pessoa->logradouro = $request->logradouro;

        
        $pessoa->numero = $request->numero;

        
        $pessoa->complemento = $request->complemento;

        
        $pessoa->fone = $request->fone;

        
        $pessoa->cel1 = $request->cel1;

        
        $pessoa->cel2 = $request->cel2;

        
        $pessoa->email = $request->email;

        
        $pessoa->cpf = $request->cpf;

        
        $pessoa->rg = $request->rg;

        
        $pessoa->expedicao_rg = $request->expedicao_rg;

        
        $pessoa->naturalidade = $request->naturalidade;

        
        $pessoa->nascionalidade = $request->nascionalidade;

        
        $pessoa->nis = $request->nis;

        
        $pessoa->escolaridade = $request->escolaridade;

        
        $pessoa->data_nascimento = $request->data_nascimento;

        
        $pessoa->nome_mae = $request->nome_mae;

        
        $pessoa->nome_pai = $request->nome_pai;

        
        
        $pessoa->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new pessoa has been created !!']);

        return redirect('pessoa');
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
        if($request->ajax())
        {
            return URL::to('pessoa/'.$id);
        }

        $pessoa = Pessoa::findOrfail($id);
        return view('pessoa.show',compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {

$usuario_logado = Auth::user()->name;


        if($request->ajax())
        {
            return URL::to('pessoa/'. $id . '/edit');
        }

        
        $pessoa = Pessoa::findOrfail($id);

if($usuario_logado == "Admin") 

        {

        return view('pessoa.edit',compact('pessoa'  ));

} else {
        
        if($pessoa->vinculo == "Liberado")

        {

        return view('pessoa.edit',compact('pessoa'  ));

        } else 

        {

        $this->authorize('vinculo_pessoa', $pessoa);

        
        return view('pessoa.edit',compact('pessoa'  ));

        }

    }

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
        $pessoa = Pessoa::findOrfail($id);

        $pessoa->vinculo = $request->vinculo;       
    	
        $pessoa->user_id = $request->user_id;
        
        $pessoa->nome = $request->nome;
        
        $pessoa->cep = $request->cep;
        
        $pessoa->distrito = $request->distrito;
        
        $pessoa->bairro = $request->bairro;
        
        $pessoa->logradouro = $request->logradouro;
        
        $pessoa->numero = $request->numero;
        
        $pessoa->complemento = $request->complemento;
        
        $pessoa->fone = $request->fone;
        
        $pessoa->cel1 = $request->cel1;
        
        $pessoa->cel2 = $request->cel2;
        
        $pessoa->email = $request->email;
        
        $pessoa->cpf = $request->cpf;
        
        $pessoa->rg = $request->rg;
        
        $pessoa->expedicao_rg = $request->expedicao_rg;
        
        $pessoa->naturalidade = $request->naturalidade;
        
        $pessoa->nascionalidade = $request->nascionalidade;
        
        $pessoa->nis = $request->nis;
        
        $pessoa->escolaridade = $request->escolaridade;
        
        $pessoa->data_nascimento = $request->data_nascimento;
        
        $pessoa->nome_mae = $request->nome_mae;
        
        $pessoa->nome_pai = $request->nome_pai;
        
        
        $pessoa->save();

        return redirect('pessoa');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/pessoa/'. $id . '/delete');

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
     	$pessoa = Pessoa::findOrfail($id);
     	$pessoa->delete();
        return URL::to('pessoa');
    }
}
