@extends('admin.layout.master')
@section('title','Danh sách Menu')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên danh mục</th>
                <th>Hoạt động</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helpers::menu($menus) !!}
        </tbody>
    </table>

    <div class="modal fade" id="update">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {!! \App\Helpers\Helpers::update($menus) !!}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a class="btn btn-primary pull-left" type="button" href="">Update</a>
                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
