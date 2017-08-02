@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data author
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
				<div class="form-group">
					<label class="control-lable">Nama Author</label>
					<input type="text" name="a" class="form-control" value="{{$author->nama}}" readonly="">
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection