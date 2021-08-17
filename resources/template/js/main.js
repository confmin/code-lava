$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
 function deletemenu(id)
 {
     if(confirm('Bạn có muốn xoá không ?'))
     {
         $.ajax([
             type: DELETE ,
            

         ])
     }
};

