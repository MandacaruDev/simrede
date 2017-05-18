@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create siem_simrede
    </h1>
    <form method = 'get' action = '{!!url("siem_simrede")!!}'>
        <button class = 'btn btn-danger'>siem_simrede Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("siem_simrede")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="codsiem">codsiem</label>
            <input id="codsiem" name = "codsiem" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nmaluno">nmaluno</label>
            <input id="nmaluno" name = "nmaluno" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nmescola">nmescola</label>
            <input id="nmescola" name = "nmescola" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="serie">serie</label>
            <input id="serie" name = "serie" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="simulado">simulado</label>
            <input id="simulado" name = "simulado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="datacad">datacad</label>
            <input id="datacad" name = "datacad" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota1">nota1</label>
            <input id="nota1" name = "nota1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota2">nota2</label>
            <input id="nota2" name = "nota2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota3">nota3</label>
            <input id="nota3" name = "nota3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota4">nota4</label>
            <input id="nota4" name = "nota4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota5">nota5</label>
            <input id="nota5" name = "nota5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota6">nota6</label>
            <input id="nota6" name = "nota6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota7">nota7</label>
            <input id="nota7" name = "nota7" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota8">nota8</label>
            <input id="nota8" name = "nota8" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota9">nota9</label>
            <input id="nota9" name = "nota9" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota10">nota10</label>
            <input id="nota10" name = "nota10" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota11">nota11</label>
            <input id="nota11" name = "nota11" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota12">nota12</label>
            <input id="nota12" name = "nota12" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota13">nota13</label>
            <input id="nota13" name = "nota13" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota14">nota14</label>
            <input id="nota14" name = "nota14" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota15">nota15</label>
            <input id="nota15" name = "nota15" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota16">nota16</label>
            <input id="nota16" name = "nota16" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota17">nota17</label>
            <input id="nota17" name = "nota17" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota18">nota18</label>
            <input id="nota18" name = "nota18" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota19">nota19</label>
            <input id="nota19" name = "nota19" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nota20">nota20</label>
            <input id="nota20" name = "nota20" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="situacao">situacao</label>
            <input id="situacao" name = "situacao" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection