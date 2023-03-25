@extends('admin.index')

@section('title', "Payment")

@section('action-btn')
@endsection

@section('content')
<div class="container">
    <div class="col-md-6 me-auto">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>User Details</th>
                <th>Billing Details</th>
                <th>Card Details</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($payments as $payment)
            <tr>
                <td>{{ ++$i }}</td>
                <td class="align-middle">{{ $payment->users->name }}</td>
                <td class="align-middle">{{ $payment->billing_details }}</td>
                <td class="align-middle">*******{{ $payment->last4 }} , CVC Status:{{ $payment->cvc_check }}</td>
                <td class="align-middle">{{ $payment->type }}</td>
                <td class="align-middle">{{ $payment->status }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

{!! $payments->links() !!}
@endsection

@section("js")
@if ($message = Session::get('success'))
<script>
    tata.success("Success!", '{{$message}}')
</script>
@endif
@endsection