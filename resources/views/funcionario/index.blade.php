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
 
        <title>Funcionários</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Funcionários</div>
                                <div class="panel-body">

            <h2><i class="fa glyphicon glyphicon-th-list"></i> Funcionários </h2>


{!! Form::open(['method'=>'GET','url'=>'funcionario','class'=>'navbar-form navbar-right','role'=>'search'])  !!}


<a href="{{ url('funcionario/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>

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
                    

                    <th>Funcionário</th>
                    <th>Ocupação</th>
                    <th>Escola</th>


<!--

                    <th>usuario</th>
                    
                    <th>vinculo</th>
                    
                    <th>status_funcionario</th>
                    
                    
                    
                    
                    <th>siem</th>
                    
                    
                    <th>escola_tipo</th>
                    
                    <th>cod_ext</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    
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
                    @foreach($funcionarios as $Funcionario)
                    <tr>

                    <td>{{$Funcionario->pessoa->nome}}</td>
                    <td>{{$Funcionario->ocupacao->nome}}</td>
                    <td>{{$Funcionario->siem->nome}}</td>

<!--
                        
                                                <td>{{$Funcionario->usuario}}</td>
                                                
                                                <td>{{$Funcionario->vinculo}}</td>
                                                
                                                <td>{{$Funcionario->status_funcionario}}</td>
                        
                        
                        
                                                <td>{{$Funcionario->siem->siem}}</td>


                                                <td>{{$Funcionario->siem->escola_tipo}}</td>

                                                <td>{{$Funcionario->siem->cod_ext}}</td>

                                                <td>{{$Funcionario->siem->created_at}}</td>

                                                <td>{{$Funcionario->siem->updated_at}}</td>

                        
                        

                                                <td>{{$Funcionario->ocupacao->created_at}}</td>

                                                <td>{{$Funcionario->ocupacao->updated_at}}</td>

                        
                        

                                                <td>{{$Funcionario->pessoa->cep}}</td>

                                                <td>{{$Funcionario->pessoa->distrito}}</td>

                                                <td>{{$Funcionario->pessoa->bairro}}</td>

                                                <td>{{$Funcionario->pessoa->logradouro}}</td>

                                                <td>{{$Funcionario->pessoa->numero}}</td>

                                                <td>{{$Funcionario->pessoa->complemento}}</td>

                                                <td>{{$Funcionario->pessoa->fone}}</td>

                                                <td>{{$Funcionario->pessoa->cel1}}</td>

                                                <td>{{$Funcionario->pessoa->cel2}}</td>

                                                <td>{{$Funcionario->pessoa->email}}</td>

                                                <td>{{$Funcionario->pessoa->cpf}}</td>

                                                <td>{{$Funcionario->pessoa->rg}}</td>

                                                <td>{{$Funcionario->pessoa->expedicao_rg}}</td>

                                                <td>{{$Funcionario->pessoa->data_nascimento}}</td>

                                                <td>{{$Funcionario->pessoa->nome_mae}}</td>

                                                <td>{{$Funcionario->pessoa->nome_pai}}</td>

                                                <td>{{$Funcionario->pessoa->created_at}}</td>

                                                <td>{{$Funcionario->pessoa->updated_at}}</td>

                        -->
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/funcionario/{{$Funcionario->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/funcionario/{{$Funcionario->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/funcionario/{{$Funcionario->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        {!! $funcionarios->render() !!}
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