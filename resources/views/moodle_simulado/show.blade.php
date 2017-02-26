@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading">{{$moodle_simulado->nome}}  </br>
                    </div>
                    <div class="panel-body">
<section class="content">
    <form method = 'get' action = '{!!url("moodle_simulado")!!}'>
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
                <td>{!!$moodle_simulado->siem_cod!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Aluno : </i></b>
                </td>
                <td>{!!$moodle_simulado->aluno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Escola : </i></b>
                </td>
                <td>{!!$moodle_simulado->escola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Série : </i></b>
                </td>
                <td>{!!$moodle_simulado->serie!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Simulado : </i></b>
                </td>
                <td>{!!$moodle_simulado->simulado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Cadastro : </i></b>
                </td>
                <td>{!!$moodle_simulado->cadastro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 1 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 2 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 3 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 4 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 5 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 6 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 7 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota7!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 8 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota8!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 9 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota9!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 10 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota10!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 11 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota11!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 12 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota12!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 13 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota13!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 14 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota14!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 15 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota15!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 16 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota16!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 17 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota17!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 18 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota18!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 19 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota19!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nota 20 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota20!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Situação : </i></b>
                </td>
                <td>{!!$moodle_simulado->situacao!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection