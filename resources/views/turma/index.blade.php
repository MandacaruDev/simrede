
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
                <div class="panel-heading">Turmas</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Turmas</h2>

{!! Form::open(['method'=>'GET','url'=>'turma','class'=>'navbar-form navbar-right','role'=>'search'])  !!}


<a href="{{ url('turma/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Busca...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
</div>
{!! Form::close() !!}

    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <!--<th>vinculo</th>-->
            <th>turno</th>
            <th>nivel</th>
            <th>serie</th>
            <th>turma</th>
            <!--<th>adicionado_por</th>
            <th>usuario</th>
            <th>siem</th>-->
            <th>Escola</th>
            <!--<th>tipo_escola</th>
            <th>cod_ext</th>
            <th>created_at</th>
            <th>updated_at</th>-->
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($turmas as $turma) 
            <tr>
                <!--<td>{!!$turma->vinculo!!}</td>-->
                <td>{!!$turma->turno!!}</td>
                <td>{!!$turma->nivel!!}</td>
                <td>{!!$turma->serie!!}</td>
                <td>{!!$turma->turma!!}</td>
                <!--<td>{!!$turma->adicionado_por!!}</td>
                <td>{!!$turma->siem->usuario!!}</td>
                <td>{!!$turma->siem->siem!!}</td>-->
                <td>{!!$turma->siem->nome!!}</td>
                <!--<td>{!!$turma->siem->tipo_escola!!}</td>
                <td>{!!$turma->siem->cod_ext!!}</td>
                <td>{!!$turma->siem->created_at!!}</td>-->
                <!--<td>{!!$turma->siem->updated_at!!}</td>-->
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/turma/{!!$turma->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/turma/{!!$turma->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/turma/{!!$turma->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $turmas->render() !!}

@endsection