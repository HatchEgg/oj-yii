$("#lesson-search-btn-m").click(function(event){
    var option=$('#lesson-select-m option:selected').text();
    var key = $("#lesson-search-m").val();
    var type="";
    if(option=="ID") type="code";
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
            addResult(obj);
            console.log("result:\n"+result);
            // $.each(obj,function(item,content){

            // });
        }
    });
});

$("#edit-lesson").click(function(event){
    event.preventDefault();
    time=$("#lesson-time").val().split(' - ');

    var lesson=new Object();
    lesson.id=$("#lesson-id").val();
    lesson.name=$("#lesson-name").val();
    lesson.description=$("#lesson-description").val();
    lesson.start_date=time[0];
    lesson.end_date=time[1];
    problems=new Array();
    var table=$("#lesson-problem-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var problem=new Object();
        var contens=table.fnGetData(nTrs[i]);
        problem.id=contens[0];
        problem.title=contens[1];//fnGetData获取一行的数据
        problems.push(problem);  
    }  
    lesson.problems=problems;


    $.ajax({
        url:"index.php?r=class/edit-lesson-submit",
        type:"POST",
        contentType:"application/json",
        data:JSON.stringify(lesson),
        success:function(result)
        {
            console.log(result);
        },
        error:function(result)
        {

        }
    });
    return false;
});