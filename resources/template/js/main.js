$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
 function deletemenu(id)
 {
     if(confirm('Bạn có muốn xoá không ?'))
     {
         $.ajax({
             type: 'DELETE' ,
             url: 'delete/',
             data: {id},
             datatype: 'JSON',
             success : function(result)
             {
                if(result.error === false)
                {
                    alert(result.mess);
                    location.reload();

                }
                else
                {
                    alert('Lỗi thử lại ')
                }
            }



         })
     }
};

