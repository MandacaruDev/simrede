@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Ocupação</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("ocupacao")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            
            <br>
  
    

            <form method = 'POST' action = '{{url("ocupacao")}}'>
   
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
                        $usuario_logado = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="usuario" name = "usuario" type="text" class="form-control">
                </div>

<?php } ?>
        <!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->

          
                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
  
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                    
                    </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection