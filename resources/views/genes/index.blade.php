@extends('app')

@section('content')
  <a class="btn btn-primary" href="genes/create">Create Gene</a>
  <table class="table table-striped">
  @foreach ($enzymes as $enzyme)
    <tr>
      <td>
        <p>{{ $enzyme->name }}</p>
      </td>
      <td>
        <p>{{ $enzyme->type }}</p>
      </td>
    </tr>
  @endforeach
  </table>
@endsection