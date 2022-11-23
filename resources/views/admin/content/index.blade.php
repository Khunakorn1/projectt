@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Content</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{route('content.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>detail</th>
                <th>image</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($content as $item)
              <tr>
              <td>{{ $content->firstItem() + $loop->index }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->detail }}</td>
              <td>
                @if(!empty($item->image))
                <!-- Button -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#showImageId{{ $item->id }}">
                    ดูรูปภาพ
                </button>
                <!-- Modal -->
                <div class="modal fade" id="showImageId{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{ $item->name }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
</div>
                            <div class="modal-body d-flex justify-content-center">
                                <img src="{{ asset('contents').'/'.$item->image }}" class="img-thumbnail" alt="#" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <button type="button" class="btn btn-primary btn-sm" disabled>
                    ไม่มีรูปภาพ
                </button>
                @endif
            </td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>
                <a href="{{ route('content.edit',$item->id) }}"><i class='bx bxs-edit'>Edit</i></a>
                <a href="{{ route('content.delete',$item->id) }}"><i class='bx bx-trash'>Delete</i></a>
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $content->links('pagination::bootstrap-5') }}
    </div>
@endsection