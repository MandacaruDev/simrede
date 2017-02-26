@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Permissão</div>
                <div class="panel-body">
                
			<form method = 'get' action = '{{url("permissions")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>

			<form action="{{url('permissions/store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for="">Permissão</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<!--<div class="box-footer">-->
				<div >
					<button class = 'btn btn-primary' type = "submit">Adicionar</button>
				</div>
			</form>
		</div>
	</div>
@endsection