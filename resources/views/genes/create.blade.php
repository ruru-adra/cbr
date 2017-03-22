@extends('app')

@section('content')
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-9">
    <h3 class="m-t-md">Create New Gene</h3>

    <form method="POST" action="{{ url('genes') }}" class="form-horizontal">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
      </div>

      <div class="form-group">
        <label for="type" class="col-sm-2 control-label">Type of Gene</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="type" placeholder="Type of Gene" name="type">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Create</button>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection