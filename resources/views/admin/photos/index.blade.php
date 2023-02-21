@extends('admin.index')

@section('title', 'Photos Section')

@section('action-btn')
    <div class="pull-right">
        @can('product-create')
        <a class="btn btn-outline-success rounded-0" href="{{ route('photos.create') }}"> Add Photos</a>
        @endcan
    </div>
@endsection

@section('content') 
<table class="table table-striped table-bordered">
  <thead>
    <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Description</th>
        <th>Url</th>
        <th style="width: 20%;">Category</th>
        <th style="width: 20%;">Tag</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($list_photos as $photo)
    <tr>
        <td>{{$photo->id}}</td>
        <td>{{$photo->photo_title}}</td>
        <td class="text-break">{{$photo->photo_detail}}</td>
        <td class="text-break">{{$photo->photo_url}}</td>
        <td class="text-break">
            @if(isset($photo->rel_category))
                @foreach($photo->rel_category as $rel_category)
                    @if($rel_category->category_id)
                        <span class="badge rounded-pill bg-primary">{{ $rel_category->category->name }}</span>
                    @endif
                @endforeach
            @else
                NA
            @endif
        </td>
        <td class="text-break">
            @if(isset($photo->rel_tag))
                @foreach($photo->rel_tag as $rel_tag)
                    @if($rel_tag->tag_id)
                        <span class="badge rounded-pill bg-primary">{{ $rel_tag->tag->name }}</span>
                    @endif
                @endforeach
            @else
                NA
            @endif
        </td>
        <td>{{isset($photo->subscription->name) ? $photo->subscription->name : "NA"}}</td>
        <td>
            <span class="edit text-warning mx-1" role="button" onclick="window.location.href = '{{ route("photos.edit", $photo->id) }}'">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </span>
            <form method="post" action="{{ route('photos.destroy', $photo->id) }}" class="d-none" id="{{ md5($photo->id) }}">
                @csrf
                @method("DELETE")
            </form>
            <span class="delete text-danger mx-1" role="button" onclick="document.getElementById('{{ md5($photo->id) }}').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
            </span>
        </td>
    </tr>
    @empty
        
    @endforelse
  </tbody>
</table>

{!! $list_photos->links() !!}
@endsection