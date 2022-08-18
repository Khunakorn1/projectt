@extends('layouts.back-end.master')
@section('content')
<div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Category</h5>
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <a href="" class="btn btn-primary mt-3">บันทึก</a>
                                    <a href="category.html" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
@endsection