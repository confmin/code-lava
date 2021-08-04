@extends('admin.layout.master')
@section('title','Add')
@section('content')
<form action="" method="POST">
<div class="card card-primary">

    <div class="card-header">
      <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="">Tên danh mục</label>
          <input type="text" class="form-control" id="menu" name="menu" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Danh Mục Cha</label>
            <select class="form-control" name="parent" id="parent">
              <option value="0">Danh Mục Cha</option>
            </select>
            <div class="form-group">
              <label for="">Mô Tả</label>
              <input type="text" name="description" id="" class="form-control" placeholder="Nhập Mô Tả">
            </div>
        </div>
        <div class="form-group">
          <label for="content">Mô Tả Chi Tiết</label>
          <input type="text" name="content" id="content" class="form-control" placeholder="">
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</form>
  @endsection