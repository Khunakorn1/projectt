@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">User</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($user as $users)
              <tr>
                <td>{{ $loop->index +1}}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->address }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->phone }}</td>
                <td>{{ $users->created_at }}</td>
                <td>{{ $users->updated_at }}</td>
                <td>
                  <a href="{{ route('user.edit',$users->id) }}"><i class='bx bxs-edit'>Edit</i></a>
                  <a href="{{ route('user.delete',$users->id) }}"><i class='bx bx-trash'>Delete</i></a>
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <br>
      {{ $user->links('pagination::bootstrap-5') }}
    </div>
@endsection
@extends('layouts.back-end.master')
@section('content')
<div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Edit User</h5>
                                <div class="card-body">
                                  <div>
                                    <form action="{{ route('user.update',$user->id) }}" method="post">
                                        @csrf
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{ $user->name }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Address</label>
                                    <input
                                      type="text"
                                      name="address"
                                      value="{{ $user->address }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      aria-describedby="defaultFormControlHelp"
                                    />
<label for="defaultFormControlInput" class="form-label">email</label>
                                    <input
                                      type="email"
                                      name="email"
                                      value="{{ $user->email }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Phone</label>
                                    <input
                                      type="text"
                                      name="phone"
                                      value="{{ $user->phone }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <input class="btn btn-primary mt-3 mx-2" type = "submit" value="Update">
                                    <a href="{{ route('user.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
@endsection