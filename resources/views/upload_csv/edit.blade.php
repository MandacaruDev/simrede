@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
       
   <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Enviar CSV</div>
                <div class="panel-body">
   
   
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" method = 'POST' action = '{!! url("upload_csv")!!}/{!!$upload_csv->
        id!!}/update' class="form-horizontal" enctype="multipart/form-data">
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        
            <tr>
                <td><b>Ano:</b></td>
                <td>
                {!! Form::select('ano',  Config::get('enums.ano'), $upload_csv->ano) !!}
            </td>
            </tr>

            <tr>
                <td><b>Simulado:</b></td>
                <td>
                {!! Form::select('simulado',  Config::get('enums.simulado'), $upload_csv->simulado) !!}
            </td>
            </tr>

           <tr>
                <td><b>Nivel:</b></td>
                <td> 
                {!! Form::select('nivel',  Config::get('enums.nivelSimCSV'), $upload_csv->nivel) !!}
            </td>
            </tr>

        <div class="form-group">
            <!--<label>Usuário</label>-->
            <!--<input id="siem_id" name = "siem_id" class="form-control" value="{!! Auth::user()->id !!}">-->
            <input id="siem_id" type="hidden" name = "siem_id" class="form-control" value="{!! Auth::user()->id !!}">
        </div>

        <div>
        <input type="file" name="csv" required>
        </div>
        <br>
        <div align="center">
        <button  class = 'btn btn-primary' type ='submit'>Atualizar</button>
        </div>
    </form>
    <br>
   

</section>
@endsection





