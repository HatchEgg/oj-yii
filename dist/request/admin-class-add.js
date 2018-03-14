
$('#add-class-submit').click(function(event)
{
    var newclass=new Object;
    newclass.teacher_id=$("#add-class-teacher-id").val();
    newclass.name=$("#add-class-name").val();
    newclass.description=$("#add-class-description").val();
    var date=$("#add-class-time").val();
    var datearr=date.split(' - ');
    newclass.start_date=datearr[0];
    newclass.end_date=datearr[1];

    var students=new Array();
    var table=$("#class-add-stu-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var student=new Object();
        var data=table.fnGetData(nTrs[i]);
        student.number=data[0];
        student.name=data[1];//fnGetData获取一行的数据
        students.push(student);  
    }  
    newclass.students=students;
    
    $.ajax({
        url:"index.php?r=class/add",
        type:"POST",
        contentType:"application/json",//预期服务器返回的数据类型
        data:JSON.stringify(newclass),
        success:function(result)
        {
            result="添加成功\n"+result;
            window.alert(result);
            console.log(result);
        },
        error: function(result) {
            window.alert('error');
            console.log(result);
		}
    });
});

$('#student-search-btn-m').click(function(event){
    var option=$('#student-select-m option:selected').text();
    var key = $("#student-search-m").val();
    if(option=='Number') option='username';
    else if(option=='Name') option='name';
    else if(option='class') option='classroom'
    $.ajax({
        url:"index.php?r=user/search-student",
        type:"get",
        contentType:"application/x-www-form-urlencoded",
        data:{
            "type":option,
            "key":key,
        },
        success:function(result)
        {
            // console.log(result);
            var obj=jQuery.parseJSON(result);
            console.log(obj);
            addResult(obj);
            // $.each(obj,function(item,content){

            // });
        }
    });
});
