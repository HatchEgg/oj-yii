$("#list_problem").click(function(event){
        event.preventDefault();//ʹa�Դ��ķ���ʧЧ�����޷�������href�е�URL(http://www.baidu.com)
        $.ajax({
               type: "GET",
               url: "index.php?r=problem/list",
               data:{},
               success: function(result){
                    $('#page-wrapper').html(result);
               },
               error: function(result){
                  //����ʧ��֮��Ĳ���
               }
        });
    });
    $("#add_problem").click(function(event){
        event.preventDefault();//ʹa�Դ��ķ���ʧЧ�����޷�������href�е�URL(http://www.baidu.com)
        $.ajax({
               type: "GET",
               url: "index.php?r=problem/add",
               data:{},
               success: function(result){
                    $('#page-wrapper').html(result);
               },
               error: function(result){
                  //����ʧ��֮��Ĳ���
               }
        });
    });
    $(".edit_problem").click(function(event){
        event.preventDefault();
        var code=event.target.getAttribute('id');
        $.ajax({
            type: "GET",
            url: "index.php?r=problem/get",
            data:{'code':code},
            contentType:"application/x-www-form-urlencoded",
            success: function(result){
                 $('#edit_view').html(result);
            },
            error: function(result){
               //����ʧ��֮��Ĳ���
            }
     });
    });
   