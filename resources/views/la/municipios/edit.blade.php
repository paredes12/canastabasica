@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/municipios') }}">Municipio</a> :
@endsection
@section("contentheader_description", $municipio->$view_col)
@section("section", "Municipios")
@section("section_url", url(config('laraadmin.adminRoute') . '/municipios'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Municipios Edit : ".$municipio->$view_col)

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
				{!! Form::model($municipio, ['route' => [config('laraadmin.adminRoute') . '.municipios.update', $municipio->id ], 'method'=>'PUT', 'id' => 'municipio-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreMunicipio')
					@la_input($module, 'lugar')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/municipios') }}">Cancel</a></button>
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
	$("#municipio-edit-form").validate({
		
	});
});
</script>
@endpush
