@extends('admin.layout.master')
@section('title','Danh sách Menu')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên danh mục</th>
                <th>Danh mục cha</th>
                <th style="width: 200px">Hoạt động</th>
                <th style="width:150px ; margin-left: 120px ">Cập nhập</th>
                <th style="">Xoá</th>
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
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" class="form-control" id="title" value="" name="title" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="">Danh mục cha</label>
                        </br>
                            <select name="parent_id" >
                                <option value="0">Danh mục cha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mô Tả</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Nhập Mô Tả">
                        </div>
                        <div class="form-group">
                            <label >Mô Tả Chi Tiết</label>
                            <textarea type="text" name="content" id="content" class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kích hoạt</label><br>
                            <input type="radio" name="active" value="1" id="active" class="form-control-input">
                            <label for="" class="form-control-lable">Có</label>
                            <br>
                            <input type="radio" name="active" value="0" class="form-group-input" id="">
                            <label for="" class="form-group-lable">Không</label>
                        </div>

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button name="submit"  id="submit" type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
              $(document).on('click','#updatemenu',function(e)
          {
              var id_menu = $(this).data('id');
              $.ajax({
                  type: 'GET' ,
                  url: 'edit/'+id_menu,
                  dataType: 'JSON',
                  data : {id_menu},
                  success : function (result){
                        $("input[name='title']").val(result.name);
                      $("input[name='description']").val(result.description);
                      $("textarea[name='content']").val(result.content);
                      $('#update').modal('show');

                  }
              })
           $('#submit').click(function (e)
           {
               e.preventDefault();
               var name = $("input[name='title']").val();
               var desciptiton = $("input[name='descriptiton']").val();
               var content = $("input[name='content']").val();
               var name = $("input[name='title']").val();

              $.ajax({
                   type : "POST",
                   url: '/update',
                   dataType: 'JSON',
                  cache: false ,
                   data:{
                       'name' : name ,
                       'parent_id' : parent_id,
                       'desciption' : desciptiton,

                   }  ,
                   success: function (response)
                   {

                   }
               })
                $('#update').modal('hide');

           })
          })
              </script>
@endsection
