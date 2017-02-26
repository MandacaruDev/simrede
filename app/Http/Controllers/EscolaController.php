<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Escola;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use validator;

use App\Siem;


use App\Pessoa;


use Auth;

use App\User;


/**
 * Class EscolaController.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:10:40am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    /*public function index()
    {
        $escolas = Escola::paginate(6);
        return view('escola.index',compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */

      public function index()

        {

            $usuario_logado = Auth::user()->name;
            $escolas = Escola::all();
 

if($usuario_logado == "Admin") {

            $siems = Siem::all();

            $escolas = Escola::all();

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            if ($search == "") {

            $escolas = Escola::where('siem_id','like','%'.$search.'%')
                ->orderBy('siem_id')
                ->paginate(30);

            return view('escola.index',compact('escolas','siems'));
        
            } else {

                //  $escolas = Escola::where('siem_id','=',$search)
                // ->orderBy('siem_id')
                // ->paginate(5);


            $escolas = Escola::whereHas('siem', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%')
                  ->orwhere('siem','like','%'.$search.'%');
            })
            ->orWhere('distrito','LIKE','%'.$search.'%')
            ->orwhere('bairro','like','%'.$search.'%')
            ->orwhere('inep','like','%'.$search.'%')
                       
            ->paginate(200);                

            return view('escola.index',compact('escolas','siems'));
            }

} else {


            $siems = Siem::all();

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            
            if ($search == "") {

            $escolas = Escola::where('siem_id','like','%'.$search.'%')
                ->where('vinculo',Auth::user()->name)
                ->orderBy('siem_id')
                ->paginate(5);

            return view('escola.index',compact('escolas','siems'));

            } else 

            {
                 $escolas = Escola::where('siem_id','like',$search)
                ->where('vinculo',Auth::user()->name)
                ->orderBy('siem_id')
                ->paginate(5);

            return view('escola.index',compact('escolas','siems'));
            }
                
                  }
            }



   

public function reportescola()
{

        return view('phpreport.ReportEscolas');


}

 public function reportlaboratorio()
{

        return view('phpreport.ReportLaboratorios');


}

public function perfilescola()
{

        return view('phpreport.PerfilEscolas');


}


public function perfillaboratorio()
{

        return view('phpreport.PerfilLaboratorios');


}


    public function create()
    {
        $usuario_logado = Auth::user()->name; 

        if($usuario_logado == "Admin") {

        $siems = Siem::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('escola.create',compact('siems' , 'pessoas'  ));
        }
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
        //print_r($request->all());
        $this->validate($request,[
         'vinculo'=>'required|max:100',
         'siem_id'=>'required|unique_with:escolas,inep',
        ]);
// Fim validação de campos de formulário

        $escola = new Escola();


        $escola->vinculo = $request->vinculo;

        
        $escola->user_id = $request->user_id;

        
        $escola->inep = $request->inep;

        
        $escola->cep = $request->cep;

        
        $escola->distrito = $request->distrito;

        
        $escola->bairro = $request->bairro;

        
        $escola->logradouro = $request->logradouro;

        
        $escola->numero = $request->numero;

        
        $escola->complemento = $request->complemento;

        
        $escola->fone = $request->fone;

        
        $escola->email = $request->email;

        
        $escola->cel1 = $request->cel1;

        
        $escola->cel2 = $request->cel2;

        
        $escola->sigla = $request->sigla;

        
        $escola->possui_internet_escola = $request->possui_internet_escola;

        
        $escola->tipo_internet_escola = $request->tipo_internet_escola;

        
        $escola->status_escola = $request->status_escola;

        
        $escola->possui_lab = $request->possui_lab;

        
        $escola->possui_analista = $request->possui_analista;

        
        $escola->tipo_sala = $request->tipo_sala;

        
        $escola->pregao1 = $request->pregao1;

        
        $escola->pregao2 = $request->pregao2;

        
        $escola->pregao3 = $request->pregao3;

        
        $escola->pregao4 = $request->pregao4;

        
        $escola->possui_internet_lab = $request->possui_internet_lab;

        
        $escola->tipo_internet_lab = $request->tipo_internet_lab;

        
        $escola->lab_montado = $request->lab_montado;

        
        $escola->qt_computadores_lab = $request->qt_computadores_lab;

        
        $escola->qt_monitores_lab = $request->qt_monitores_lab;

        
        $escola->status_lab = $request->status_lab;

        
        $escola->ar_condicionado_lab = $request->ar_condicionado_lab;

        
        $escola->impressora_lab = $request->impressora_lab;

        
        $escola->qt_notebook_lab = $request->qt_notebook_lab;


        // campos adicionados posteriormente
        $escola->qt_projetores = $request->qt_projetores;
        $escola->qt_tablets = $request->qt_tablets;
        // Fim campos adicionados posteriormente
        



        
        $escola->roteador_lab = $request->roteador_lab;

        
        $escola->switch_lab = $request->switch_lab;

        
        $escola->qt_cadeiras_lab = $request->qt_cadeiras_lab;

        
        
        $escola->siem_id = $request->siem_id;

        
        $escola->pessoa_id = $request->pessoa_id;

        
        $escola->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new escola has been created !!']);

        return redirect('escola');
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
            return URL::to('escola/'.$id);
        }

        $escola = Escola::findOrfail($id);
        return view('escola.show',compact('escola'));
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
            return URL::to('escola/'. $id . '/edit');
        }

        $users = User::all();
        
        $siems = Siem::all()->pluck('nome','id');

        
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $escola = Escola::findOrfail($id);

if($usuario_logado == "Admin") 

        {

        return view('escola.edit',compact('users', 'escola' ,'siems', 'pessoas' ) );

} else {

        if($escola->vinculo == "Liberado")

        {

        return view('escola.edit',compact('escola' ,'siems', 'pessoas' ) );

        } else

        {

        $this->authorize('vinculo_escola', $escola);

        return view('escola.edit',compact('escola' ,'siems', 'pessoas' ) );

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
        $escola = Escola::findOrfail($id);

        $escola->vinculo = $request->vinculo;
    	
        $escola->user_id = $request->user_id;
        
        $escola->inep = $request->inep;
        
        $escola->cep = $request->cep;
        
        $escola->distrito = $request->distrito;
        
        $escola->bairro = $request->bairro;
        
        $escola->logradouro = $request->logradouro;
        
        $escola->numero = $request->numero;
        
        $escola->complemento = $request->complemento;
        
        $escola->fone = $request->fone;
        
        $escola->email = $request->email;
        
        $escola->cel1 = $request->cel1;
        
        $escola->cel2 = $request->cel2;
        
        $escola->sigla = $request->sigla;
        
        $escola->possui_internet_escola = $request->possui_internet_escola;
        
        $escola->tipo_internet_escola = $request->tipo_internet_escola;
        
        $escola->status_escola = $request->status_escola;
        
        $escola->possui_lab = $request->possui_lab;
        
        $escola->possui_analista = $request->possui_analista;
        
        $escola->tipo_sala = $request->tipo_sala;
        
        $escola->pregao1 = $request->pregao1;
        
        $escola->pregao2 = $request->pregao2;
        
        $escola->pregao3 = $request->pregao3;
        
        $escola->pregao4 = $request->pregao4;
        
        $escola->possui_internet_lab = $request->possui_internet_lab;
        
        $escola->tipo_internet_lab = $request->tipo_internet_lab;
        
        $escola->lab_montado = $request->lab_montado;
        
        $escola->qt_computadores_lab = $request->qt_computadores_lab;
        
        $escola->qt_monitores_lab = $request->qt_monitores_lab;
        
        $escola->status_lab = $request->status_lab;
        
        $escola->ar_condicionado_lab = $request->ar_condicionado_lab;
        
        $escola->impressora_lab = $request->impressora_lab;
        
        $escola->qt_notebook_lab = $request->qt_notebook_lab;
        
        $escola->roteador_lab = $request->roteador_lab;


        // campos adicionados posteriormente
        $escola->qt_projetores = $request->qt_projetores;
        $escola->qt_tablets = $request->qt_tablets;
        // Fim campos adicionados posteriormente
        
        
        $escola->switch_lab = $request->switch_lab;
        
        $escola->qt_cadeiras_lab = $request->qt_cadeiras_lab;
        
        
        $escola->siem_id = $request->siem_id;

        
        $escola->pessoa_id = $request->pessoa_id;

        
        $escola->save();

        return redirect('escola');
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
        $msg = Ajaxis::BtDeleting('Cuidado!!','Gostaria de deletar o Registro?','/escola/'. $id . '/delete');

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
     	$escola = Escola::findOrfail($id);
     	$escola->delete();
        return URL::to('escola');
    }
}
