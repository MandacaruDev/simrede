@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Regras</div>
                <div class="panel-body">

                <form method = 'get' action = '{{url("roles")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            	</form>

			<form action="{{url('roles/store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for=""><Regra></Regra></label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Adicionar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
