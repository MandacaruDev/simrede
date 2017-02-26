@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Escola Municipal: {{$escola->siem->nome}}  </br>
  Última Edição: {{$escola->updated_at}}</div>
                <div class="panel-body">

    
                    
            <form method = 'get' action = '{{url("escola")}}'>
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
                            <b>Vínculo : </b>
                        </td>
                        <td>{{$escola->vinculo}}</td>
                    </tr>
                    
 <tr>
                        <td>
                            <b><i>Número Siem : </i><b>
                        </td>
                        <td>{{$escola->siem->siem}}</td>
                        </tr>


                    <tr>
                        <td>
                            <b><i>Inep : </i></b>
                        </td>
                        <td>{{$escola->inep}}</td>
                    </tr>
                
                       
                        <tr>
                        <td>
                            <b><i>Escola : </i><b>
                        </td>
                        <td>{{$escola->siem->nome}}</td>
                        </tr>
                                            
                        <tr>
                        <td>
                            <b><i>Analista em Educação : </i><b>
                        </td>
                        <td>{{$escola->pessoa->nome}}</td>
                        </tr>
                        

                    <tr>
                        <td>
                            <b><i>Pregão Lab : </i></b>
                        </td>
                        <td>{{$escola->pregao1}} {{$escola->pregao2}} {{$escola->pregao3}} {{$escola->pregao4}}
                        </td>
                    </tr>
                    
                    <!--<tr>
                        <td>
                            <b><i>Pregao2 : </i></b>
                        </td>
                        <td>{{$escola->Pregao2}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Pregao3 : </i></b>
                        </td>
                        <td>{{$escola->Pregao3}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Pregao4 : </i></b>
                        </td>
                        <td>{{$escola->Pregao4}}</td>
                    </tr>-->


                    <tr>
                        <td>
                            <b><i>Cep : </i></b>
                        </td>
                        <td>{{$escola->cep}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Distrito : </i></b>
                        </td>
                        <td>{{$escola->distrito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Bairro : </i></b>
                        </td>
                        <td>{{$escola->bairro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Logradouro : </i></b>
                        </td>
                        <td>{{$escola->logradouro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Numero : </i></b>
                        </td>
                        <td>{{$escola->numero}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Complemento : </i></b>
                        </td>
                        <td>{{$escola->complemento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fone : </i></b>
                        </td>
                        <td>{{$escola->fone}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Email : </i></b>
                        </td>
                        <td>{{$escola->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$escola->cel1}} {{$escola->cel2}}</td>
                    </tr>
                    
                    <!--<tr>
                        <td>
                            <b><i>cel2 : </i></b>
                        </td>
                        <td>{{$escola->cel2}}</td>
                    </tr>-->
                    
                    <tr>
                        <td>
                            <b><i>Sigla : </i></b>
                        </td>
                        <td>{{$escola->sigla}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Possui Internet na Escola : </i></b>
                        </td>
                        <td>{{$escola->possui_internet_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Tipo de Internet Escola : </i></b>
                        </td>
                        <td>{{$escola->tipo_internet_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Status Escola : </i></b>
                        </td>
                        <td>{{$escola->status_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Possui Lab : </i></b>
                        </td>
                        <td>{{$escola->possui_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Possui Analista : </i></b>
                        </td>
                        <td>{{$escola->possui_analista}}</td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <b><i>Tipo  Sala Lab : </i></b>
                        </td>
                        <td>{{$escola->tipo_sala}}</td>
                    </tr>
                    
                   
                    
                    <tr>
                        <td>
                            <b><i>Possui Internet Lab : </i></b>
                        </td>
                        <td>{{$escola->possui_internet_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Tipo Internet Lab : </i></b>
                        </td>
                        <td>{{$escola->tipo_internet_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Lab  Montado : </i></b>
                        </td>
                        <td>{{$escola->lab_montado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Qt. Computadores Lab : </i></b>
                        </td>
                        <td>{{$escola->qt_computadores_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Qt. Monitores Lab : </i></b>
                        </td>
                        <td>{{$escola->qt_monitores_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Status Lab : </i></b>
                        </td>
                        <td>{{$escola->status_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Ar Condicionado Lab : </i></b>
                        </td>
                        <td>{{$escola->ar_condicionado_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Impressora Lab : </i></b>
                        </td>
                        <td>{{$escola->impressora_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Qt Notebooks : </i></b>
                        </td>
                        <td>{{$escola->qt_notebook_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Roteador Lab : </i></b>
                        </td>
                        <td>{{$escola->roteador_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Switch Lab : </i></b>
                        </td>
                        <td>{{$escola->switch_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Qt Cadeiras Lab : </i></b>
                        </td>
                        <td>{{$escola->qt_cadeiras_lab}}</td>
                    </tr>
                    

                        
                        
                        <tr>
                        <td>
                            <b><i>Tipo Escola : </i><b>
                        </td>
                        <td>{{$escola->siem->escola_tipo}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cod_ext : </i><b>
                        </td>
                        <td>{{$escola->siem->cod_ext}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Adicionado em : </i><b>
                        </td>
                        <td>{{$escola->created_at}}</td>
                        </tr>

                        <tr>
                        <td>
                            <b><i>Atualizado em : </i><b>
                        </td>
                        <td>{{$escola->updated_at}}</td>
                        </tr>
                        
                        
                                                
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
