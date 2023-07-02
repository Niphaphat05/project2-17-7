@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Edit Product</h5>
                                <div class="card-body">

                                    <form action="{{ url('admin/product/update/'.$product->id) }}" method="post" method="post" enctype="multipart/form-data" >
                                    @csrf

                                    <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      value="{{ $product->name }}"
                                    />


                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      value="{{ $product->price }}"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      value="{{ $product->description }}"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                      <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      <option value="1">สายไฟ สวิตปลั๊ก ปลั๊กไฟ</option>
                                      <option value="2">อุปกรณ์เครื่องมือช่าง</option>
                                      <option value="3">ท่อ & ข้อต่อ</option>
                                    </select>


                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                    <div class="input-group">
                                    <input type="file" name="image" class="form-control" id="image" />
                                    <label class="input-group-text" for="image">Upload</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <img src="{{ asset('backend/img/img_pro/'.$product->image) }}" width="250" height="150" alt="">
                                        </div>
                                    </div>


                                    <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
                                    <a href="{{ route('pro.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection
