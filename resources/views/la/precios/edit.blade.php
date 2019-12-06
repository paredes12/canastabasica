@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/precios') }}">Precio</a> :
@endsection
@section("contentheader_description", $precio->$view_col)
@section("section", "Precios")
@section("section_url", url(config('laraadmin.adminRoute') . '/precios'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Precios Edit : ".$precio->$view_col)

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
				{!! Form::model($precio, ['route' => [config('laraadmin.adminRoute') . '.precios.update', $precio->id ], 'method'=>'PUT', 'id' => 'precio-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'mayor')
					@la_input($module, 'menor')
					@la_input($module, 'normal')
					@la_input($module, 'descuento')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/precios') }}">Cancel</a></button>
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
	$("#precio-edit-form").validate({
		
	});
});
</script>
@endpush
