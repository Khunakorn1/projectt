@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">Content</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('content.update',$content->id) }}" enctype="multipart/form-data" method="post">
            @csrf
              <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control" name="name" value="{{ $content->name }}"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />

            <input
              type="text"
              class="form-control" name="detail" value="{{ $content->detail }}"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกประเภทสินค้า"
              aria-describedby="defaultFormControlHelp"
            />

            <div class="mb-3">
              <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
              <input
                  class="form-control"
                  type="file"
                  name="image"
                  placeholder="รูปภาพ"
                  required
              />

          </div>
            <Button type="submit" value="บันทึก" class="btn btn-primary mt-3" >บันทึก</Button>
            <a href="{{ route('content.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection