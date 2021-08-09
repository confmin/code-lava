@extends('admin.layout.master')
@section('title','Danh sách Menu')
@stop
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên danh mục</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          {!!App\Helpers\Helpers::menu()!!}
        </tbody>
    </table>

@endsection
