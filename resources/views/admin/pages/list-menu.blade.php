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

@endsection
