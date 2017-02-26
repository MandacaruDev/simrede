<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Horario_funcionario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;

use Auth;

use App\Pessoa;


/**
 * Class Horario_funcionarioController.
 *
 * @author  The scaffold-interface created at 2016-12-06 03:57:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Horario_funcionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

        // $pessoas = Pessoa::all();
        // $title = 'Index - horario_funcionario';
        // $horario_funcionarios = Horario_funcionario::paginate(6);
        // return view('horario_funcionario.index',compact('horario_funcionarios','title'));


$usuario_logado = Auth::user()->name;

            $pessoas = Pessoa::all();

            $siems = Siem::all();


if($usuario_logado == "Admin") {

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            // $horario_funcionarios = Horario_funcionario::where('pessoa_id','like','%'.$search.'%')
            //     ->orderBy('pessoa_id')
            //     ->paginate(5);
           
                      if ($search == "") {

            $horario_funcionarios = Horario_funcionario::whereHas('pessoa', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            })
            ->orwhereHas('siem', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            
            })

            // ->orwhereHas('ocupacao', function($query) use($search){
            // $query->where('nome', 'like', '%'.$search.'%');
            // })
            // ->orWhere('distrito','LIKE','%'.$search.'%')
            // ->orwhere('bairro','like','%'.$search.'%')
            // ->orwhere('inep','like','%'.$search.'%')
                       
            ->paginate(200);             

        return view('horario_funcionario.index',compact('horario_funcionarios','pessoas','escolas'));

                      } else {

            $horario_funcionarios = Horario_funcionario::whereHas('pessoa', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            })
            ->orwhereHas('siem', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            
            })
            // ->orwhereHas('ocupacao', function($query) use($search){
            // $query->where('nome', 'like', '%'.$search.'%');
            // })
            // ->orWhere('distrito','LIKE','%'.$search.'%')
            // ->orwhere('bairro','like','%'.$search.'%')
            // ->orwhere('inep','like','%'.$search.'%')
                       
            ->paginate(200);             

        return view('horario_funcionario.index',compact('horario_funcionarios','pessoas','escolas'));

                      }

} else {
               
               
                $search = \Request::get('search'); //<-- we use global request to get the param of URI


       $horario_funcionarios = Horario_funcionario::whereHas('pessoa', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%')
                  ->where('siem_id',Auth::user()->id);
            })
            ->orwhereHas('siem', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%')
                  ->where('siem_id',Auth::user()->id);
            
            })
            // ->orwhereHas('ocupacao', function($query) use($search){
            // $query->where('nome', 'like', '%'.$search.'%');
            // })
            // ->orWhere('distrito','LIKE','%'.$search.'%')
            // ->orwhere('bairro','like','%'.$search.'%')
            // ->orwhere('inep','like','%'.$search.'%')
                       
            ->paginate(30);             

        return view('horario_funcionario.index',compact('horario_funcionarios','pessoas','escolas'));

}


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - horario_funcionario';
        
        $siems = Siem::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('horario_funcionario.create',compact('title','siems' , 'pessoas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario_funcionario = new Horario_funcionario();

        
        $horario_funcionario->adicionado_por = $request->adicionado_por;


        $horario_funcionario->seg_m = $request->seg_m;

        $horario_funcionario->ter_m = $request->ter_m;

        
        $horario_funcionario->qua_m = $request->qua_m;

        
        $horario_funcionario->qui_m = $request->qui_m;

        
        $horario_funcionario->sex_m = $request->sex_m;

        
        $horario_funcionario->sab_m = $request->sab_m;

        
        $horario_funcionario->dom_m = $request->dom_m;

        
        $horario_funcionario->seg_t = $request->seg_t;

        
        $horario_funcionario->ter_t = $request->ter_t;

        
        $horario_funcionario->qua_t = $request->qua_t;

        
        $horario_funcionario->qui_t = $request->qui_t;

        
        $horario_funcionario->sex_t = $request->sex_t;

        
        $horario_funcionario->sab_t = $request->sab_t;

        
        $horario_funcionario->dom_t = $request->dom_t;

        
        $horario_funcionario->seg_n = $request->seg_n;

        
        $horario_funcionario->ter_n = $request->ter_n;

        
        $horario_funcionario->qua_n = $request->qua_n;

        
        $horario_funcionario->qui_n = $request->qui_n;

        
        $horario_funcionario->sex_n = $request->sex_n;

        
        $horario_funcionario->sab_n = $request->sab_n;

        
        $horario_funcionario->dom_n = $request->dom_n;

        
        $horario_funcionario->seg_c = $request->seg_c;

        
        $horario_funcionario->ter_c = $request->ter_c;

        
        $horario_funcionario->qua_c = $request->qua_c;

        
        $horario_funcionario->qui_c = $request->qui_c;

        
        $horario_funcionario->sex_c = $request->sex_c;

        
        $horario_funcionario->sab_c = $request->sab_c;

        
        $horario_funcionario->dom_c = $request->dom_c;

        
        
        $horario_funcionario->siem_id = $request->siem_id;

        
        $horario_funcionario->pessoa_id = $request->pessoa_id;

        
        $horario_funcionario->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new horario_funcionario has been created !!']);

        return redirect('horario_funcionario');
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
        $title = 'Show - horario_funcionario';

        if($request->ajax())
        {
            return URL::to('horario_funcionario/'.$id);
        }

        $horario_funcionario = Horario_funcionario::findOrfail($id);
        return view('horario_funcionario.show',compact('title','horario_funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - horario_funcionario';
        if($request->ajax())
        {
            return URL::to('horario_funcionario/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $horario_funcionario = Horario_funcionario::findOrfail($id);
        return view('horario_funcionario.edit',compact('title','horario_funcionario' ,'siems', 'pessoas' ) );
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
        $horario_funcionario = Horario_funcionario::findOrfail($id);

        $horario_funcionario->adicionado_por = $request->adicionado_por;
    
    	
        $horario_funcionario->seg_m = $request->seg_m;
        
        $horario_funcionario->ter_m = $request->ter_m;
        
        $horario_funcionario->qua_m = $request->qua_m;
        
        $horario_funcionario->qui_m = $request->qui_m;
        
        $horario_funcionario->sex_m = $request->sex_m;
        
        $horario_funcionario->sab_m = $request->sab_m;
        
        $horario_funcionario->dom_m = $request->dom_m;
        
        $horario_funcionario->seg_t = $request->seg_t;
        
        $horario_funcionario->ter_t = $request->ter_t;
        
        $horario_funcionario->qua_t = $request->qua_t;
        
        $horario_funcionario->qui_t = $request->qui_t;
        
        $horario_funcionario->sex_t = $request->sex_t;
        
        $horario_funcionario->sab_t = $request->sab_t;
        
        $horario_funcionario->dom_t = $request->dom_t;
        
        $horario_funcionario->seg_n = $request->seg_n;
        
        $horario_funcionario->ter_n = $request->ter_n;
        
        $horario_funcionario->qua_n = $request->qua_n;
        
        $horario_funcionario->qui_n = $request->qui_n;
        
        $horario_funcionario->sex_n = $request->sex_n;
        
        $horario_funcionario->sab_n = $request->sab_n;
        
        $horario_funcionario->dom_n = $request->dom_n;
        
        $horario_funcionario->seg_c = $request->seg_c;
        
        $horario_funcionario->ter_c = $request->ter_c;
        
        $horario_funcionario->qua_c = $request->qua_c;
        
        $horario_funcionario->qui_c = $request->qui_c;
        
        $horario_funcionario->sex_c = $request->sex_c;
        
        $horario_funcionario->sab_c = $request->sab_c;
        
        $horario_funcionario->dom_c = $request->dom_c;
        
        
        $horario_funcionario->siem_id = $request->siem_id;

        
        $horario_funcionario->pessoa_id = $request->pessoa_id;

        
        $horario_funcionario->save();

        return redirect('horario_funcionario');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/horario_funcionario/'. $id . '/delete');

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
     	$horario_funcionario = Horario_funcionario::findOrfail($id);
     	$horario_funcionario->delete();
        return URL::to('horario_funcionario');
    }
}
