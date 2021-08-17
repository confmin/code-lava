@extends('admin.layout.master')
@section('title','Add')
@section('content')
    @include('layout.alert')

    <div class="card card-primary">

    <form method="POST" action="">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="">Tên danh mục</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Danh Mục Cha</label>
            <select class="form-control" name="parent" id="parent">
                @foreach($menus as $key=>$menu)

                        <option value="{{$menu->id}}">{{$menu->name}}</option>

                @endforeach
            </select>
            <div class="form-group">
              <label for="">Mô Tả</label>
              <input type="text" name="description" id="" class="form-control" placeholder="Nhập Mô Tả">
            </div>
        </div>
        <div class="form-group">
          <label for="content">Mô Tả Chi Tiết</label>
          <textarea type="text" name="content" id="content" class="form-control" placeholder=""></textarea>
        </div>



        <div class="form-group">
          <label>Kích hoạt</label><br>
          <input type="radio" name="active" value="1" id="" class="form-control-input">
          <label for="" class="form-control-lable">Có</label>
          <br>
          <input type="radio" name="active" value="0" class="form-group-input" id="">
          <label for="" class="form-group-lable">Không</label>

        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection
