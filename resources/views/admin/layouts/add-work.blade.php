@extends('admin.master')
@section('content')



<form action="{{route('work.store')}}"method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <label for="list">List:</label>
        <input type="text" class="form-control" name="list" id="list">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
</form>



@endsection
