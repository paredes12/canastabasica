@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/departamentos') }}">Departamento</a> :
@endsection
@section("contentheader_description", $departamento->$view_col)
@section("section", "Departamentos")
@section("section_url", url(config('laraadmin.adminRoute') . '/departamentos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Departamentos Edit : ".$departamento->$view_col)

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
				{!! Form::model($departamento, ['route' => [config('laraadmin.adminRoute') . '.departamentos.update', $departamento->id ], 'method'=>'PUT', 'id' => 'departamento-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'municipio')
					@la_input($module, 'nombreDepto')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/departamentos') }}">Cancel</a></button>
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
	$("#departamento-edit-form").validate({
		
	});
});
</script>
@endpush
