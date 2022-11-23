@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">Product</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('product.insert') }}" enctype="multipart/form-data" method="post" >
              @csrf
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control" name="name"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกชื่อสินค้า"
              aria-describedby="defaultFormControlHelp"
            />


            <label for="defaultFormControlInput" class="form-label">Price</label>
            <input
              type="text"
              class="form-control" name="price"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกราคาสินค้า"
              aria-describedby="defaultFormControlHelp"
            />


            <label for="defaultFormControlInput" class="form-label">category</label>
            {{-- <input
              type="text"
              class="form-control" name="category"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกรายละเอียดสินค้า"
              aria-describedby="defaultFormControlHelp"
            /> --}}
            <select name="category_id" class="form-control" >
              <option value="">กรุณาเลือกประเภท</option>
              @foreach ($category as $item)
              <option value="{{ $item->category_id }}">{{ $item->name }}</option>
              @endforeach
            </select>


            <div class="mb-3">
              <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
              <input
                  class="form-control"
                  type="file"
                  name="image"
                  placeholder="รูปภาพ"
                  required
              />

              <input href="" type="submit" value="บันทึก" class="btn btn-primary mt-3">
              <a href="{{ route('product.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection