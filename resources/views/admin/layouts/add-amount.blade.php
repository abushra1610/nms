@extends('admin.master')

@section('content')
<h2>Donation History</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Amount</th>
      <th scope="col">Transactio_ID</th>
      <th scope="col">Payment_Method</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach ($donates as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->amount}}</td>
                <td>{{$contact->transaction_id}}</td>
                <td>{{$contact->payment_method}}</td>
                <td>{{$contact->type}}</td>
                <td>{{$contact->status}}</td>
                <td>{{$contact->action}}</td>
                <td>
                   <a href="{{route('admin.approve',$contact->id)}}" class="btn btn-info">Approve</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
