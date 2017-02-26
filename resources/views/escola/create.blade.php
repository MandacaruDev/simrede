@extends('layouts.app') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Escola</div>
                <div class="panel-body">

                    <form method='get' action='{{url("escola")}}'>
                        <button class='btn btn-danger'>Voltar</button>
                    </form>
                    <br>
                    <form method='POST' action='{{url("escola")}}'>

   @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
    @endif


                        <input type='hidden' name='_token' value='{{Session::token()}}'>


                        <!-- campo verifica usuário logado, identificando quem está inserindo registro -->
                        <?php
                        $usuario_logado = Auth::user()->id;
                        $vinculo = Auth::user()->name;
                        { ?>

                            <div class="form-group">
                                <input type='hidden' value="{{$usuario_logado}}" id="user_id" name="user_id" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type='hidden' value="{{$vinculo}}" id="vinculo" name="vinculo" type="text" class="form-control">
                            </div>


                            <?php } ?>
                            <!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="siem_id">Selecione a Escola</label>
                                        <select class="form-control" name="siem_id" id="select1">
                                <option value=""></option>
                                @foreach($siems as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                                    
                                </select>
                                    </div>

                                </div>
                                <!--/row-->

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
                                        <input id="inep" name="inep" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="cep">Cep</label>
                                            <input id="cep" name="cep" type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <!--/row-->

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="distrito">Distrito</label>
                                        <select class="form-control" name="distrito" id="select2">
                                <option value=""></option>
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
                                            <input id="bairro" name="bairro" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="logradouro">Logradouro</label>
                                        <input id="logradouro" name="logradouro" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="numero">Numero</label>
                                            <input id="numero" name="numero" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input id="complemento" name="complemento" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label for="fone">Fone</label>
                                        <input id="fone" name="fone" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="cel1">Cel1</label>
                                        <input id="cel1" name="cel1" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="cel2">Cel2</label>
                                            <input id="cel2" name="cel2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="sigla">Sigla</label>
                                        <input id="sigla" name="sigla" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="possui_internet_escola">Possui internet na Escola</label>
                                            <select class="form-control" name="possui_internet_escola" id="select2">
                                <option value=""></option>
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
                                        <select class="form-control" name="tipo_internet_escola" id="select11">
                                <option value=""></option>
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
                                            <select class="form-control" name="status_escola" id="select2">
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
                                        <select class="form-control" name="possui_lab" id="select2">
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                    </select>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="possui_analista">Possui Analista</label>
                                            <select class="form-control" name="possui_analista" id="select2">
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Analista em Educação</label>
                                <select name='pessoa_id' style="no" class='form-control' id="select3">
                        <option value="1">NÃO POSSUI</option>
                        @foreach($pessoas->except($pessoas->id=1) as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                            </div>



                            <!--Informações do laboratório-->

                            <div align="center">

                                <hr>
                                <h3>Informações de Material Tecnológicodo e Laboratório de Informática </h3>
                                <hr>
                            </div>

                            <div class="form-group">
                                <label for="tipo_sala">Tipo Sala</label>
                                <select name='tipo_sala' style="no" class='form-control' id="select5">
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="SALA PRÓPRIA">SALA PRÓPRIA</option>
                        <option value="SALA DE AULA COMPARTILHADA">SALA DE AULA COMPARTILHADA</option>
                    </select>


                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="pregao1">Pregao 1</label>
                                        <select name='pregao1' style="no" class='form-control' id="select6">
                        <option value=""></option>
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
                                            <select name='pregao2' style="no" class='form-control' id="select7">
                        <option value=""></option>
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
                                        <select name='pregao3' style="no" class='form-control' id="select8">
                        <option value=""></option>
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
                                            <select name='pregao4' style="no" class='form-control' id="select9">
                        <option value=""></option>
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
                                        <select class="form-control" name="possui_internet_lab" id="select2">
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="tipo_internet_lab">Tipo Internet Lab</label>
                                            <select class="form-control" name="tipo_internet_lab" id="select10">
                                <option value=""></option>
                                <option value="NENHUMA">NENHUMA</option>
                                <option value="CLARO">CLARO</option>
                                <option value="PROJETO BANDA LARGA NAS ESCOLAS">PROJETO BANDA LARGA NAS ESCOLAS</option>
                                <option value="GSAT">GSAT</option>
                                <option value="OUTRO">OUTRO</option>
                                <option value="RÁDIO">RÁDIO</option>
                                <option value="TIM">TIM</option>
                                <option value="VELOX">VELOX</option>
                                <option value="VIVO">VIVO</option>
                                                  
                    </select> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lab_montado">Lab Montado</label>
                                        <select class="form-control" name="lab_montado" id="select2">
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="qt_computadores_lab">Qt. computadores Lab</label>
                                            <input id="qt_computadores_lab" name="qt_computadores_lab" type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="qt_monitores_lab">Qt. Monitores Lab</label>
                                        <input id="qt_monitores_lab" name="qt_monitores_lab" type="number" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="status_lab">Status Lab</label>
                                            <select class="form-control" name="status_lab" id="select2">
                                <option value=""></option>
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
                                        <select class="form-control" name="ar_condicionado_lab" id="select2">
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="impressora_lab">Impressora Lab</label>
                                            <select class="form-control" name="impressora_lab" id="select2">
                                <option value=""></option>
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
                                        <label for="qt_notebook_lab">Qt. Notebooks</label>
                                        <input id="qt_notebook_lab" name="qt_notebook_lab" type="number" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="roteador_lab">Roteador Lab</label>
                                            <select class="form-control" name="roteador_lab" id="select2">
                                <option value=""></option>
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
                                        <input id="qt_projetores" name="qt_projetores" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                            <label for="qt_tablets">Qt. Tablets</label>
                                            <input id="qt_tablets" name="qt_tablets" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <!--/row-->

                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="switch_lab">Switch Lab</label>
                                        <select class="form-control" name="switch_lab" id="select12">
                                <option value=""></option>
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
                                            <input id="qt_cadeiras_lab" name="qt_cadeiras_lab" type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class='btn btn-primary' type='submit'>Salvar</button>


                    </form>


                </div>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">
  jQuery(function($) {
    $("#inep").mask("00000000");
    $("#cep").mask("00.000-000", { placeholder: "  .   -   " });
    $("#cpf").mask("000.000.000-00");
    $("#rg").mask("00.000.000-00");
    $("#fone").mask("(00) 0000-0000");
    $("#cel1").mask("(00) 00000-0000");
    $("#cel2").mask("(00) 00000-0000");
    
  });
</script>


@endsection