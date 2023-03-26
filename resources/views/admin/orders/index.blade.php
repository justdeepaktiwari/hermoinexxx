@extends('admin.index')

@section('title', "Orders")

@section('action-btn')
@endsection
@section("css")
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

@endsection
@section('content')
<div class="container">
    <div class="">
        <table id="tablemanage" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Details</th>
                    {{-- <th>Payment Details</th>
                    <th>Order By</th> --}}
                    <th>Shipping Details</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>Total Price</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <img src="{{ asset($order->product_image) }}" height="100Px" width="100px" alt="{{ $order->product_name }}">
                        <p><b>Name : </b>{{ $order->product_name }}</p>
                        <p> Discounted Amount: {{ $order->product_discounted_amount }}</p>
                    </td>
                    {{-- <td>
                        <p>Payment ID: {{$order->payments->payment_id}}</p>
                        <p>Card Details: ***********{{$order->payments->last4}}</p>
                        <p>Payment Method: {{$order->payments->payment_method}}</p>
                    </td>
                    <td>
                        <p><b>Name: </b> {{$order->users->name}}</p>
                        <p><b>Email ID: </b> {{$order->users->email}}</p>

                    </td> --}}
                    <td>{{$order->payments->billing_details}}</td>
                    <td>{{$order->product_sizes}}</td>
                    <td>{{$order->product_colors}}</td>
                    <td>{{priceFormate($order->purchase_amount)}} </td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->quantity}} * {{priceFormate($order->purchase_amount)}} ={{priceFormate($order->purchase_total_amount)}}</td>
                    <td>
                        {!! Form::model($order, ['method' => 'PATCH','route' => ['orders.update', $order->id],'style'=>'
                            display: flex; justify-content: space-evenly;']) !!}
                            <select name="status" class="form-control">
                                @foreach ($order_status as $key => $status)
                                    <option value="{{$key}}"
                                    @if ($order->status==$key)
                                        selected
                                    @endif 
                                    > {{$status}}</option>
                                @endforeach
                            </select>   
                            <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
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