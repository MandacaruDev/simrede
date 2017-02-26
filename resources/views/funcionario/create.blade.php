@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Funcionário</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("funcionario")}}'>

@if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
@endif            
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
   
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<?php
                        $usuario_logado = Auth::user()->id;
                        $adicionado_por = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <input type = 'hidden' value= "{{$adicionado_por}}" id="adicionado_por" name = "adicionado_por" type="text" class="form-control">
                </div>
                

<?php } ?>
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
 
 <?php
 if (Auth::user()->name == "Admin") { ?>
                
                <div class="form-group">
                    <label>Escola</label>
                    <select required name = 'siem_id' class = 'form-control' id="select1">
                        <option value=""></option>
          
                        @foreach($siems as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
<?php }  else { ?>

                <div class="form-group">
                    <input type = 'hidden' value= "{{ Auth::user()->id }}" id="siem_id" name = "siem_id" type="text" class="form-control">
                </div>
                
<?php } ?>

                <div class="form-group">
                    <label>Ocupacão</label>
                    <select required name = 'ocupacao_id' class = 'form-control' id="select2">
                        <option value=""></option>
                        @foreach($ocupacaos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Funcionário</label>
                    <select required name = 'pessoa_id' class = 'form-control' id="select3">
                        <option value=""></option>
                        @foreach($pessoas->except($pessoas->id=1) as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                            <label for="vinculo">Vínculo</label>
                    <select name = 'vinculo' class = 'form-control' required>
                        <option value=""></option>
                        <option value="CONTRATADO">CONTRATADO</option>
                        <option value="EFETIVO">EFETIVO</option>
                        <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                        <option value="CONCURSADO">CONCURSADO</option>
                        <option value="TEMPORÁRIO">TEMPORÁRIO</option>
                    </select>
                </div>
           
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="status_funcionario">status_funcionario</label>
                    <select name = 'status_funcionario' class = 'form-control' required>
                        <option value="ATIVO">ATIVO</option>
                        <option value="INATIVO">INATIVO</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    </div>
           
                

                
                <button class = 'btn btn-primary' type ='submit'>Salvar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection