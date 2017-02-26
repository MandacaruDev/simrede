@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Horário Funcionário</div>
                <div class="panel-body">
    <form method = 'get' action = '{!!url("horario_funcionario")!!}'>
        <button class = 'btn btn-danger'>Cancelar</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("horario_funcionario")!!}/{!!$horario_funcionario->
        id!!}/update'> 

        <!--<input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="seg_m">seg_m</label>
            <input id="seg_m" name = "seg_m" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_m!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_m">ter_m</label>
            <input id="ter_m" name = "ter_m" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_m!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_m">qua_m</label>
            <input id="qua_m" name = "qua_m" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_m!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_m">qui_m</label>
            <input id="qui_m" name = "qui_m" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_m!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_m">sex_m</label>
            <input id="sex_m" name = "sex_m" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_m!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_m">sab_m</label>
            <input id="sab_m" name = "sab_m" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_m!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_m">dom_m</label>
            <input id="dom_m" name = "dom_m" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_m!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_t">seg_t</label>
            <input id="seg_t" name = "seg_t" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_t!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_t">ter_t</label>
            <input id="ter_t" name = "ter_t" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_t!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_t">qua_t</label>
            <input id="qua_t" name = "qua_t" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_t!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_t">qui_t</label>
            <input id="qui_t" name = "qui_t" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_t!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_t">sex_t</label>
            <input id="sex_t" name = "sex_t" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_t!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_t">sab_t</label>
            <input id="sab_t" name = "sab_t" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_t!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_t">dom_t</label>
            <input id="dom_t" name = "dom_t" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_t!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_n">seg_n</label>
            <input id="seg_n" name = "seg_n" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_n!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_n">ter_n</label>
            <input id="ter_n" name = "ter_n" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_n!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_n">qua_n</label>
            <input id="qua_n" name = "qua_n" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_n!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_n">qui_n</label>
            <input id="qui_n" name = "qui_n" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_n!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_n">sex_n</label>
            <input id="sex_n" name = "sex_n" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_n!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_n">sab_n</label>
            <input id="sab_n" name = "sab_n" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_n!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_n">dom_n</label>
            <input id="dom_n" name = "dom_n" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_n!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_c">seg_c</label>
            <input id="seg_c" name = "seg_c" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_c!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_c">ter_c</label>
            <input id="ter_c" name = "ter_c" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_c!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_c">qua_c</label>
            <input id="qua_c" name = "qua_c" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_c!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_c">qui_c</label>
            <input id="qui_c" name = "qui_c" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_c!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_c">sex_c</label>
            <input id="sex_c" name = "sex_c" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_c!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_c">sab_c</label>
            <input id="sab_c" name = "sab_c" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_c!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_c">dom_c</label>
            <input id="dom_c" name = "dom_c" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_c!!}"> 
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = "form-control">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>pessoas Select</label>
            <select name = 'pessoa_id' class = "form-control">
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>-->

                        <input type='hidden' name='_token' value='{{Session::token()}}'>
                        <input type='hidden' name='adicionado_por' value='{{Auth::user()->name}}'>
                        
<!--

@if (Auth::user()->name == "Admin")
                        
                   <div class="form-group">

                            <label>Vincular à</label>
                <select  name='vinculo' class='form-control' id="select1" required>
                <option value="{{$horario_funcionario->vinculo}}">{{$horario_funcionario->vinculo}}</option>
                @foreach($siems as $key => $value)
                <option value="{{$value}}">{{$value}}</option>
                @endforeach

            </select>
            </div>
                        
@else
                        <input type='hidden' name='vinculo' value='{{Auth::user()->name}}'>
@endif

                        <div class="form-group">
                            <label>Selecione a Escola</label>
                            <select name='siem_id' class='form-control' id="select2">
                                    <option value="{{$horario_funcionario->siem_id}}">{{$horario_funcionario->siem->nome}}</option>
                                    @foreach($siems->except($horario_funcionario->siem_id) as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach

            </select>
                        </div>
                        <div class="form-group">
                            <label>Selecione o Analista</label>
                            <select name='pessoa_id' class='form-control' id="select3">
                                    <option value="{{$horario_funcionario->pessoa_id}}">{{$horario_funcionario->pessoa->nome}}</option>
                                    @foreach($pessoas->except($horario_funcionario->pessoa_id) as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
            </select>
                        </div>
                      -->
                      

                        <div align="center"  class="form-group">
                            <label>Lotação</label>
                            <input type="hidden" name='siem_id' class='form-control' value="{{$horario_funcionario->siem->id}}">
                                             <h4 align="center">{{$horario_funcionario->siem->nome}}</h4>

                        </div>
   
                        <div align="center"  class="form-group">
                            <label>Analista</label>
                      
                        <input type="hidden" align="center" name='pessoa_id' class='form-control' value="{{$horario_funcionario->pessoa->id}}">
                                             <h4 align="center">{{$horario_funcionario->pessoa->nome}}</h4>

                        </div>






<!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse-->
<!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse-->

 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <!--<h4 align="center" class="panel-title">
        <button  data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <b>Matutino</b></button>
      </h4>-->
<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Matutino</b></button>
  </div>
</div>
</div>

    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label for="seg_m">Segunda (Manhã)</label>
                                    <input id="seg_m" name="seg_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            seg_m!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ter_m">Terça (Manhã)</label>
                                    <input id="ter_m" name="ter_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            ter_m!!}">
                                </div>
                                <!-- col 4 -->
                            </div>
                            <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qua_m">Quarta (Manhã)</label>
                                    <input id="qua_m" name="qua_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            qua_m!!}">
                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qui_m">Quinta (Manhã)</label>
                                    <input id="qui_m" name="qui_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            qui_m!!}">
                                </div>
                                <!-- col 4 -->
                            </div>
                            <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sex_m">Sexta (Manhã)</label>
                                    <input id="sex_m" name="sex_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            sex_m!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sab_m">Sábado (Manhã)</label>
                                    <input id="sab_m" name="sab_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            sab_m!!}">
                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->


                        <div class="form-group">
                            <!--<label for="dom_m">dom_m</label>-->
                            <input type="hidden" id="dom_m" name="dom_m" type="text" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            dom_m!!}">
                        </div>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <!--<h4 align="center" class="panel-title">
        <button data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <b>Vespertino</b></button>
      </h4>-->

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>Vespertino</b></button>
  </div>
</div>

    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
          
          
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                            <label for="seg_t">Segunda (Tarde)</label>
                            <input id="seg_t" name="seg_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            seg_t!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">

                            <label for="ter_t">Terça (Tarde)</label>
                            <input id="ter_t" name="ter_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            ter_t!!}">

                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_t">Quarta (Tarde)</label>
                            <input id="qua_t" name="qua_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            qua_t!!}">

                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->

                        <div class="row">
                           <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_t">Quinta (Tarde)</label>
                            <input id="qui_t" name="qui_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            qui_t!!}">

                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_t">Sexta (Tarde)</label>
                            <input id="sex_t" name="sex_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sex_t!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_t">Sábado (Tarde)</label>
                            <input id="sab_t" name="sab_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sab_t!!}">

                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->
                            
                        <div class="form-group">
                            <!--<label for="dom_t">dom_t</label>-->
                        <input type="hidden" id="dom_t" name="dom_t" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            dom_t!!}">
             </div>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <!--<h4 align="center" class="panel-title">
        <button data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <b>Noturno</b></button>
      </h4>-->

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>Noturno</b></button>
  </div>
</div>

    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                            <label for="seg_n">Segunda (Noite)</label>
                            <input id="seg_n" name="seg_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            seg_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="ter_n">Terça (Noite)</label>
                            <input id="ter_n" name="ter_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            ter_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_n">Quarta (Noite)</label>
                            <input id="qua_n" name="qua_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            qua_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->
                            

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_n">Quinta (Noite)</label>
                            <input id="qui_n" name="qui_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            qui_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_n">Sexta (Noite)</label>
                            <input id="sex_n" name="sex_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sex_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_n">Sábado (Noite)</label>
                            <input id="sab_n" name="sab_n" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sab_n!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->
                            
                        <div class="form-group">
                            <!--<label for="dom_n">dom_n</label>-->
                            <input id="dom_n" name="dom_n" type="hidden" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            dom_n!!}">
                        </div>


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <!--<h4 align="center" class="panel-title">
        <button  data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <b>Corrido</b></button>
      </h4>-->
<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button"  class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapse4"><b>Corrido</b></button>
  </div>
</div>

    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="seg_c">Segunda (Corrido)</label>
                            <input id="seg_c" name="seg_c" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            seg_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="ter_c">Terça (Corrido)</label>
                            <input id="ter_c" name="ter_c" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            ter_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_c">Quarta (Corrido)</label>
                            <input id="qua_c" name="qua_c" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            qua_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_c">Quinta (Corrido)</label>
                            <input id="qui_c" name="qui_c" type="text"  placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            qui_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_c">Sexta (Corrido)</label>
                            <input id="sex_c" name="sex_c" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sex_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_c">Sábado (Corrido)</label>
                            <input id="sab_c" name="sab_c" type="text" placeholder="00:00 às 00:00"  class="form-control" value="{!!$horario_funcionario->
            sab_c!!}">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->

                            <div class="form-group">
                            <!--<label for="dom_c">dom_c</label>-->
                            <input id="dom_c" name="dom_c" type="hidden" placeholder="00:00 às 00:00" class="form-control" value="{!!$horario_funcionario->
            dom_c!!}">
                            </div>

      </div>
    </div>
  </div>

</div> 

                        <button class='btn btn-primary' type='submit'>Atualizar</button>
                    </form>

<!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse-->
<!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse--><!--Colapse-->



                </div>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">
  jQuery(function($) {
    $("#seg_m").mask("99:99 às 99:99");
    $("#ter_m").mask("99:99 às 99:99");
    $("#qua_m").mask("99:99 às 99:99");
    $("#qui_m").mask("99:99 às 99:99");
    $("#sex_m").mask("99:99 às 99:99");
    $("#sab_m").mask("99:99 às 99:99");
    
    $("#seg_t").mask("99:99 às 99:99");
    $("#ter_t").mask("99:99 às 99:99");
    $("#qua_t").mask("99:99 às 99:99");
    $("#qui_t").mask("99:99 às 99:99");
    $("#sex_t").mask("99:99 às 99:99");
    $("#sab_t").mask("99:99 às 99:99");

    $("#seg_n").mask("99:99 às 99:99");
    $("#ter_n").mask("99:99 às 99:99");
    $("#qua_n").mask("99:99 às 99:99");
    $("#qui_n").mask("99:99 às 99:99");
    $("#sex_n").mask("99:99 às 99:99");
    $("#sab_n").mask("99:99 às 99:99");

    $("#seg_c").mask("99:99 às 99:99");
    $("#ter_c").mask("99:99 às 99:99");
    $("#qua_c").mask("99:99 às 99:99");
    $("#qui_c").mask("99:99 às 99:99");
    $("#sex_c").mask("99:99 às 99:99");
    $("#sab_c").mask("99:99 às 99:99");
    
  });
</script> 

@endsection