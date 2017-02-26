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
        <title>Siem-Escolas</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Siem</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Siem</h2>

{!! Form::open(['method'=>'GET','url'=>'siem','class'=>'navbar-form navbar-right','role'=>'search'])  !!}

<?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
<a href="{{ url('siem/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
<?php } ?>

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Busca...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
</div>
{!! Form::close() !!}
         
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Siem</th>
                    
                    <th>Nome da Escola</th>
                    
                    <th>Tipo</th>
                              
                              

               <!--     <th>cod_ext</th>  -->
                    
                    
                    <th style="width:15%">Ações</th>
                </thead>
                <tbody>
                    @foreach($siems as $Siem)
                    <tr>
                        
                        <td>{{$Siem->siem}}</td>
                        
                        <td>{{$Siem->nome}}</td>
                        
                        <td>{{$Siem->tipo_escola}}</td>
                        
                <!--        <td>{{$Siem->cod_ext}}</td> -->
                        
                        
                        <td>
                              
                        <?php
                        
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/siem/{{$Siem->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <?php } ?>
       
                                <a href = '#' data-target="#myModal" class = 'viewEdit btn btn-primary btn-xs' data-link = '/siem/{{$Siem->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/siem/{{$Siem->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        {!! $siems->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
@endsection
