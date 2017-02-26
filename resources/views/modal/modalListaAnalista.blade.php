<html lang="en">
    <head>

<script>
   $('#meuModal').on('shown.bs.modal', function () {
     $(this).removeData('bs.modal');
   });
</script>

    </head>
    <body>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title"><strong>Lista Analista</strong></h4>
</div>
<div class="modal-body">
        
<?php

#Seleciona dados da Tabela siem
 try{
    $sql2 ='SELECT * FROM siems;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>

<?php

#Seleciona dados da Tabela Ocupação
try{
    $sql ='SELECT * FROM ocupacaos;';
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>

<form name="funcionarios" method='post' action='{{url("funcionario/reportfuncionario")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">

<tr>
<td align="center">
<div class="panel-group">
    <div class="panel panel-default">
    <div class="panel-heading">
    <label >Selecione uma Ocupação:</label></p>
    <select name="ocupacao" id="select2"> 
 	<option value="ocupacao_id">Todas as Ocupações Cadastradas</option>

    <?php foreach($data as $row) : ?> 
    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option> 
    <?php endforeach ?> 
    </select>
    </div></div></div>
    <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapsef">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapsef" class="panel-collapse collapse">
      <div class="panel-body">

                <div class="panel-group">
                <div class="panel-heading">
                <label >Tipo de Vínculo:</label></p>
                <select name="vinculo" id="select3"> 
                    <option value="funcionarios.vinculo">Todos os Vínculos</option>
                    <option value="'CONCURSADO'">CONCURSADO</option>
                    <option value="'EFETIVO'">EFETIVO</option>
                    <option value="'ESTAGIÁRIO'">ESTAGIÁRIO</option>
                    <option value="'CONTRATADO'">CONTRATADO</option>
                    <option value="'TEMPORARIO'">TEMPORARIO</option>
                    <option value="'REDA'">REDA</option>
                </select>
</p>
                <label >Selecione uma Escola:</label></p>
                <select name="escola" id="select4"> 
                    <option value="siem_id">Todas as Escolas Cadastradas</option>

                <?php foreach($data2 as $row2) : ?> 
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
                <?php endforeach ?> 
                </select>

</div></div></div>

                </table>
                <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" >Cancelar</button>
                            <button type="submit" class="btn btn-primary">Gerar Listagem</button>
                        </div>
                        </div>
                </form>

                        </div>
                        

    </div>
  </div>
</div>