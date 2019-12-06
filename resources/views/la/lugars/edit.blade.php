@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/lugars') }}">Lugar</a> :
@endsection
@section("contentheader_description", $lugar->$view_col)
@section("section", "Lugars")
@section("section_url", url(config('laraadmin.adminRoute') . '/lugars'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Lugars Edit : ".$lugar->$view_col)

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
				{!! Form::model($lugar, ['route' => [config('laraadmin.adminRoute') . '.lugars.update', $lugar->id ], 'method'=>'PUT', 'id' => 'lugar-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreLugar')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/lugars') }}">Cancel</a></button>
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
	$("#lugar-edit-form").validate({
		
	});
});
</script>
@endpush
