

$(".class-info-btn").click(function(event){
    var code=this.getAttribute("data-code");
    $.ajax({
        url:"index.php?r=class/info",
        type:"GET",
        contentType:"application/x-www-form-urlencoded",
        data:{
            "code":code
        },
        success:function(result)
        {
            $("#page-wrapper").html(result);
        }
    });
});

$("#class-add-btn").click(function(event)
{
    $.ajax({
        url:"index.php?r=class/add",
        type:"GET",
        contentType:"application/x-www-form-rulencoded",
        data:{},
        success:function(result)
        {
            $("#page-wrapper").html(result);
        }
    })
});

