@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Escola Municipal {{$siem->nome}}  </br>
  Última Edição: {{$siem->updated_at}}</div>
                <div class="panel-body">


    
                <form method = 'get' action = '{{url("siem")}}'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
                </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Nome</th>
                    <th>Descrição</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Siem : </i></b>
                        </td>
                        <td>{{$siem->siem}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Escola : </i></b>
                        </td>
                        <td>{{$siem->nome}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Tipo : </i></b>
                        </td>
                        <td>{{$siem->tipo_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Cod. Extensão : </i></b>
                        </td>
                        <td>{{$siem->cod_ext}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
 </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
