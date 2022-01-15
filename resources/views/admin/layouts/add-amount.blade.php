@extends('admin.master')

@section('content')
<h2>Donation History</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Division</th>
      <th scope="col">District </th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pin Code </th>
      <th scope="col">Nationality</th>
      <th scope="col">Email</th>
      <th scope="col">Phone </th>
      <th scope="col">Donation</th>
      <th scope="col">NID</th>
      <th scope="col">Credit Card </th>
      <th scope="col">Card Number</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($contacts as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->division}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
