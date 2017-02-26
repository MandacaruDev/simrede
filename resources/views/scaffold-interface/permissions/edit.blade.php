@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Permissão</div>
                <div class="panel-body">
			<form method = 'get' action = '{{url("permissions")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>

			<form action="{{url('permissions/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "permission_id" value = "{{$permission->id}}">
				<div class="form-group">
				<label for="">permission</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name" value = "{{$permission->name}}">
				</div>
				<div >
					<button class = 'btn btn-primary' type = "submit">Atualizar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
