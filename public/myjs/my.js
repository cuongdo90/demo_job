    $(document).ready(function() {

     /*   $.ajax({
            url:"http://127.0.0.1:8000/admin/jobs/detail",
            method: 'GET',
            type:"json",
        }).done(function (response){
            console.log(response)
            display(response)
        }).fail(function (){
            console.log('fail')
        })*/




            $('.delete-category').click(function () {
                if (confirm('are you sure?')) {
                    let idCategory = $(this).attr('data-id');
                    let origin = location.origin
                    $.ajax({
                        url: origin + '/admin/categories/' + idCategory + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success: function (res) {
                            $('#category-' + idCategory).remove();
                        },
                        error: function (error) {

                        }
                    })
                }
            })

            $('.delete-company').click(function (){
                if (confirm('are you sure?')){
                    let idCompany = $(this).attr('data-id');
                    let origin = location.origin;
                    $.ajax({
                        url:origin + '/admin/companies/' + idCompany + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success:function (res){
                            $('#company-' + idCompany).remove();
                        },
                        error:function (error){

                        }
                    })
                }
            })

            $('.delete-user').click(function (){
                if (confirm('are you sure')){
                    let idUser = $(this).attr('data-id');
                    let origin = location.origin;
                    $.ajax({
                        url:origin + '/admin/users/' + idUser + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success:function (res){
                            $('#user-' + idUser).remove();
                        },
                        error:function (error){

                        }
                    })

                }
            })

        function search(){
                let find = $('#input-search').value()

        }



        });

