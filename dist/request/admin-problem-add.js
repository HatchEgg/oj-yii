

$('#add-one-problem-submit').click(function(event) {

    $.ajax({
    //几个参数需要注意一下
        type: "POST",
        contentType: "application/x-www-form-urlencoded",//预期服务器返回的数据类型
        url: "index.php?r=problem/add-one" ,//url
        data: {
        
            "title":$("#problem-title").val(),
            "time_limit":$("#problem-timelimit").val(),
            "memory_limit":$("#problem-memorylimit").val(),
            "description":$("#problem-content").val(),
            "input":$("#problem-input").val(),
            "output":$("#problem-output").val(),
            "sample_input":$("#problem-input-sample").val(),
            "sample_output":$("#problem-output-sample").val(),
            "tip":$("#problem-tip").val()
        },
        success: function (result) {
            //console.log(result);//打印服务端返回的数据(调试用)
            window.alert("添加成功");						
        },
        error : function(result) {
            window.alert("异常!");
        }
    });
});

$("#add-from-file-submit").click(function(event){
    event.preventDefault();

    $.ajaxFileUpload
    ({
        url: 'index.php?r=problem/add-from-file', //用于文件上传的服务器端请求地址
        secureuri: false, //是否需要安全协议，一般设置为false
        fileElementId: 'uploaded', //文件上传域的ID
        dataType: 'json',
        success: function (data, status)  //服务器成功响应处理函数
        {
            alert("data:\n"+data+"\nstatus:\n"+status);
            console.log(data);
        },
        error: function (data, status, e)//服务器响应失败处理函数
        {
            alert(e);
        }
    });
});
