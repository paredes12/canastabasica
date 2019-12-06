@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/marcas') }}">Marca</a> :
@endsection
@section("contentheader_description", $marca->$view_col)
@section("section", "Marcas")
@section("section_url", url(config('laraadmin.adminRoute') . '/marcas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Marcas Edit : ".$marca->$view_col)

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
				{!! Form::model($marca, ['route' => [config('laraadmin.adminRoute') . '.marcas.update', $marca->id ], 'method'=>'PUT', 'id' => 'marca-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreMarca')
					@la_input($module, 'producto')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/marcas') }}">Cancel</a></button>
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
	$("#marca-edit-form").validate({
		
	});
});
</script>
@endpush
