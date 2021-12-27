@extends('admin.master')
@section('content')



<form action="{{route('scholarship.store')}}"method="post">
    @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control"  required name="name" id="name">
      </div>
       <div class="form-group">
        <label for="list">Address:</label>
        <input type="text" class="form-control"  required name="address" id="list">
      </div>
      <div class="form-group">
        <label for="name">Contact Number:</label>
        <input type="text" class="form-control" required  name="contact" id="name">
      </div>
      <div class="form-group">
        <label for="list">Institution Name:</label>
        <input type="text" class="form-control"  required name="institution" id="name">
      </div>
      <div class="form-group">
        <label for="list">Scholarship Type:</label>
        <input type="text" class="form-control"  required name="scholarship" id="name">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
</form>



@endsection