@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">{!!$turma->turno!!} {!!$turma->nivel!!} <br>{!!$turma->serie!!} ANO {!!$turma->turma!!}  </br>
  Última Edição: {{$turma->updated_at}}</div>
                <div class="panel-body">

    <form method = 'get' action = '{!!url("turma")!!}'>
        <button class = 'btn btn-primary'>Voltar</button>
    </form>

 <center> 

<h3>HORÁRIO</h3>

<table class = "table table-striped table-bordered">

    <thead>
               <th style="width:14%">Horário</th>
               <th style="width:14%">Segunda</th>
               <th style="width:14%">Terça</th>
               <th style="width:14%">Quarta</th>
               <th style="width:14%">Quinta</th>
               <th style="width:14%">Sexta</th>
               <th style="width:14%">Sábado</th>
    </thead>

        <tbody align="center">

        <!--Primeiro Horário-->

                <tr>
                    <td>
                    1º Horário
                    </td>

                    <td>
                     <div  class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg1 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter1 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua1 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui1 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex1 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab1 !!}
                    </div>
                    </td>

                </tr>

                <!--Segundo Horário-->

                <tr>

                    <td>
                    2º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg2 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter2 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua2 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui2 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex2 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab2 !!}
                    </div>
                    </td>

                </tr>

                 <!--Terceiro Horário-->

                <tr>

                    <td>
                    3º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg3 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter3 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua3 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui3 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex3 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab3 !!}
                    </div>
                    </td>

                </tr>


 <!--Quarto Horário-->

                <tr>

                    <td>
                    4º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg4 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter4 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua4 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui4 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex4 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab4 !!}
                    </div>
                    </td>

                </tr>


 <!--Quinto Horário-->

                <tr>

                    <td>
                    5º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg5 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter5 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua5 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui5 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex5 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab5 !!}
                    </div>
                    </td>

                </tr>


 <!--Sexto Horário-->

                <tr>

                    <td>
                    6º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! $turma->seg6 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->ter6 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qua6 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->qui6 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sex6 !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! $turma->sab6 !!}
                    </div>
                    </td>

                </tr>


        </tbody>


</table>
</center>  
@endsection