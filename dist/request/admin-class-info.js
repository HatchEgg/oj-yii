


$("#add-homework-btn").click(function(event){
    var id=$("#class-id").val();
    $.ajax({
        url:"index.php?r=class/add-homework",
        type:"post",
        contentType:'application/x-www-form-urlencoded',
        data:{
            "id":id,
        },
        success:function(result)
        {
            $("#page-wrapper").html(result);
        }
    });
});

$("#add-lesson-btn").click(function(event){
    var id=$("#class-id").val();
    $.ajax({
        url:"index.php?r=class/add-lesson",
        type:"POST",
        contentType:'application/x-www-form-urlencoded',
        data:{
            "teach_id":id,
        },
        success:function(result)
        {
            $("#page-wrapper").html(result);
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


$("#update-class-submit").click(function(event)
{
    var info=new Object;
    info.id=$("#class-id").val();
    info.course=$("#class-name").val();
    info.description=$("#class-description").val();
    date=$("#class-time").val();
    datearr=date.split(' - ');
    info.start_date=datearr[0];
    info.end_date=datearr[1];

    students=new Array();
    var rows=$("#student-table").find('tr');
    for(var i = 1; i < rows.length; i++){  
        var student=new Object;
        student.number=$(rows[i]).find('td').eq(0).html();
        student.name=$(rows[i]).find('td').eq(1).html();//fnGetData获取一行的数据
        students.push(student);  
    }  
    info.students=students;

    homeworks=new Array();
    var table=$("#homework-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var homework=new Object();
        var data=table.fnGetData(nTrs[i]);
        homework.name=$(data[0]).html();
        homeworks.push(homework);  
    }  
    info.homeworks=homeworks;

    lessons=new Array();
    var table=$("#lesson-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var lesson=new Object();
        var data=table.fnGetData(nTrs[i]);
        lesson.name=$(data[0]).html();
        lessons.push(lesson);  
    }  
    info.lessons=lessons;

    console.log(info);

    $.ajax({
        type:"POST",
        url:"index.php?r=class/update",
        contentType:"application/json",
        data:JSON.stringify(info),
        success:function(result)
        {
            $("#page-wrapper").html(result);
        }
    })
});

$(".homework-title").click(function(event)
{
    var id=this.getAttribute('data-code');
    $.ajax({
        url:"index.php?r=class/edit-homework",
        type:"post",
        data:{"id":id},
        contentType:"application/x-www-form-urlencoded",
        success:function(result){
            $("#page-wrapper").html(result);
        },
        error:function(result)
        {

        }
    })
});

$(".lesson-title").click(function(event){
    var id=this.getAttribute('data-code');
    $.ajax({
        url:"index.php?r=class/edit-lesson",
        type:"post",
        data:{"id":id},
        contentType:"application/x-www-form-urlencoded",
        success:function(result){
            $("#page-wrapper").html(result);
        },
        error:function(result)
        {

        }
    });
});




