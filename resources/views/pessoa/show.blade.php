@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">{{$pessoa->nome}}  </br> Última Edição: {{$pessoa->updated_at}}
                </div>
                <div class="panel-body">
   
            <form method = 'get' action = '{{url("pessoa")}}'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
            </form>
            <br>
     
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Nome</th>
                </thead>
                <tbody>

                    
   
                    <tr>
                        <td>
                            <b>Vínculo : </b>
                        </td>
                        <td>{{$pessoa->vinculo}}</td>
                    </tr>
                    

                    <tr>
                        <td>
                            <b><i>Nome : </i></b>
                        </td>
                        <td>{{$pessoa->nome}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Cep : </i></b>
                        </td>
                        <td>{{$pessoa->cep}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Distrito : </i></b>
                        </td>
                        <td>{{$pessoa->distrito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Bairro : </i></b>
                        </td>
                        <td>{{$pessoa->bairro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Logradouro : </i></b>
                        </td>
                        <td>{{$pessoa->logradouro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Número : </i></b>
                        </td>
                        <td>{{$pessoa->numero}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Complemento : </i></b>
                        </td>
                        <td>{{$pessoa->complemento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Contatos : </i></b>
                        </td>
                        <td>{{$pessoa->fone}} - {{$pessoa->cel1}} - {{$pessoa->cel2}}</td>
                    </tr>
                    
                    <!--<tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$pessoa->cel1}}</td>
                    </tr>
                    -->
                    <!--<tr>
                        <td>
                            <b><i>cel2 : </i></b>
                        </td>
                        <td>{{$pessoa->cel2}}</td>
                    </tr>-->
                    
                    <tr>
                        <td>
                            <b><i>Email : </i></b>
                        </td>
                        <td>{{$pessoa->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Cpf : </i></b>
                        </td>
                        <td>{{$pessoa->cpf}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Rg : </i></b>
                        </td>
                        <td>{{$pessoa->rg}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nis : </i></b>
                        </td>
                        <td>{{$pessoa->nis}}</td>
                    </tr>

                       <tr>
                        <td>
                            <b><i>Expedicao_rg : </i></b>
                        </td>
                        <td>{{$pessoa->expedicao_rg}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Naturalidade : </i></b>
                        </td>
                        <td>{{$pessoa->naturalidade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nascionalidade : </i></b>
                        </td>
                        <td>{{$pessoa->nascionalidade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nscolaridade : </i></b>
                        </td>
                        <td>{{$pessoa->escolaridade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Data Nascimento : </i></b>
                        </td>
                        <td>{{$pessoa->data_nascimento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nome da Mãe : </i></b>
                        </td>
                        <td>{{$pessoa->nome_mae}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nome Pai : </i></b>
                        </td>
                        <td>{{$pessoa->nome_pai}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection