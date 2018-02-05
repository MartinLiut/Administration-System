@if($message = session('message'))
	<div class="alert alert-success alert-dismissible" style="position: fixed; bottom: 5px; right: 10px; width: auto; padding: 10px">
		<h4 style="margin: 0"><span class="icon fa fa-check"></span> {{$message}}</h4>
	</div>
@endif