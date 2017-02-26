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
                <div class="panel-heading">Escolas</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Escola </h2>
            
{!! Form::open(['method'=>'GET','url'=>'escola','class'=>'navbar-form navbar-right','role'=>'search'])  !!}

<?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
<a href="{{ url('escola/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
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
             

                                            <th>siem</th>
                                            <th>inep</th>
                                            <th>escola_nome</th>
                                            <th>distrito</th>

                   
                  <!--   
                     <th>fone</th>

                    <th>user_id</th>
                                       
                    <th>cep</th>
                    
                     <th>bairro</th>

                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                    
                    <th>email</th>
                    
                    <th>cel1</th>
                    
                    <th>cel2</th>
                    
                    <th>sigla</th>
                    
                    <th>possui_internet_escola</th>
                    
                    <th>tipo_internet_escola</th>
                    
                    <th>status_escola</th>
                    
                    <th>possui_lab</th>
                    
                    <th>possui_analista</th>
                    
                    <th>pessoa_id_analista</th>
                    
                    <th>tipo_sala</th>
                    
                    <th>pregao1</th>
                    
                    <th>pregao2</th>
                    
                    <th>pregao3</th>
                    
                    <th>pregao4</th>
                    
                    <th>possui_internet_lab</th>
                    
                    <th>tipo_internet_lab</th>
                    
                    <th>lab_montado</th>
                    
                    <th>qt_computadores_lab</th>
                    
                    <th>qt_monitorelab</th>
                    
                    <th>status_lab</th>
                    
                    <th>ar_condicionado_lab</th>
                    
                    <th>impressora_lab</th>
                    
                    <th>qt_notebook_lab</th>
                    
                    <th>roteador_lab</th>
                    
                    <th>switch_lab</th>
                    
                    <th>qt_cadeiras_lab</th>
                    
                    
                    
                    
                   
                    
                    <th>escola_tipo</th>
                    
                    <th>cod_ext</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    <th>nome</th>
                    
                    <th>cep</th>
                    
                    <th>distrito</th>
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                    <th>fone</th>
                    
                    <th>cel1</th>
                    
                    <th>cel2</th>
                    
                    <th>email</th>
                    
                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    --> 
                    
                    <th style="width:15%">actions</th>
                </thead>
                <tbody>
                    @foreach($escolas as $Escola)
                    
                    <tr>

                                                <td>{{$Escola->siem->siem}}</td>
                                                <td>{{$Escola->inep}}</td>

                                                <td>{{$Escola->siem->nome}}</td>
                                                <td>{{$Escola->distrito}}</td>


<!--
                        <td>{{$Escola->fone}}</td>

                        
                        <td>{{$Escola->user_id}}</td>
                        
                        
                        <td>{{$Escola->cep}}</td>
                        
                        <td>{{$Escola->bairro}}</td>

                        
                        <td>{{$Escola->logradouro}}</td>
                        
                        <td>{{$Escola->numero}}</td>
                        
                        <td>{{$Escola->complemento}}</td>
                        
                        
                        <td>{{$Escola->email}}</td>
                        
                        <td>{{$Escola->cel1}}</td>
                        
                        <td>{{$Escola->cel2}}</td>
                        
                        <td>{{$Escola->sigla}}</td>
                        
                        <td>{{$Escola->possui_internet_escola}}</td>
                        
                        <td>{{$Escola->tipo_internet_escola}}</td>
                        
                        <td>{{$Escola->status_escola}}</td>
                        
                        <td>{{$Escola->possui_lab}}</td>
                        
                        <td>{{$Escola->possui_analista}}</td>
                        
                        <td>{{$Escola->pessoa_id_analista}}</td>
                        
                        <td>{{$Escola->tipo_sala}}</td>
                        
                        <td>{{$Escola->pregao1}}</td>
                        
                        <td>{{$Escola->pregao2}}</td>
                        
                        <td>{{$Escola->pregao3}}</td>
                        
                        <td>{{$Escola->pregao4}}</td>
                        
                        <td>{{$Escola->possui_internet_lab}}</td>
                        
                        <td>{{$Escola->tipo_internet_lab}}</td>
                        
                        <td>{{$Escola->lab_montado}}</td>
                        
                        <td>{{$Escola->qt_computadores_lab}}</td>
                        
                        <td>{{$Escola->qt_monitorelab}}</td>
                        
                        <td>{{$Escola->status_lab}}</td>
                        
                        <td>{{$Escola->ar_condicionado_lab}}</td>
                        
                        <td>{{$Escola->impressora_lab}}</td>
                        
                        <td>{{$Escola->qt_notebook_lab}}</td>
                        
                        <td>{{$Escola->roteador_lab}}</td>
                        
                        <td>{{$Escola->switch_lab}}</td>
                        
                        <td>{{$Escola->qt_cadeiras_lab}}</td>
                        
                        
                        


                                                <td>{{$Escola->siem->escola_tipo}}</td>

                                                <td>{{$Escola->siem->cod_ext}}</td>

                                                <td>{{$Escola->siem->created_at}}</td>

                                                <td>{{$Escola->siem->updated_at}}</td>

                        
                        
                                                <td>{{$Escola->pessoa->nome}}</td>

                                                <td>{{$Escola->pessoa->cep}}</td>

                                                <td>{{$Escola->pessoa->distrito}}</td>

                                                <td>{{$Escola->pessoa->bairro}}</td>

                                                <td>{{$Escola->pessoa->logradouro}}</td>

                                                <td>{{$Escola->pessoa->numero}}</td>

                                                <td>{{$Escola->pessoa->complemento}}</td>

                                                <td>{{$Escola->pessoa->fone}}</td>

                                                <td>{{$Escola->pessoa->cel1}}</td>

                                                <td>{{$Escola->pessoa->cel2}}</td>

                                                <td>{{$Escola->pessoa->email}}</td>

                                                <td>{{$Escola->pessoa->cpf}}</td>

                                                <td>{{$Escola->pessoa->rg}}</td>

                                                <td>{{$Escola->pessoa->expedicao_rg}}</td>

                                                <td>{{$Escola->pessoa->data_nascimento}}</td>

                                                <td>{{$Escola->pessoa->nome_mae}}</td>

                                                <td>{{$Escola->pessoa->nome_pai}}</td>

                                                <td>{{$Escola->pessoa->created_at}}</td>

                                                <td>{{$Escola->pessoa->updated_at}}</td>

                        -->
                        
                        
                        <td>

                        <?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/escola/{{$Escola->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <?php } ?>

                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/escola/{{$Escola->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/escola/{{$Escola->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        {!! $escolas->render() !!}
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