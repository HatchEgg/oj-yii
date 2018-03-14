


$('#lesson-search-btn-m').click(function(event){
    var option=$('#lesson-select-m option:selected').text();
    var searchInputStr = $("#lesson-search-m").val();
    var keyStr="";
    if(option=="ID") keyStr="id";
    else if(option=="Title") keyStr="title";
    else if(option=="Content") keyStr="content";
    window.alert("here");
    $.ajax({
        url:"index.php?r=problem/search",
        type:"GET",
        contentType:"application/x-www-form-urlencoded",
        data:{ "key":searchInputStr,"type":keyStr},
        success:function(result)
        {
            console.log(result);
            obj=jQuery.parseJSON(result);
            addResult(obj);
        }
    });
});

$("#add-lesson").click(function(event)
{
    event.preventDefault();
    time=$("#add-lesson-time").val().split(' - ');

    var data=new Object();
    data.name=$("#add-lesson-name").val();
    data.teach_id=$("#add-lesson-teach-id").val();
    data.description=$("#add-lesson-description").val();
    data.start_date=time[0];
    data.end_date=time[1];
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
    data.problems=problems;

    


    $.ajax({
        url:"index.php?r=class/add-lesson-submit",
        type:"POST",
        contentType:"application/json",
        data:JSON.stringify(data),
        success:function(result)
        {
            console.log(result);
        },
        error:function(result)
        {

        }
    });
    
})