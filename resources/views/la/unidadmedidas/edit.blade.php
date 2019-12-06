@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/unidadmedidas') }}">UnidadMedida</a> :
@endsection
@section("contentheader_description", $unidadmedida->$view_col)
@section("section", "UnidadMedidas")
@section("section_url", url(config('laraadmin.adminRoute') . '/unidadmedidas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "UnidadMedidas Edit : ".$unidadmedida->$view_col)

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
				{!! Form::model($unidadmedida, ['route' => [config('laraadmin.adminRoute') . '.unidadmedidas.update', $unidadmedida->id ], 'method'=>'PUT', 'id' => 'unidadmedida-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreUnidad')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/unidadmedidas') }}">Cancel</a></button>
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
	$("#unidadmedida-edit-form").validate({
		
	});
});
</script>
@endpush
