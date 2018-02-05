@if (count($errors))
<div class="alert alert-danger alert-dismissible" style="position: fixed; bottom: 5px; right: 10px; width: auto; padding: 10px">
	<ul style="list-style: none; padding: 0">
	@foreach($errors->all() as $error) 
	<li><h4 style="margin: 0"><span class="icon fa fa-close"></span> {{$error}}</h4></li>
	@endforeach
	</ul>
</div>
@endif