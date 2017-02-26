@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Importação SimuladoCSV</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Importação SimuladoCSV</div>

                <div class="panel-body">
                    <h2><i class="fa glyphicon glyphicon-th-list"></i> Importação SimuladoCSV</h2>


                    {!! Form::open(['method'=>'GET','url'=> 'moodle_simulado','class'=>'navbar-form navbar-right','role'=>'search'])  !!}

                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Busca...">
                        <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
                    </div>
                    {!! Form::close() !!}

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

    
@if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
@endif


        <h3>Importar dados:</h3>
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('moodle_simulado/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
           
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
              </p>
            </tr>

            <input type="file" name="envsimulado[]" multiple required>
            {{ csrf_field() }}
            <br/>
            <button class="btn btn-primary">Enviar</button>
        </form>
        <br/>

        <h3>Backup:</h3>
        <div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">
            <a href="{{ url('moodle_simulado/downloadExcel/xls') }}"><button class="btn btn-success btn-lg">Download Excel xls</button></a>
            {{--<a href="{{ url('moodle_simulado/downloadExcel/xlsx') }}"><button class="btn btn-success btn-lg">Download Excel xlsx</button></a>--}}
            <a href="{{ url('moodle_simulado/downloadExcel/csv') }}"><button class="btn btn-success btn-lg">Download CSV</button></a>
        </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>SIEM</th>
            <th>Aluno</th>
            <th>Escola</th>
            <th>Série</th>
            <th>Simulado</th>
            <th>Cadastro</th>
            {{--<th>nota1</th>--}}
            {{--<th>nota2</th>--}}
            {{--<th>nota3</th>--}}
            {{--<th>nota4</th>--}}
            {{--<th>nota5</th>--}}
            {{--<th>nota6</th>--}}
            {{--<th>nota7</th>--}}
            {{--<th>nota8</th>--}}
            {{--<th>nota9</th>--}}
            {{--<th>nota10</th>--}}
            {{--<th>nota11</th>--}}
            {{--<th>nota12</th>--}}
            {{--<th>nota13</th>--}}
            {{--<th>nota14</th>--}}
            {{--<th>nota15</th>--}}
            {{--<th>nota16</th>--}}
            {{--<th>nota17</th>--}}
            {{--<th>nota18</th>--}}
            {{--<th>nota19</th>--}}
            {{--<th>nota20</th>--}}
            {{--<th>situacao</th>--}}
            <th>Ação</th>
        </thead>
        <tbody>
            @foreach($moodle_simulados as $moodle_simulado) 
            <tr>
                <td>{!!$moodle_simulado->siem_cod!!}</td>
                <td>{!!$moodle_simulado->aluno!!}</td>
                <td>{!!$moodle_simulado->escola!!}</td>
                <td>{!!$moodle_simulado->serie!!}</td>
                <td>{!!$moodle_simulado->simulado!!}</td>
                <td>{!!$moodle_simulado->cadastro!!}</td>
                {{--<td>{!!$moodle_simulado->nota1!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota2!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota3!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota4!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota5!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota6!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota7!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota8!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota9!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota10!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota11!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota12!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota13!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota14!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota15!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota16!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota17!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota18!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota19!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota20!!}</td>--}}
                {{--<td>{!!$moodle_simulado->situacao!!}</td>--}}
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/moodle_simulado/{!!$moodle_simulado->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/moodle_simulado/{!!$moodle_simulado->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/moodle_simulado/{!!$moodle_simulado->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
@endsection