$("#add-contest").click(function(event){
    contest=new Object();
    contest.id=$("#contest-id").val();
    contest.title=$("#contest-title").val();
    contest.teacher=$("#contest-teacher").val();
    contest.description=$("#contest-description").val();
    time=$("#contest-time").val();
    timearr=time.split(' - ');
    contest.start_date=timearr[0];
    contest.end_date=timearr[1];
    contest.available=$("#contest-available").prop('checked');
    contest.can_sign=$("#contest-sign").prop('checked');
    contest.need_password=$("#contest-secret").prop('checked');
    contest.password=$("#contest-password").val();
 
    //console.log(student_table);
    // students=new Array();
    // $(student_rows).each(function(i){
    //     student=new Object();
    //     student.number=$(this).find('td').eq(0).html();
    //     student.name=$(this).find('td').eq(1).html();
    //     students.push(student);
    // });
    // contest.students=students;
    students=new Array();
    var table=$("#contestant-table").dataTable();
    
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var student=new Object();
        var data=table.fnGetData(nTrs[i]);
        student.number=data[0];
        student.name=data[1];//fnGetData获取一行的数据
        students.push(student);  
       
    }  
    contest.students=students;

   
    problems=new Array();
    var table=$("#problem-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var problem=new Object();
        var data=table.fnGetData(nTrs[i]);
        problem.id=data[0];
        problem.title=data[1];//fnGetData获取一行的数据
        problems.push(problem);  
    }  
    contest.problems=problems;
    $.ajax({
        url:"index.php?r=contest/edit",
        type:"post",
        data:JSON.stringify(contest),
        contentType:"application/json",
        success:function(result)
        {
            $("#page-wrapper").html(result);
        },
        error:{

        }
    });
});

$("#problem-search-btn-p").click(function(event){
    var option=$('#problem-select-p option:selected').text();
    var key = $("#problem-search-p").val();
    var type="";
    if(option=="ID") type="id";
    else if(option=="Title") type="title";
    else if(option=="Content") type="content";
    $.ajax({
        url:"index.php?r=problem/search",
        type:"get",
        contentType:"application/x-www-form-urlencoded",
        data:{
            "type":type,
            "key":key,
        },
        success:function(result)
        {
            var obj=jQuery.parseJSON(result);
            addPResult(obj);
            console.log("result:\n"+result);
            // $.each(obj,function(item,content){

            // });
        }
    })
});
$("#contestant-search-btn-c").click(function(event){
    var option=$('#contestant-select-p option:selected').text();
    var key = $("#contestant-search-p").val();
    var type="";
    if(option=="ID") type="id";
    else if(option=="Title") type="title";
    else if(option=="Content") type="content";
    $.ajax({
        url:"index.php?r=user/search",
        type:"get",
        contentType:"application/x-www-form-urlencoded",
        data:{
            "type":type,
            "key":key,
        },
        success:function(result)
        {
            var obj=jQuery.parseJSON(result);
            addCResult(obj);
            // $.each(obj,function(item,content){

            // });
        }
    })
});
