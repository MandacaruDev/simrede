<?php

#chama o arquivo de configuração com o banco

require_once '/home/aetji649/sglab/connect.php';
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Escola</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("escola")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("escola")}}/{{$escola->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
             
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->


<?php

                        $usuario_logado = Auth::user()->id;
                        $vinculo = Auth::user()->name;



#Seleciona dados da Tabela User
 try{
    $sql2 ='SELECT * FROM users;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}



                      if (Auth::user()->name == "Admin")  
                      
                      { ?>       

                        <div class="form-group">
                        <div class="row">
                            <div align="center" class="col-md-12">
                            <label for="vinculo" >Víncular registro a:</label></br>
<!--<input value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">-->
                            <select name="vinculo" id="select14" require> 
                            <option value="">Escolha um usuário/escola para vincular Registro</option>

                            <?php foreach($data2 as $row2) : ?> 
                            <option value="<?php echo $row2['name']; ?>"><?php echo $row2['name']; ?></option> 
                            <?php endforeach ?> 
                            </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>
                                <div align="center">
                                <button align="center" class = 'btn btn-primary' type ='submit'>Apenas Víncular</button>
                                </div>
                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>
                

                    <?php }  else { ?>



                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>

                
                <div class="form-group">
                    <input type = 'hidden' value= "{{$vinculo}}" id="vinculo" name = "vinculo" type="text" class="form-control">
                </div>
<?php } ?>

<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->

                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="siem_id">Selecione a Escola</label>
                                <select name = 'siem_id' class = "form-control" id="select2">
                                    <option value="{{$escola->siem_id}}">{{$escola->siem->nome}}</option>
                                    @foreach($siems->except($escola->siem_id) as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>
                        <div align="center">
<hr>
                        <h3>Dados da Escola</h3>
<hr>                

                        </div>

                <div class="form-group">

                <div class="row">
                <div class="col-md-6">

                    <label for="inep">Inep</label>
                    <input  id="inep" name = "inep" type="number" value="{{$escola->inep}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">

                    <label for="cep">Cep</label>
                    <input id="cep" name = "cep" value="{{$escola->cep}}" class="form-control">
                
                </div> 
                </div> 
                           
                        </div><!--/row-->
                      
                        </div>                
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                            <label for="distrito">Distrito</label>
                                <select class="form-control" name="distrito" id="select3" >
                                <option value="{{$escola->distrito}}">{{$escola->distrito}}</option>
                                <option value="ABÓBORA">ABÓBORA</option>
                                <option value="ITAMOTINGA">ITAMOTINGA</option>
                                <option value="JUNCO">JUNCO</option>
                                <option value="JUREMAL">JUREMAL</option>
                                <option value="MANDACARU">MANDACARU</option>
                                <option value="MANIÇOBA">MANIÇOBA</option>
                                <option value="MASSAROCA">MASSAROCA</option>
                                <option value="PINHÕES">PINHÕES</option>
                                <option value="SEDE">SEDE</option>
                               
                                </select>
                            </div> 
                           
                <div class="form-group">
                <div class="col-md-6">                   
                <label for="bairro">Bairro</label>
                    <input  id="bairro" name = "bairro" type="text" value="{{$escola->bairro}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                    
                            <label for="logradouro">Logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" value="{{$escola->logradouro}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                                    <label for="numero">Numero</label>
                    <input id="numero" name = "numero" type="text" value="{{$escola->numero}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" name = "complemento" type="text" value="{{$escola->complemento}}" class="form-control">
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    

                    <label for="fone">Fone</label>
                    <input id="fone" name = "fone" type="text" value-"{{$escola->fone}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" value="{{$escola->email}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    
                            <label for="cel1">Cel1</label>
                    <input id="cel1" name = "cel1" type="text" value="{{$escola->cel1}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                <label for="cel2">Cel2</label>
                    <input id="cel2" name = "cel2" type="text" value="{{$escola->cel2}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                 
                    <label for="sigla">Sigla</label>
                    <input id="sigla" name = "sigla" type="text" value="{{$escola->sigla}}" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                 
                
                    <label for="possui_internet_escola">Possui internet na Escola</label>
                    <select class="form-control" name="possui_internet_escola" id="select2" >
                                <option value="{{$escola->possui_internet_escola}}">{{$escola->possui_internet_escola}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                                                             
                    </select>
                    </div>
                    </div>
                    </div>
                    </div>
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">   
                            <label for="tipo_internet_escola">Tipo Internet da Escola</label>
                    <select class="form-control" name="tipo_internet_escola" id="select11" >
                                <option value="{{$escola->tipo_internet_escola}}">{{$escola->tipo_internet_escola}}</option>
                                <option value="NENHUMA">NENHUMA</option>
                                <option value="CLARO">CLARO</option>
                                <option value="PROJETO BANDA LARGA NAS ESCOLAS">PROJETO BANDA LARGA NAS ESCOLAS</option>
                                <option value="GSAT">GSAT</option>
                                <option value="OUTRO">OUTRO</option>
                                <option value="RÁDIO">RÁDIO</option>
                                <option value="TIM">TIM</option>
                                <option value="VELOX">VELOX</option>
                                <option value="VIVO">VIVO</option>
                                                  
                    </select>                
                    </div>
                
                <div class="form-group">
                <div class="col-md-6">   

                    <label for="status_escola">Status Escola</label>
                    <select class="form-control" name="status_escola" id="select2" >
                                <option value="{{$escola->status_escola}}">{{$escola->status_escola}}</option>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                               

                               
                    </select>                
                    </div>
                    </div>
                    </div>
                    </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="possui_lab">Possui Lab</label>
                    <select class="form-control" name="possui_lab" id="select2" >
                                <option value="{{$escola->possui_lab}}">{{$escola->possui_lab}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                    </select> 
                                   </div>


                            <div class="form-group">
                            <div class="col-md-6"> 
                
                    <label for="possui_analista">Possui Analista</label>
                    <select class="form-control" name="possui_analista" id="select2" >
                                <option value="{{$escola->possui_analista}}">{{$escola->possui_analista}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select> 
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                
                
                   <div class="form-group">
    <label>Analista em Educação</label>
    <select name = 'pessoa_id' class = "form-control" id="select4">
        <option value="{{$escola->pessoa_id}}">{{$escola->pessoa->nome}}</option>
        <option value="1">NÃO POSSUI</option>
       @foreach($pessoas->except($escola->pessoa_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


                            <!--Informações do laboratório-->
                                        
<div align="center">
    
                                <hr>
                <h3>Informações do Laboratório de Informática </br> <h5>(<i>Preencher apenas se possuir Laboratório</i>)</h5></h3>
                                <hr>  
</div>             

                <div class="form-group">
                    <label for="tipo_sala">Tipo Sala</label>
                    <select name = 'tipo_sala' style="no" class = 'form-control' id="select5" >
                        <option value="{{$escola->tipo_sala}}">{{$escola->tipo_sala}}</option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="SALA PRÓPRIA">SALA PRÓPRIA</option>
                        <option value="SALA DE AULA COMPARTILHADA">SALA DE AULA COMPARTILHADA</option>
                    </select>


                </div>
                
                
                <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                     
                            <label for="pregao1">Pregao 1</label>
                    <select name = 'pregao1' style="no" class = 'form-control' id="select6" >
                        <option value="{{$escola->pregao1}}">{{$escola->pregao1}}</option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                
                </div>

           
                <div class="form-group">
                            <div class="col-md-6">                     

                    <label for="pregao2">Pregao 2</label>
                    <select name = 'pregao2' style="no" class = 'form-control' id="select7" >
                        <option value="{{$escola->pregao2}}">{{$escola->pregao2}}</option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                    </div>
                    </div>
                    </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-6">                     


                    <label for="pregao3">Pregao 3</label>
                    <select name = 'pregao3' style="no" class = 'form-control' id="select8" >
                        <option value="{{$escola->pregao3}}">{{$escola->pregao3}}</option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                
                <div class="form-group">
                <div class="col-md-6">                     

                    <label for="pregao4">Pregao 4</label>
                    <select name = 'pregao4' style="no" class = 'form-control' id="select9" >
                        <option value="{{$escola->pregao4}}">{{$escola->pregao4}}</option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                    </div>
                    </div>
                    </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-6"> 

                    <label for="possui_internet_lab">Possui Internet no lab</label>
                    <select class="form-control" name="possui_internet_lab" id="select2" >
                                <option value="{{$escola->possui_internet_lab}}">{{$escola->possui_internet_lab}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>               
                    </div>
                
                <div class="form-group">
                <div class="col-md-6"> 

                    <label for="tipo_internet_lab">Tipo Internet Lab</label>
                    <select class="form-control" name="tipo_internet_lab" id="select10" >
                        <option value="{{$escola->tipo_internet_lab}}">{{$escola->tipo_internet_lab}}</option>
                                <option value="NENHUMA">NENHUMA</option>
                                <option value="CLARO">CLARO</option>
                                <option value="PROJETO BANDA LARGA NAS ESCOLAS">PROJETO BANDA LARGA NAS ESCOLAS</option>
                                <option value="GSAT">GSAT</option>
                                <option value="OUTRO">OUTRO</option>
                                <option value="RÁDIO">RÁDIO</option>
                                <option value="TIM">TIM</option>
                                <option value="VELOX">VELOX</option>
                                <option value="VIVO">VIVO</option>
                                                  
                    </select>                        </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                    <label for="lab_montado">Lab Montado</label>
                    <select class="form-control" name="lab_montado" id="select2" >
                        <option value="{{$escola->lab_montado}}">{{$escola->lab_montado}}</option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>          
                                    </div>
                
                <div class="form-group">
                <div class="col-md-6">   

                    <label for="qt_computadores_lab">Qt. computadores Lab</label>
                    <input id="qt_computadores_lab" name = "qt_computadores_lab" type="number" value="{{$escola->qt_computadores_lab}}" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
 <div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                    <label for="qt_monitores_lab">Qt. Monitores Lab</label>
                    <input id="qt_monitores_lab" name = "qt_monitores_lab" type="number" value="{{$escola->qt_monitores_lab}}" class="form-control">
                </div>
                
 <div class="form-group">
                <div class="col-md-6">   
                                    <label for="status_lab">Status Lab</label>
                <select class="form-control" name="status_lab" id="select2" >
                        <option value="{{$escola->status_lab}}">{{$escola->status_lab}}</option>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                </select> 
                                    </div>
                </div>
                </div>
                </div>
                
<div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                                    <label for="ar_condicionado_lab">Ar Condicionado Lab</label>
                    <select class="form-control" name="ar_condicionado_lab" id="select2" >
                                <option value="{{$escola->ar_condicionado_lab}}">{{$escola->ar_condicionado_lab}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>          
                                    </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="impressora_lab">Impressora Lab</label>
                    <select class="form-control" name="impressora_lab" id="select2" >
                        <option value="{{$escola->impressora_lab}}">{{$escola->impressora_lab}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>          
                                    </div>
                </div>
                </div>
                </div>                
<div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                                    <label for="qt_notebook_lab">Qt. Notebook Lab</label>
                    <input id="qt_notebook_lab" name = "qt_notebook_lab" type="number" value="{{$escola->qt_notebook_lab}}" class="form-control">
                </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="roteador_lab">Roteador Lab</label>
                    <select class="form-control" name="roteador_lab" id="select2" >
                                <option value="{{$escola->roteador_lab}}">{{$escola->roteador_lab}}</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               
                    </select>          
                                    </div>
                </div>
                </div>
                </div>                



                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6">

                                        <label for="qt_projetores">Qt. Projetores</label>
                                        <input id="qt_projetores" value="{{$escola->qt_projetores}}" name="qt_projetores" type="number" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="qt_tablets">Qt. Tablets</label>
                                            <input id="qt_tablets" value="{{$escola->qt_tablets}}" name="qt_tablets" type="number" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <!--/row-->

                            </div>










<div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                                    <label for="switch_lab">Switch Lab</label>
                    <select class="form-control" name="switch_lab" id="select12" >
                                <option value="{{$escola->switch_lab}}">{{$escola->switch_lab}}</option>
                                <option value="NÃO POSSUI">NÃO POSSUI</option>
                                <option value="8 PORTAS">8 PORTAS</option>
                                <option value="16 PORTAS">16 PORTAS</option>
                                <option value="24 PORTAS">24 PORTAS</option>
                                <option value="32 PORTAS">32 PORTAS</option>
                                <option value="48 PORTAS">48 PORTAS</option>
                                <option value="+48 PORTAS">+48 PORTAS</option>
                                
                                 
                    </select>          
                                    </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="qt_cadeiras_lab">Qt. Cadeiras Lab</label>
                    <input id="qt_cadeiras_lab" name = "qt_cadeiras_lab" type="number" class="form-control" value="{{$escola->qt_cadeiras_lab}}">
                </div>
                </div>
                </div>
                </div>  
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>


<script type="text/javascript">
  jQuery(function($) {
    $("#inep").mask("00000000");
    $("#numero").mask("999999999");
    $("#cep").mask("00.000-000");
    $("#cpf").mask("000.000.000-00");
    $("#rg").mask("00.000.000-00");
    $("#fone").mask("(00)   0000-0000");
    $("#cel1").mask("(00) 00000-0000");
    $("#cel2").mask("(00) 00000-0000");
    
  });
</script>    
@endsection