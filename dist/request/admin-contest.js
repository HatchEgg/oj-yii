
$(".problem-edit").click(function(event){
    id=this.getAttribute('data-id');

    $.ajax({
        url:"index.php?r=contest/detail",
        type:"get",
        contentType:'application/x-www-form-urlencoded',
        data:{
            "id":id,
        },
        success:function(result)
        {
            $("#page-wrapper").html(result);
            // id=$("#contest-id").val();
            // $.ajax({
            //     url:"index.php?r=contest/get-student",
            //     type:"get",
            //     data:{
            //         "id":id
            //     },
            //     success:function(result){
            //         var obj=jQuery.parseJSON(result);
            //         console.log(obj);
            //     },
            // });
            // $.ajax({
            //     url:"index.php?r=contest/get-problem",
            //     type:"get",
            //     data:{
            //         "id":id
            //     },
            //     success:function(result){
            //         var obj=jQuery.parseJSON(result);
            //         console.log(obj);
            //     },
            // });
        }
    });
    return false;

});