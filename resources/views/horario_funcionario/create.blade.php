@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Horário Analista</div>
                <div class="panel-body">
                    <form method='get' action='{!!url("horario_funcionario")!!}'>
                        <button class='btn btn-danger'>Voltar</button>
                    </form>
                    <br>
                    <form method='POST' action='{!!url("horario_funcionario")!!}'>
                        <input type='hidden' name='_token' value='{{Session::token()}}'>
                        <input type='hidden' name='adicionado_por' value='{{Auth::user()->name}}'>

@if (Auth::user()->name == "Admin")
                        
                <div align="center" class="form-group">
                <label>Selecione a Escola</label>
                <select name='siem_id' class='form-control' id="select2" required>
                    <option value="">Selecione a Escola</option>
                    @foreach($siems as $key => $value) 
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
                        
@else
            <input type = 'hidden' id="siem_id" name = "siem_id" value="{{Auth::user()->id}}" type="text" class="form-control">

@endif
                   
                <div align="center"  class="form-group">
                <!--<label>Selecione o Analista</label>-->
                <select name='pessoa_id' class='form-control' id="select3" required>
                    <option value="">Selecione o Analista</option>
                    @foreach($pessoas as $key => $value) 
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach 
                </select>
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
                                    <input id="seg_m" name="seg_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ter_m">Terça (Manhã)</label>
                                    <input id="ter_m" name="ter_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div>
                                <!-- col 4 -->
                            </div>
                            <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qua_m">Quarta (Manhã)</label>
                                    <input id="qua_m" name="qua_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qui_m">Quinta (Manhã)</label>
                                    <input id="qui_m" name="qui_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div>
                                <!-- col 4 -->
                            </div>
                            <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sex_m">Sexta (Manhã)</label>
                                    <input id="sex_m" name="sex_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sab_m">Sábado (Manhã)</label>
                                    <input id="sab_m" name="sab_m" type="text" placeholder="00:00 às 00:00" class="form-control">
                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->


                        <div class="form-group">
                            <!--<label for="dom_m">dom_m</label>-->
                            <input type="hidden" id="dom_m" name="dom_m" type="text" placeholder="00:00 às 00:00" class="form-control">
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
                            <input id="seg_t" name="seg_t" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">

                            <label for="ter_t">Terça (Tarde)</label>
                            <input id="ter_t" name="ter_t" type="text" placeholder="00:00 às 00:00"  class="form-control">

                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_t">Quarta (Tarde)</label>
                            <input id="qua_t" name="qua_t" type="text" placeholder="00:00 às 00:00"  class="form-control">

                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->

                        <div class="row">
                           <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_t">Quinta (Tarde)</label>
                            <input id="qui_t" name="qui_t" type="text" placeholder="00:00 às 00:00"  class="form-control">

                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_t">Sexta (Tarde)</label>
                            <input id="sex_t" name="sex_t" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_t">Sábado (Tarde)</label>
                            <input id="sab_t" name="sab_t" type="text" placeholder="00:00 às 00:00"  class="form-control">

                                </div><!-- col 4 -->
                            </div><!-- form group -->
                        </div><!-- row -->
                            
                        <div class="form-group">
                            <!--<label for="dom_t">dom_t</label>-->
                        <input type="hidden" id="dom_t" name="dom_t" type="text" placeholder="00:00 às 00:00"  class="form-control">
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
                            <input id="seg_n" name="seg_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="ter_n">Terça (Noite)</label>
                            <input id="ter_n" name="ter_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_n">Quarta (Noite)</label>
                            <input id="qua_n" name="qua_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->
                            

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_n">Quinta (Noite)</label>
                            <input id="qui_n" name="qui_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_n">Sexta (Noite)</label>
                            <input id="sex_n" name="sex_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->

                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_n">Sábado (Noite)</label>
                            <input id="sab_n" name="sab_n" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->
                            
                        <div class="form-group">
                            <!--<label for="dom_n">dom_n</label>-->
                            <input id="dom_n" name="dom_n" type="hidden" placeholder="00:00 às 00:00"  class="form-control">
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
                            <input id="seg_c" name="seg_c" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="ter_c">Terça (Corrido)</label>
                            <input id="ter_c" name="ter_c" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qua_c">Quarta (Corrido)</label>
                            <input id="qua_c" name="qua_c" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="qui_c">Quinta (Corrido)</label>
                            <input id="qui_c" name="qui_c" type="text"  placeholder="00:00 às 00:00" class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sex_c">Sexta (Corrido)</label>
                            <input id="sex_c" name="sex_c" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                            <div class="col-md-4">
                                <div class="form-group">
                            <label for="sab_c">Sábado (Corrido)</label>
                            <input id="sab_c" name="sab_c" type="text" placeholder="00:00 às 00:00"  class="form-control">
                                </div> <!-- col 4 -->
                            </div> <!-- form group -->
                        </div><!-- row -->

                            <div class="form-group">
                            <!--<label for="dom_c">dom_c</label>-->
                            <input id="dom_c" name="dom_c" type="hidden" placeholder="00:00 às 00:00" class="form-control">
                            </div>

      </div>
    </div>
  </div>

</div> 

                        <button class='btn btn-primary' type='submit'>Salvar</button>
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