$("#homework-search-btn-m").click(function(event){
    var option=$('#homework-select-m option:selected').text();
    var key = $("#homework-search-m").val();
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

$("#edit-homework").click(function(event){
    var homework=new Object;
    homework.id=$("#homework-id").val();
    homework.name=$("#homework-name").val();
    homework.description=$("#homework-description").val();
    date=$("#homework-time").val();
    var datearr=date.split(' - ');
    homework.start_date=datearr[0];
    homework.end_date=datearr[1];

    problems=new Array();
    var table=$("#homework-problem-table").dataTable();
    var nTrs = table.fnGetNodes();//fnGetNodes获取表格所有行，nTrs[i]表示第i行tr对象  
    for(var i = 0; i < nTrs.length; i++){  
        var problem=new Object();
        var data=table.fnGetData(nTrs[i]);
        problem.id=data[0];
        problem.title=data[1];//fnGetData获取一行的数据
        problems.push(problem);  
    }  
    homework.problems=problems;

    console.log(homework);
    $.ajax({
        url:"index.php?r=class/edit-homework-submit",
        type:"post",
        contentType:"application/json",
        data:JSON.stringify(homework),
        success:function(result)
        {            
            console.log("result:\n"+result);
            // $.each(obj,function(item,content){

            // });
        }
    });
    return false;
});