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
 
        <title>Pessoa</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pessoa</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Pessoa </h2>
            

{!! Form::open(['method'=>'GET','url'=>'pessoa','class'=>'navbar-form navbar-right','role'=>'search'])  !!}


<a href="{{ url('pessoa/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Busca...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--> </i>
        </button>
    </span>
</div>
{!! Form::close() !!}

            <table class = "table table-striped table-bordered">
                <thead>
                    
 
                    <th>Nome</th>

                    
                    <th>Contato</th>
                    
                    
                    <!--<th>E-mail</th>-->

                    
<!--
                    
                    <th>cep</th>
                    
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                                      <th>Distrito</th>
                    <th>Cel 2</th>

                                        <th>Telefone</th>


                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>naturalidade</th>
                    
                    <th>nascionalidade</th>
                    
                    <th>escolaridade</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    -->
                    
                    <th style="width:15%">Ações</th>
                </thead>
                <tbody>
                    @foreach($pessoas as $Pessoa)

                    <tr>
                        
                        <td>{{$Pessoa->nome}}</td>

                        
                        <td>{{$Pessoa->cel1}}</td>
                        
                        
                        <!--<td>{{$Pessoa->email}}</td>-->



<!--
                        
                        <td>{{$Pessoa->cep}}</td>
                        
                        <td>{{$Pessoa->distrito}}</td>
                        
                        <td>{{$Pessoa->bairro}}</td>
                        
                        <td>{{$Pessoa->logradouro}}</td>
                        
                        <td>{{$Pessoa->numero}}</td>
                        
                        <td>{{$Pessoa->complemento}}</td>
                        
                                               <td>{{$Pessoa->distrito}}</td>
                                        
                                        
                                         <td>{{$Pessoa->fone}}</td>


                                                <td>{{$Pessoa->cel2}}</td>

                        <td>{{$Pessoa->cpf}}</td>
                        
                        <td>{{$Pessoa->rg}}</td>
                        
                        <td>{{$Pessoa->expedicao_rg}}</td>
                        
                        <td>{{$Pessoa->naturalidade}}</td>
                        
                        <td>{{$Pessoa->nascionalidade}}</td>
                        
                        <td>{{$Pessoa->escolaridade}}</td>
                        
                        <td>{{$Pessoa->data_nascimento}}</td>
                        
                        <td>{{$Pessoa->nome_mae}}</td>
                        
                        <td>{{$Pessoa->nome_pai}}</td>
                        
                        -->

                        <td>
                        
<?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                       
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/pessoa/{{$Pessoa->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <?php } ?>
      
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/pessoa/{{$Pessoa->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/pessoa/{{$Pessoa->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           {!! $pessoas->render() !!}

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