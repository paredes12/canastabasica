@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/categorias') }}">Categoria</a> :
@endsection
@section("contentheader_description", $categoria->$view_col)
@section("section", "Categorias")
@section("section_url", url(config('laraadmin.adminRoute') . '/categorias'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Categorias Edit : ".$categoria->$view_col)

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
				{!! Form::model($categoria, ['route' => [config('laraadmin.adminRoute') . '.categorias.update', $categoria->id ], 'method'=>'PUT', 'id' => 'categoria-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreCat')
					@la_input($module, 'marca')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/categorias') }}">Cancel</a></button>
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
	$("#categoria-edit-form").validate({
		
	});
});
</script>
@endpush
