<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload_csv;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use Carbon\Carbon;

use League\Csv\Writer;

use File;

use App\Siem;

use Auth;


/**
 * Class Upload_csvController.
 *
 * @author  The scaffold-interface created at 2017-02-08 12:48:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Upload_csvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        

        if (Auth::user()->name == "Admin")

        {
        $title = 'Index - upload_csv';
        $upload_csvs = Upload_csv::paginate(6);
        return view('upload_csv.index',compact('upload_csvs','title'));
        }

        else

        {

        $title = 'Index - upload_csv';
        $upload_csvs = Upload_csv::where('siem_id',Auth::user()->id)
        ->paginate(6);
        return view('upload_csv.index',compact('upload_csvs','title'));
        
        }
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - upload_csv';
        
        $siems = Siem::all()->pluck('nome','id');
        
        return view('upload_csv.create',compact('title','siems'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $upload_csv = new Upload_csv();


        $usuario = Auth::user()->name;



        $upload_csv->ano = $request->ano;

        
        $upload_csv->simulado = $request->simulado;

        
        $upload_csv->nivel = $request->nivel;

                
        $upload_csv->siem_id = $request->siem_id;

        $upload_csv->save();

        $request->csv->storeAs("csv","$upload_csv->id.csv");
    
        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new upload_csv has been created !!']);

        return redirect('upload_csv');
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
        $title = 'Show - upload_csv';

        if($request->ajax())
        {
            return URL::to('upload_csv/'.$id);
        }

        $upload_csv = Upload_csv::findOrfail($id);
        return view('upload_csv.show',compact('title','upload_csv'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - upload_csv';
        if($request->ajax())
        {
            return URL::to('upload_csv/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $upload_csv = Upload_csv::findOrfail($id);
        return view('upload_csv.edit',compact('title','upload_csv' ,'siems' ) );
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
        $upload_csv = Upload_csv::findOrfail($id);
    	
        $upload_csv->ano = $request->ano;
        
        $upload_csv->simulado = $request->simulado;
        
        $upload_csv->nivel = $request->nivel;
        
        
        $upload_csv->siem_id = $request->siem_id;

        
        $upload_csv->save();

        $request->csv->storeAs("csv","$upload_csv->id.csv");

        return redirect('upload_csv');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/upload_csv/'. $id . '/delete');

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
     	$upload_csv = Upload_csv::findOrfail($id);
     	$upload_csv->delete();
        File::delete('/home/aetji649/sglab/storage/app/csv/' . "$upload_csv->id.csv");
        return URL::to('upload_csv');
    }
}
