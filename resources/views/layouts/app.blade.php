<!DOCTYPE html>
<html lang="en">
<?php

#chama o arquivo de configuração com o banco

require_once '/opt/lampp/htdocs/simrede/connect.php';
@include ('flash::message');
#modals dos relatórios
// require_once '/sglab/resources/views/modals/horario_funcionario.php';
# FIM modals dos relatórios

?>

<head>



<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/skins/_all-skins.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SimRede') }}</title>

    <!-- Styles -->
    <link href="http://aetj.info/sglab/css/app.css" rel="stylesheet">

    <!-- Scripts -->

<script type="text/javascript" src="http://aetj.info/sglab/js/jquery.js"></script>
<script type="text/javascript" src="http://aetj.info/sglab/js/jquery.mask.min.js"></script>


</head>
<body onLoad="setTimeout('enblur()', 500)">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SimRede') }}
                    </a>


                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                 
                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           <!--//-->
                           
                        @elseif (Auth::user()->name == "Report")
                        <!---->
                        @else

                        <?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Cadastrar <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
<!--                                    
                                    <li><a href="{{ url('/escola') }}"><i class="fa glyphicon glyphicon-home"></i>Escolas</a></li>
                                    <li><a href="{{ url('/funcionario') }}"><i class="fa fa-users"></i>Analistas</a></li>
                                    <li><a href="{{ url('/pessoa') }}"><i class="fa glyphicon glyphicon-user"></i>Pessoas</a></li>
                                    <li><a href="{{ url('/turma') }}" ><i class="fa fa-users"></i>Turmas</a></li>-->

                                    <!--submenu horário -->
                                    <!--<li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Horários</a>
                                        <ul class="dropdown-menu">
                                        
                                        <li><a href="{{ url('/horario_funcionario') }}"><i class="fa glyphicon glyphicon-calendar"></i>Analistas</a></li>
                                        <li><a href="{{ url('/turma') }}" ><i class="glyphicon glyphicon-calendar"></i>Turmas</a></li>
                                        
                                        </ul>
                                    </li>-->
                                    <!--submenu horário -->
                                    <!--<li><a href="{{ url('/upload_csv') }}" ><i class="glyphicon glyphicon-upload"></i>Upload</a></li>-->

                        
                                    <!--<li><a href="{{ url('/ocupacao') }}"><i class="fa glyphicon glyphicon-cog"></i>Ocupação</a></li>-->
                                    <!--<li><a href="{{ url('/siem_simrede') }}" ><i class="glyphicon glyphicon-download-alt"></i>Simulado CSV</a></li>-->
                                    <li><a href="{{ url('/siem') }}"><i class="fa glyphicon glyphicon-modal-window"></i>Escola</a></li>
                                    
                        <?php } ?>

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Relatórios <span class="caret"></span>
                                </a>

                                <!--<ul class="dropdown-menu" role="menu">
                                    <li>
                                    
									<li><a data-toggle="modal" href="#escolas"><i class="fa glyphicon glyphicon-home"></i>Lista Escolas</a></li>
									<li><a data-toggle="modal" href="#funcionario"><i class="fa fa-users"></i>Lista Analistas</a></li>
									<li><a data-toggle="modal" href="#laboratorios"><i class="fa glyphicon glyphicon-hdd"></i>Lista Laboratórios</a></li>
                                    
                                    </li>
                                </ul>-->

<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="margin-bottom: 5px; *width: 180px;">
  

  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">Listas</a>
    <ul class="dropdown-menu">
    
    <li><a tabindex="-1" data-toggle="modal" href="#escolas"><i class="fa glyphicon glyphicon-home"></i>Lista Escolas</a></li>
	<!--<li><a tabindex="-1" data-toggle="modal" href="#funcionario"><i class="fa fa-users"></i>Lista Analistas</a></li>
	<li><a tabindex="-1" data-toggle="modal" href="#laboratorios"><i class="fa glyphicon glyphicon-hdd"></i>Lista Laboratórios</a></li>-->
                                   
    </ul>
  </li>
<!--
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">Perfis</a>
    <ul class="dropdown-menu">
    
        <li><a data-toggle="modal" href="#"><i class="fa glyphicon glyphicon-home"></i>Perfil Escolas</a></li>
		<li><a data-toggle="modal" href="#perfilfuncionarios"><i class="fa fa-users"></i>Perfil Analistas</a></li>
		<li><a data-toggle="modal" href="#perfillaboratorios"><i class="fa glyphicon glyphicon-hdd"></i>Perfil Laboratórios</a></li>
                                    
    </ul>
  </li>-->


 
 <!--submenu horário -->
 <!--<li class="dropdown-submenu">
 <a tabindex="-1" href="#">Horários</a>
 <ul class="dropdown-menu">
 
 <li><a data-toggle="modal" data-target="#horario_funcionario" href="#"><i class="fa glyphicon glyphicon-calendar"></i>Horário Analistas</a></li>
 <li><a data-toggle="modal" data-target="#" href="#"><i class="fa glyphicon glyphicon-calendar"></i>Horário Turmas</a></li>
 <li><a data-toggle="modal" data-target="#" href="#"><i class="fa glyphicon glyphicon-calendar"></i>Horário Laboratórios</a></li>
 </ul>
 </li>-->
 <!--submenu horário -->


 <!--submenu Simulados -->
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">Simulados</a>
    <ul class="dropdown-menu">

   
    <li><a href="{{ url('/modal') }}/modalAlunos" data-toggle="modal" data-target="#meuModal"><i class="glyphicon glyphicon-file"></i> Lista de Alunos</a> </li>                                       
    <li><a href="{{ url('/modal') }}/modalGabarito" data-toggle="modal" data-target="#meuModal"><i class="glyphicon glyphicon-file"></i> Gabaritos</a> </li>                                       
    <li><a href="{{ url('/modal') }}/modalMediaRede" data-toggle="modal" data-target="#meuModal"><i class="fa fa-users"></i> Media Rede</a> </li>                                       
        <li><a href="{{ url('/modal') }}/modalMediaEscola" data-toggle="modal" data-target="#meuModal"><i class="fa glyphicon glyphicon-home"></i> Media Escola</a> </li>                                       
        <li><a href="{{ url('/modal') }}/modalMediaTurma" data-toggle="modal" data-target="#meuModal"><i class="fa glyphicon glyphicon-home"></i> Media Turma</a> </li>                                       
        <li><a href="{{ url('/modal') }}/modalMediaAluno" data-toggle="modal" data-target="#meuModal"><i class="fa fa-users"></i> Media Alunos</a> </li>                                       
        
        <!--<li><a data-toggle="modal" href="{{ url('/modal') }}/modalMediaEscola/#modalMediaEscola"><i class="fa glyphicon glyphicon-home"></i>Escolas</a></li>-->
		<!--<li><a data-toggle="modal" href="#"><i class="fa fa-users"></i>Turmas</a></li>-->
                                    
    </ul>
  </li>
 <!--submenu Simulados -->


</ul>


                            </li>
                        @endif
                    </ul>                    
<!--***********************************************Documentos******************************************-->

<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Documentos <span class="caret"></span>
                                </a>


<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="margin-bottom: 5px; *width: 180px;">
  



  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">Tutoriais</a>
    <ul class="dropdown-menu">
        <!--<li><a href="#" target="_blank"><i class="glyphicon glyphicon-file"></i>Enviando Arquivo CSV</a></li>-->
        <li><a href="#" target="_blank"><i class="glyphicon glyphicon-file"></i>Gerando Relatórios</a></li>
        <!--<li><a href="http://aetj.info/downloads/NTM/Caderno do Professor - 2017-compressed.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Caderno do Professor - 2017</a></li>-->
        <!--<li><a href="http://aetj.info/downloads/NTM/compressed-Caderno Ed. Infantil I - 2017.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Caderno Ed. Infantil I - 2017</a></li>
        <li><a href="http://aetj.info/downloads/NTM/compressed-Caderno Ed. Infantil II e III - 2017.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Caderno Ed. Infantil II e III - 2017</a></li>-->
    </ul>
  </li>
<!--
    <li class="dropdown-submenu">
        <a tabindex="-1" href="#">NTM</a>
        <ul class="dropdown-menu">
            <li><a href="http://aetj.info/downloads/NTM/Lei_2335_13.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Lei 2.335_13</a></li>
            <li><a href="http://aetj.info/downloads/NTM/Cargos.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Atribuições do AETJ</a></li>
            <li><a href="http://aetj.info/downloads/NTM/Sala_de_recursos.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Sala de recursos</a></li>
            <li><a href="http://aetj.info/downloads/NTM/PROINFO_urbano.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>PROINFO urbano</a></li>
            <li><a href="http://aetj.info/downloads/NTM/PROINFO_rural.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>PROINFO rural</a></li>
            <li><a href="http://aetj.info/downloads/NTM/TutorialGLPI.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Tutorial GLPI</a></li>
        </ul>
    </li>

    <li class="dropdown-submenu">   
        <a tabindex="-1" href="#">EFEP</a>
        <ul class="dropdown-menu">
            <li><a href="http://aetj.info/downloads/NTM/Lei_2.218_11.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>Lei 2.218_11.pdf</a></li>
            <li><a href="#" target="_blank"><i class="glyphicon glyphicon-file"></i>...</a></li>
        </ul>
    </li>

    <li><a href="http://aetj.info/downloads/NTM/Lei_2605_16.pdf" target="_blank"><i class="glyphicon glyphicon-file"></i>PCCR</a></li>-->

</ul>


                            </li>
                        @endif
                    </ul>                    
<!--***********************************************Documentos******************************************-->

<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Perfis <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    
                                    <li><a data-toggle="modal" href="#perfilescolas"><i class="fa glyphicon glyphicon-home"></i>Perfil Escolas</a></li>
									<li><a data-toggle="modal" href="#perfilfuncionarios"><i class="fa fa-users"></i>Perfil Analistas</a></li>
									<li><a data-toggle="modal" href="#perfillaboratorios"><i class="fa glyphicon glyphicon-hdd"></i>Perfil Laboratórios</a></li>
                                    

                                    </li>
                                </ul>
                            </li>-->
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                            <li><a href="{{ url('/login') }}">...</a></li>

                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}: {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa glyphicon glyphicon-log-out"></i>Sair
                                        </a>

                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                <?php
                $usuario_logado = Auth::user()->name;
                if ($usuario_logado == "Admin") { ?>



                    </ul>


                    <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Usuários <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                <li ><a href="{{url('/users')}}"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
						        <li ><a href="{{url('/roles')}}"><i class="fa fa-user-plus"></i> <span>Regras</span></a></li>
						        <li ><a href="{{url('/permissions')}}"><i class="fa fa-key"></i> <span>Permissões</span></a></li> 

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>


                </div>
            </div>                <?php } ?>

                            
                        @endif
                    </ul>


        </nav>

                        @yield('content')
    </div>

    <!-- Scripts -->



	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->
	<!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios --><!-- Incio dos Modals Relatórios -->


    <!-- escolas -->    <!-- escolas -->     <!-- escolas -->     <!-- escolas -->    <!-- escolas -->
    <!-- escolas -->    <!-- escolas -->     <!-- escolas -->     <!-- escolas -->    <!-- escolas -->
    <!-- escolas -->    <!-- escolas -->     <!-- escolas -->     <!-- escolas -->    <!-- escolas -->
    <!-- escolas -->    <!-- escolas -->     <!-- escolas -->     <!-- escolas -->    <!-- escolas -->
    <!-- escolas -->    <!-- escolas -->     <!-- escolas -->     <!-- escolas -->    <!-- escolas -->



   <!-- modal Lista Escolas -->
	

    <div class="modal fade" id="escolas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i>   Listar Escolas</h4>
      </div>
      <div class="modal-body">

<form name="escola" method="post" action='{{url("escola/reportescola")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<td align="center">
<label >Selecione um Distrito:</label></p>
<select name="distrito" id="select16"> 
 	<option value="distrito">Todos os distritos cadastrados</option>
 	<option value="'ABÓBORA'">ABÓBORA</option>
 	<option value="'ITAMOTINGA'">ITAMOTINGA</option>
 	<option value="'JUNCO'">JUNCO</option>
 	<option value="'JUREMAL'">JUREMAL</option>
 	<option value="'MANDACARU'">MANDACARU</option>
 	<option value="'MANIÇOBA'">MANIÇOBA</option>
 	<option value="'MASSAROCA'">MASSAROCA</option>
 	<option value="'PINHÕES'">PINHÕES</option>
 	<option value="'SEDE'">SEDE</option>
</select>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapse1">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">

<label >Possui Articulador?</label></p>
<select name="articulador" id="articulador"> 
 	<option value="possui_analista">SIM/NÃO</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select></p>
 
<label >Possui Laboratório?</label></p>
<select name="lab" id="lab"> 
 	<option value="possui_lab">SIM/NÃO</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select></p>

<label >Possui Internet?</label></p>
<select name="internet" id="internet"> 
 	<option value="possui_internet_escola">SIM/NÃO</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>
</p>
					</div>

  </td>
 </tr>

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

    
    <!-- FIM escolas -->    <!-- FIM escolas -->     <!-- FIM escolas -->     <!-- FIM escolas -->    <!-- FIM escolas -->
    <!-- FIM escolas -->    <!-- FIM escolas -->     <!-- FIM escolas -->     <!-- FIM escolas -->    <!-- FIM escolas -->
    <!-- FIM escolas -->    <!-- FIM escolas -->     <!-- FIM escolas -->     <!-- FIM escolas -->    <!-- FIM escolas -->
    <!-- FIM escolas -->    <!-- FIM escolas -->     <!-- FIM escolas -->     <!-- FIM escolas -->    <!-- FIM escolas -->
    <!-- FIM escolas -->    <!-- FIM escolas -->     <!-- FIM escolas -->     <!-- FIM escolas -->    <!-- FIM escolas -->



    <!-- funcionarios -->    <!-- funcionarios -->     <!-- funcionarios -->     <!-- funcionarios -->    <!-- funcionarios -->
    <!-- funcionarios -->    <!-- funcionarios -->     <!-- funcionarios -->     <!-- funcionarios -->    <!-- funcionarios -->
    <!-- funcionarios -->    <!-- funcionarios -->     <!-- funcionarios -->     <!-- funcionarios -->    <!-- funcionarios -->
    <!-- funcionarios -->    <!-- funcionarios -->     <!-- funcionarios -->     <!-- funcionarios -->    <!-- funcionarios -->
    <!-- funcionarios -->    <!-- funcionarios -->     <!-- funcionarios -->     <!-- funcionarios -->    <!-- funcionarios -->

<div class="modal fade" id="funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="fa glyphicon glyphicon-th-list"></i>   Listar Analistas</h4>
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

    <!-- FIM funcionarios -->    <!-- FIM funcionarios -->     <!-- FIM funcionarios -->     <!-- FIM funcionarios -->    <!-- FIM funcionarios -->
    <!-- FIM funcionarios -->    <!-- FIM funcionarios -->     <!-- FIM funcionarios -->     <!-- FIM funcionarios -->    <!-- FIM funcionarios -->
    <!-- FIM funcionarios -->    <!-- FIM funcionarios -->     <!-- FIM funcionarios -->     <!-- FIM funcionarios -->    <!-- FIM funcionarios -->
    <!-- FIM funcionarios -->    <!-- FIM funcionarios -->     <!-- FIM funcionarios -->     <!-- FIM funcionarios -->    <!-- FIM funcionarios -->
    <!-- FIM funcionarios -->    <!-- FIM funcionarios -->     <!-- FIM funcionarios -->     <!-- FIM funcionarios -->    <!-- FIM funcionarios -->




    <!-- Laboratórios -->    <!-- Laboratórios -->     <!-- Laboratórios -->     <!-- Laboratórios -->    <!-- Laboratórios -->
    <!-- Laboratórios -->    <!-- Laboratórios -->     <!-- Laboratórios -->     <!-- Laboratórios -->    <!-- Laboratórios -->
    <!-- Laboratórios -->    <!-- Laboratórios -->     <!-- Laboratórios -->     <!-- Laboratórios -->    <!-- Laboratórios -->
    <!-- Laboratórios -->    <!-- Laboratórios -->     <!-- Laboratórios -->     <!-- Laboratórios -->    <!-- Laboratórios -->
    <!-- Laboratórios -->    <!-- Laboratórios -->     <!-- Laboratórios -->     <!-- Laboratórios -->    <!-- Laboratórios -->



     
        <!-- modal form dialog Lista de LABORATÓRIOS -->
	
<div class="modal fade" id="laboratorios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i>   Listar Laboratorios</h4>
      </div>
      <div class="modal-body">

<form name="escola" method="post" action='{{url("escola/reportlaboratorio")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<td align="center">
<label >Selecione um Distrito:</label></p>
<select name="distrito" id="select1"> 
 	<option value="escolas.distrito">Todos os distritos cadastrados</option>
 	<option value="'ABÓBORA'">ABÓBORA</option>
 	<option value="'ITAMOTINGA'">ITAMOTINGA</option>
 	<option value="'JUNCO'">JUNCO</option>
 	<option value="'JUREMAL'">JUREMAL</option>
 	<option value="'MANDACARU'">MANDACARU</option>
 	<option value="'MANIÇOBA'">MANIÇOBA</option>
 	<option value="'MASSAROCA'">MASSAROCA</option>
 	<option value="'PINHÕES'">PINHÕES</option>
 	<option value="'SEDE'">SEDE</option>
</select>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapse10">MAIS FILTROS</a>
      </h5>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">

<label >Possui Articulador?</label></p>
<select name="articulador" id="articulador"> 
 	<option value="possui_analista">SIM/NÃO</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select></p>
 
<label >Possui Internet?</label></p>
<select name="internet" id="internet"> 
 	<option value="possui_internet_escola">SIM/NÃO</option>
 	<option value="'SIM'">SIM</option>
 	<option value="'NÃO'">NÃO</option>
</select>
</p>
					</div>

  </td>
 </tr>

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

    <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->
    <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->
    <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->
    <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->
    <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->     <!-- FIM Laboratórios -->    <!-- FIM Laboratórios -->
    
    <!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->
	<!-- PERFIL --> 	<!-- PERFIL --> 	<!-- PERFIL -->	<!-- PERFIL -->

	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA -->	<!-- PERFIL ESCOLA -->
	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA -->	<!-- PERFIL ESCOLA -->
	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA -->	<!-- PERFIL ESCOLA -->
	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA --> 	<!-- PERFIL ESCOLA -->	<!-- PERFIL ESCOLA -->

  <div class="modal fade" id="perfilescolas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i>  Perfil Escolas</h4>
      </div>
      <div class="modal-body">
<?php

#Seleciona dados da Tabela siems
 try{
    $sql2 ='SELECT * FROM siems;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="perfilescola" method="post" action='{{url("escola/perfilescola")}}'>

      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<td align="center">

 
<label >Selecione uma Escola:</label></p>
<select name="escola" id="select6"> 
 	<option value="siems.id">Todos as Escolas Cadastradas</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
<?php endforeach ?> 
</select></p>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>

     </div>
                        

    </div>
  </div>
</div>

	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA -->	<!-- FIM ESCOLA -->
	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA -->	<!-- FIM ESCOLA -->
	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA -->	<!-- FIM ESCOLA -->
	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA --> 	<!-- FIM ESCOLA -->	<!-- FIM ESCOLA -->


	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->
	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->
	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->
	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS --> 	<!-- FUNCIONARIOS -->	<!-- FUNCIONARIOS -->


   	<div class="modal fade" id="perfilfuncionarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

		 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i>   Perfil Analistas</h4>
      </div>
      <div class="modal-body">

<?php

#Seleciona dados da Tabela PESSOA
 try{
    $sql2 ='SELECT * FROM pessoas order by nome
	;';
    $stmt2 = $conn->prepare($sql2);	
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>

<form name="perfilfuncionario" method="post" action='{{url("funcionario/perfilfuncionario")}}'>

     <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<td align="center">

 
<label >Selecione um Funcionário:</label></p>
<select name="funcionario" id="select7"> 
 	<option value="pessoas.id">Todos os Analistas cadastrados</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
<?php endforeach ?> 
</select> 

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>

		</div>
		
	</div>
	</div>



	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS -->	<!-- PERFIL LABORATORIOS -->
	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS -->	<!-- PERFIL LABORATORIOS -->
	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS -->	<!-- PERFIL LABORATORIOS -->
	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS --> 	<!-- PERFIL LABORATORIOS -->	<!-- PERFIL LABORATORIOS -->



	<div class="modal fade" id="perfillaboratorios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i>   Perfil Laboratórios</h4>
      </div>
      <div class="modal-body">
<?php

#Seleciona dados da Tabela siems
 try{
    $sql2 ='SELECT * FROM siems;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}

?>


<form name="perfillaboratorio" method="post" action='{{url("escola/perfillaboratorio")}}'>

      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<td align="center">

 
<label >Selecione uma Escola:</label></p>
<select name="escola" id="select10"> 
 	<option value="siems.id">Todos as Escolas Cadastradas</option>

<?php foreach($data2 as $row2) : ?> 
    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
<?php endforeach ?> 
</select></p>

  </td>
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Perfil</button>
		</div>
		</div>
</form>

     </div>
                        

    </div>
  </div>




<div class="modal fade" id="horario_funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i> Listar Horário</h4>
      </div>
      <div class="modal-body">

<form name="funcionario" method="post" action='{{url("funcionario/horariofuncionario")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<?php

#Seleciona dados da Tabela siem
 try{
    $sql1 ='SELECT * FROM siems;';
    $stmt1 = $conn->prepare($sql1);
    $stmt1 ->execute();
    $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e1){
    echo 'ERROR: ' . $e1->getMessage();
}
# FIm Seleciona dados da Tabela siem

?>
<td align="center">
                <label >Selecione uma Escola:</label></p>
                <select name="escola" id="select5"> 
                    <option value="siem_id">Horários de Todas as Escolas Cadastradas</option>

                <?php foreach($data1 as $row1) : ?> 
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['nome']; ?></option> 
                <?php endforeach ?> 
                </select>
                </p>

<?php

#Seleciona dados da Tabela pessoa
 try{
    $sql2 ='SELECT * FROM pessoas;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}
# Fim Seleciona dados da Tabela pessoa

?>                
                <label >Selecione um Funcionário:</label></p>
                <select name="funcionario" id="select8"> 
                    <option value="pessoa_id">Horários de Todos Analistas Cadastrados</option>

                <?php foreach($data2 as $row2) : ?> 
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
                <?php endforeach ?> 
                </select>
  </td>
 
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Horário</button>
		 </div>
                        </div>
                </form>

                        </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
 </div>


<!-- Modal -->
    <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Relatórios</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>





</body>

	   
</html>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
		<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script> var baseURL = "{{URL::to('/')}}"</script>
        <script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
        <script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
        <script src="http://aetj.info/sglab/js/app.js"></script>
        