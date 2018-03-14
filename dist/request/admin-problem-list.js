$(".problem-one-edit").click(function(event){
    var code=this.getAttribute("data-code");
    $.ajax({
        url: 'index.php?r=problem/get',
        type: 'GET',
        data: {'code':code},
        success: function(result){
            var info=jQuery.parseJSON(result); 
            $("#edit-problem-code").val(info.code),
            $('#edit-problem-title').val(info.title);//题目标题
            $('#edit-problem-timelimit').val(info.time_limit);//时间限制
            $('#edit-problem-memorylimit').val(info.memory_limit);//内存限制
            $('#edit-problem-content').html(info.description);//题目描述
            $('#edit-problem-input').html(info.input);//输入
            $('#edit-problem-output').html(info.output);//输出
            $('#edit-problem-input-sample').html(info.sample_input);//样例输入
            $('#edit-problem-output-sample').html(info.sample_output);//样例输出
            $('#edit-problem-tip').html(info.tip);//提示
            $('').html();//待定（隐藏input 题目ID）
            $('').html();//待定（标签）
        },
        error: function(result) {
            window.alert("error!");
        }
    });
});

$(".problem-one-test").click(function(event){
    var code=this.getAttribute("data-code");
    $.ajax({
        url: 'index.php?r=problem/get',
        type: 'GET',
        data: {'code':code},
        success: function(result){
            var info=jQuery.parseJSON(result); 
            
            $('#test-problem-title').html(info.title);//题目标题
            $('#test-problem-id').val(info.code);//题目Id（隐藏inpt）
       //     $('#edit-problem-timelimit').val(info.time_limit);//时间限制
       //     $('#edit-problem-memorylimit').val(info.memory_limit);//内存限制
            $('#test-problem-content').html(info.description);//题目描述
            $('#test-problem-input').html(info.input);//输入
            $('#test-problem-output').html(info.output);//输出
            $('#test-problem-sample-input').html(info.sample_input);//样例输入
            $('#test-problem-sample-output').html(info.sample_output);//样例输出
            $('#test-problem-tip').html(info.tip);//提示

        },
        error: function(result) {
            window.alert("error!");
        }
    });
});