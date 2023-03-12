@extends('admin.index')

@section('title', "Purchase Offer")

@section('action-btn')
<div class="pull-right">
    @can('product-create')
    <!-- <a class="btn btn-outline-success rounded-0" href="{{ route('purchase.create') }}"> Create New Offer</a> -->
    @endcan
</div>
@endsection

@section('content')
<div class="container">
    <div class="col-md-8 plan-wise-offer">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Plan Type</th>
                <th>Real Amount</th>
                <th>Percentage Off</th>
                <th>Discounted Amount</th>
                <th>Duration(In Days)</th>
                <th>Action</th>
            </tr>
            @php
                $i = 0;
                //dd($plan_offer);
            @endphp
            @foreach ($plan_offer as $offer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $offer->name }}</td>
                <td>{{ $offer->real_amount }}</td>
                <td>{{ $offer->percentage_off }}</td>
                <td>{{ $offer->discounted_amount }}</td>
                <td>{{ $offer->duration }}</td>
                <td>
                    <span class="edit text-warning mx-1" role="button" onclick="window.location.href = `{{ route('purchase.edit', $offer->id) }}`">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </span>
                </td>
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
@endsection