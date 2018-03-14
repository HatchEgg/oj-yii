function searchForProblem(keyStr,searchInputStr,table) {
    body=table.find('tbody');
    body.html('');
    
}
//homework search
//homework problem search selected

$('#homework-search-btn-m').click(function(event){
    var option=$('#homework-select-m option:selected').text();
    var searchInputStr = $("#homework-search-m").val();
    var keyStr="";
    if(option=="ID") keyStr="id";
    else if(option=="Title") keyStr="title";
    else if(option=="Content") keyStr="content";

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

$("#add-homework").click(function(event)
{
    event.preventDefault();
    time=$("#add-homework-time").val().split(' - ');

    var homework=new Object();
    homework.teach_id=$("#add-homework-class-id").val();
    homework.name=$("#add-homework-name").val();
    homework.description=$("#add-homework-description").val();
    homework.start_date=time[0];
    homework.end_date=time[1];
    
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

    $.ajax({
        url:"index.php?r=class/add-homework-submit",
        type:"POST",
        contentType:"application/json",
        data:JSON.stringify(homework),
        success:function(result)
        {
            console.log(result);
        },
        error:function(result)
        {

        }
    });
    
})
