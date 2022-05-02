$(document).ready(function (){

    $('.delete_category_btn').click(function (e){
        e.preventDefault();

        var category_id = $(this).val();
        alert(category_id);

        swal({
            title: "Are you sure ?",
            text: "Once deleted, you will not be able to recover ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              /*$.ajax({
                  method: "POST",
                  url: "../admincategories.php",
                  data: {
                      'category_id':categories_id,
                      'delete_category_btn':true
                  },*/
                  /*success: function (response) {
                        console.log(response);
                        if(response == 200)
                        {
                            swal({
                                title: 'Deleted',
								text: 'Data deleted successfully!',
								icon: 'success',
								button: 'done',
                            });

                            $("#cate_table").load(location.href + "#cate_table");

                        }
                        else if(response == 500)
                        {
                            swal({
                                title: 'Error',
                                text: 'something went wrong!',
                                icon: 'warning',
                                button: 'Ok',
                            });
                        }
                  }
              });*/
            }
          });
    });

});