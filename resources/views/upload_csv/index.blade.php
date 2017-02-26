@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
       
   <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Enviar CSV</div>
                <div class="panel-body">
   



                @if (Auth::user()->name == "Admin")

                @else

    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" method = 'POST' action = '{!!url("upload_csv")!!}' class="form-horizontal" enctype="multipart/form-data">
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        
            <tr>
                <td><b>Ano:</b></td>
                <td>
                {!! Form::select('ano',  Config::get('enums.ano')) !!}
            </td>
            </tr>

            <tr>
                <td><b>Simulado:</b></td>
                <td>
                {!! Form::select('simulado',  Config::get('enums.simulado')) !!}
            </td>
            </tr>

           <tr>
                <td><b>Nivel:</b></td>
                <td> 
                {!! Form::select('nivel',  Config::get('enums.nivelSimCSV')) !!}
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
        <button class = 'btn btn-primary' type ='submit'>Enviar</button>
    </form>
    <br>
                   @endif



    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Ano</th>
            <th>Simulado</th>
            <th>Nivel</th>
            <!--<th>usuario</th>
            <th>siem</th>-->
            <th>Nome</th>
            <!--<th>tipo_escola</th>
            <th>cod_ext</th>-->
            <!--<th>created_at</th>
            <th>updated_at</th>-->
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($upload_csvs as $upload_csv) 
            <tr>
                <td>{!!$upload_csv->ano!!}</td>
                <td>{!!$upload_csv->simulado!!}</td>
                <td>{!!$upload_csv->nivel!!}</td>
                <!--<td>{!!$upload_csv->siem->usuario!!}</td>
                <td>{!!$upload_csv->siem->siem!!}</td>-->
                <td>{!!$upload_csv->siem->nome!!}</td>
                <!--<td>{!!$upload_csv->siem->tipo_escola!!}</td>
                <td>{!!$upload_csv->siem->cod_ext!!}</td>-->
                <!--<td>{!!$upload_csv->siem->created_at!!}</td>
                <td>{!!$upload_csv->siem->updated_at!!}</td>-->
                <td>

                @if (Auth::user()->name == "Admin")

                @else
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/upload_csv/{!!$upload_csv->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <!--<a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/upload_csv/{!!$upload_csv->id!!}'><i class = 'material-icons'>info</i></a>-->
                @endif
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/upload_csv/{!!$upload_csv->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>

                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $upload_csvs->render() !!}

</section>
@endsection