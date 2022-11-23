@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">About</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{route('about.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
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
              @foreach ($about as $item)
              <tr>
              <td>{{ $about ->firstItem()+$loop->index}}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->detail }}</td>
              <td>
                <!-- Button -->

                
                <img src="{{ asset('about').'/'.$item->image }}" class="img-thumbnail" alt="#" />

                </td>
                
                
              
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>
                <a href="{{ route('about.edit',$item->id) }}"><i class='bx bxs-edit'>Edit</i></a>
                <a href="{{ route('about.delete',$item->id) }}"><i class='bx bx-trash'>Delete</i></a>
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $about->links('pagination::bootstrap-5') }}
    </div>
@endsection