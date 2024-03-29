@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/canasta_basicas') }}">Canasta Basica</a> :
@endsection
@section("contentheader_description", $canasta_basica->$view_col)
@section("section", "Canasta Basicas")
@section("section_url", url(config('laraadmin.adminRoute') . '/canasta_basicas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Canasta Basicas Edit : ".$canasta_basica->$view_col)

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
				{!! Form::model($canasta_basica, ['route' => [config('laraadmin.adminRoute') . '.canasta_basicas.update', $canasta_basica->id ], 'method'=>'PUT', 'id' => 'canasta_basica-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombreCanasta')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/canasta_basicas') }}">Cancel</a></button>
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
	$("#canasta_basica-edit-form").validate({
		
	});
});
</script>
@endpush
