@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading">{{$siem_simrede->nome}}  </br>
                    </div>
                    <div class="panel-body">
<section class="content">
    <form method = 'get' action = '{!!url("siem_simrede")!!}'>
        <button class = 'btn btn-primary'>Voltar</button>
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
                    <b><i>SIEM : </i></b>
                </td>
                <td>{!!$siem_simrede->codsiem!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Aluno : </i></b>
                </td>
                <td>{!!$siem_simrede->nmaluno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Escola : </i></b>
                </td>
                <td>{!!$siem_simrede->nmescola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Série : </i></b>
                </td>
                <td>{!!$siem_simrede->serie!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Simulado : </i></b>
                </td>
                <td>{!!$siem_simrede->simulado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Cadastro : </i></b>
                </td>
                <td>{!!$siem_simrede->datacad!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 1 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 2 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 3 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 4 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 5 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 6 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 7 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota7!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 8 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota8!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 9 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota9!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 10 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota10!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 11 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota11!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 12 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota12!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 13 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota13!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 14 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota14!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 15 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota15!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 16 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota16!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 17 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota17!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 18 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota18!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 19 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota19!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 20 : </i></b>
                </td>
                <td>{!!$siem_simrede->nota20!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Situação : </i></b>
                </td>
                <td>{!!$siem_simrede->situacao!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection