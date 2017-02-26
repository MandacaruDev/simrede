@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show modal
    </h1>
    <br>
    <form method = 'get' action = '{!!url("modal")!!}'>
        <button class = 'btn btn-primary'>modal Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>ano : </i></b>
                </td>
                <td>{!!$modal->anulada->ano!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>simulado : </i></b>
                </td>
                <td>{!!$modal->anulada->simulado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nivel : </i></b>
                </td>
                <td>{!!$modal->anulada->nivel!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq1 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq2 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq3 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq4 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq5 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq6 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq7 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq7!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq8 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq8!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq9 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq9!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq10 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq10!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq11 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq11!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq12 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq12!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq13 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq13!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq14 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq14!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq15 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq15!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq16 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq16!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq17 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq17!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq18 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq18!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq19 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq19!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>anuq20 : </i></b>
                </td>
                <td>{!!$modal->anulada->anuq20!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>usuario : </i></b>
                </td>
                <td>{!!$modal->ocupacao->usuario!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$modal->ocupacao->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$modal->ocupacao->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$modal->ocupacao->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>vinculo : </i></b>
                </td>
                <td>{!!$modal->pessoa->vinculo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$modal->pessoa->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cep : </i></b>
                </td>
                <td>{!!$modal->pessoa->cep!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>distrito : </i></b>
                </td>
                <td>{!!$modal->pessoa->distrito!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>bairro : </i></b>
                </td>
                <td>{!!$modal->pessoa->bairro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logradouro : </i></b>
                </td>
                <td>{!!$modal->pessoa->logradouro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>numero : </i></b>
                </td>
                <td>{!!$modal->pessoa->numero!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>complemento : </i></b>
                </td>
                <td>{!!$modal->pessoa->complemento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>fone : </i></b>
                </td>
                <td>{!!$modal->pessoa->fone!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cel1 : </i></b>
                </td>
                <td>{!!$modal->pessoa->cel1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cel2 : </i></b>
                </td>
                <td>{!!$modal->pessoa->cel2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$modal->pessoa->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cpf : </i></b>
                </td>
                <td>{!!$modal->pessoa->cpf!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>rg : </i></b>
                </td>
                <td>{!!$modal->pessoa->rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>expedicao_rg : </i></b>
                </td>
                <td>{!!$modal->pessoa->expedicao_rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nis : </i></b>
                </td>
                <td>{!!$modal->pessoa->nis!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>data_nascimento : </i></b>
                </td>
                <td>{!!$modal->pessoa->data_nascimento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome_mae : </i></b>
                </td>
                <td>{!!$modal->pessoa->nome_mae!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome_pai : </i></b>
                </td>
                <td>{!!$modal->pessoa->nome_pai!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$modal->pessoa->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$modal->pessoa->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>usuario : </i></b>
                </td>
                <td>{!!$modal->siem->usuario!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>siem : </i></b>
                </td>
                <td>{!!$modal->siem->siem!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$modal->siem->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tipo_escola : </i></b>
                </td>
                <td>{!!$modal->siem->tipo_escola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cod_ext : </i></b>
                </td>
                <td>{!!$modal->siem->cod_ext!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$modal->siem->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$modal->siem->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$modal->user->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$modal->user->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>password : </i></b>
                </td>
                <td>{!!$modal->user->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>remember_token : </i></b>
                </td>
                <td>{!!$modal->user->remember_token!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$modal->user->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$modal->user->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection