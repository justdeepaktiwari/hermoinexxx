@extends('admin.index')

@section('title', "Payment Received")

@section('action-btn')
@endsection
@section("css")
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

@endsection
@section('content')
<div class="container">
    <div class="row me-auto">
        <table id="tablemanage" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Order By</th>
                    <th>Shipping Details</th>
                    <th>Card Details</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($payments as $payment)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>
                        <p><b>Name: </b> {{$payment->users->name}}</p>
                        <p><b>Email ID: </b> {{$payment->users->email}}</p>

                    </td>
                    <td>{{ $payment->billing_details }}</td>
                    <td>
                        <p>Payment ID: {{$payment->payment_id}}</p>
                        <p>Card Details: ***********{{$payment->last4}}</p>
                        <p>Payment Method: {{$payment->payment_method}}</p>
                        <p>CVC Status: {{ $payment->cvc_check }}</p>
                    </td>
                    <td>{{ $payment->type }}</td>
                    <td>{{ $payment->status }}</td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection

@section("js")
@if ($message = Session::get('success'))
<script>
    tata.success("Success!", '{{$message}}')
</script>
@endif
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
      $('#tablemanage').DataTable();
  });
</script>
@endsection