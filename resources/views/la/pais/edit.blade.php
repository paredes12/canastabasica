@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pais') }}">Pai</a> :
@endsection
@section("contentheader_description", $pai->$view_col)
@section("section", "Pais")
@section("section_url", url(config('laraadmin.adminRoute') . '/pais'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pais Edit : ".$pai->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($pai, ['route' => [config('laraadmin.adminRoute') . '.pais.update', $pai->id ], 'method'=>'PUT', 'id' => 'pai-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombrePais')
					@la_input($module, 'departamento')
					@la_input($module, 'canastabasicas')
					@la_input($module, 'marca')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pais') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#pai-edit-form").validate({
		
	});
});
</script>
@endpush
