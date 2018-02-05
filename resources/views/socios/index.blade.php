@extends('layouts.master')

@section('title', 'Socios')

@section('content')
<div class="row">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="box box-primary">
			<div class="box-header with-border text-center">
				<h2 style="margin: 0">Socios</h2>
			</div>
			<form action="/socios" method="POST">
				{{ csrf_field() }}
				<div class="box-body" style="padding: 10px 50px">
					<div class="row">
						<div class="col-xs-12 col-md-10 col-md-offset-1">
							<div class="form-group">
								<span class="fa fa-asterisk"></span><label for="name"> Nombre</label>
								<input type="text" name="name" id="name" class="form-control" required>
							</div>
							<div class="form-group">
								<span class="fa fa-asterisk"></span><label for="surname">Apellido</label>
								<input type="text" name="surname" id="surname" class="form-control" required>
							</div>
							<div class="form-group">
								<span class="fa fa-asterisk"></span><label for="email">E-mail</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-at"></i>
									</div>
									<input type="email" name="email" id="email" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<span class="fa fa-asterisk"></span><label for="datepicker">Fecha de nacimiento</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="birthday" placeholder="Ej: 1990/10/10" class="form-control pull-right" id="datepicker">
								</div>
							</div>
							<div class="form-group">
								<span class="fa fa-asterisk"></span><label for="document">Documento</label>
								<input type="text" name="document" id="document" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer text-right">
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('javascript')
	<script>
		$(document).ready(function() {
			$('input[name="name"]').focus();

			$('#datepicker').datepicker({
				format: 'yyyy/mm/dd'
			});
		})
	</script>
@endsection