@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Tutorial CRUD Laravel 5.2 dengan Materializecss</div>
</div>

<div class="section">
	<div class="row">
	@foreach($datas as $data)
		<div class="col s12">
			<h5>{{ $data->judul }}</h5>

            <div class="divider"></div>
            <p>{!!substr($data->isi,0,200)!!}....</p>
                
            <button class="btn btn-flat pink accent-3 waves-effect waves-light white-text"><a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a></button>
            <button class="btn btn-flat purple darken-4 waves-effect waves-light white-text"><a href="{{ url('edit', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a> </button>
            <button class="btn btn-flat red darken-4 waves-effect waves-light white-text"><a href="{{ url('delete', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a></button>
		</div>
	</div>
	@endforeach
	
{{ $datas->render() }}


<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="{{ url('add') }}" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
  </div>


@endsection