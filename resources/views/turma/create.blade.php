@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Turma</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("turma")}}'>
                <button class = 'btn btn-danger'>Cancelar</button>
            </form>
            <br>

  @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>

  @endif
<center>            
    <form method = 'POST' action = '{!!url("turma")!!}'>


 {!! Session::has('msg') ? Session::get("msg") : '' !!}


        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
       
        <div class="form-group">
        <!--<label for="adicionado_por">adicionado_por</label>-->
            <input type = 'hidden' id="adicionado_por" name = "adicionado_por" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

@if (Auth::user()->name == "Admin")
        
        <div align="center" class="form-group">
            <label>Escola</label>
            <select name = 'siem_id' class = 'form-control' id = "select2" >
                <option value="">Escolha uma Escola para Cadastrar Turma</option>
                @foreach($siems as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div> </p> 

@else

         <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="siem_id" name = "siem_id" value="{{Auth::user()->id}}" type="text" class="form-control">
        </div>

@endif
<h3>TURMA</h3>
<table>
<thead>

<th>
        <div class="form-group">
        <!--<div class="col-md-3">-->

            <label for="turno">Turno</label></br>
            {!! Form::select('turno',  Config::get('enums.turno')) !!}
        </div>
</th>      
<th>
        <div class="form-group">
        <!--<div class="col-md-3">-->

            <label for="nivel">Nivel</label></br>
            {!! Form::select('nivel',  Config::get('enums.nivel')) !!}
        </div>
</th>
<th>
        <div class="form-group">
        <!--<div class="col-md-3">-->

            <label for="serie">Série</label></br>
            {!! Form::select('serie',  Config::get('enums.serie')) !!}
        </div>
</th>
<th>
        <div class="form-group">
        <!--<div class="col-md-3">-->

            <label for="turma">Turma</label></br>
            {!! Form::select('turma',  Config::get('enums.turma')) !!}
        </div>
</th>        
</thead>

</table>
<hr>
<h3>HORÁRIO</h3>

<table class = "table table-striped table-bordered">

    <thead>
               <th style="width:15%">Horário</th>
               <th style="width:15%">Segunda</th>
               <th style="width:15%">Terça</th>
               <th style="width:15%">Quarta</th>
               <th style="width:15%">Quinta</th>
               <th style="width:15%">Sexta</th>
               <th style="width:15%">Sábado</th>
    </thead>

        <tbody>

        <!--Primeiro Horário-->

                <tr>
                    <td>
                    1º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab1',  Config::get('enums.disciplina')) !!}
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
                    {!! Form::select('seg2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab2',  Config::get('enums.disciplina')) !!}
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
                    {!! Form::select('seg3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab3',  Config::get('enums.disciplina')) !!}
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
                    {!! Form::select('seg4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab4',  Config::get('enums.disciplina')) !!}
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
                    {!! Form::select('seg5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab5',  Config::get('enums.disciplina')) !!}
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
                    {!! Form::select('seg6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>


        </tbody>


</table>
</center>            

        <button class = 'btn btn-primary' type ='submit'>Adicionar</button>
       
    </form>
    

@endsection

