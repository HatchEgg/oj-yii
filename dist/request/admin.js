// function SHOW_EDIT_ONE_PROBLEM(event) {
// 		event.preventDefault();
// 		var id_str_array=event.target.getAttribute('id').split('_');
// 		var code=id_str_array[2];
// 		$.ajax({
// 			url: 'index.php?r=problem/get',
// 			type: 'GET',
// 			data: {'code':code},
// 			success: function(result){
// 				var info=jQuery.parseJSON(result); 
// 				$("#edit-problem-code").val(info.code),
// 				$('#edit-problem-title').val(info.title);//题目标题
// 				$('#edit-problem-timelimit').val(info.time_limit);//时间限制
// 				$('#edit-problem-memorylimit').val(info.memory_limit);//内存限制
// 				$('#edit-problem-content').html(info.description);//题目描述
// 				$('#edit-problem-input').html(info.input);//输入
// 				$('#edit-problem-output').html(info.output);//输出
// 				$('#edit-problem-input-sample').html(info.sample_input);//样例输入
// 				$('#edit-problem-output-sample').html(info.sample_output);//样例输出
// 				$('#edit-problem-tip').html(info.tip);//提示
// 				$('').html();//待定（隐藏input 题目ID）
// 				$('').html();//待定（标签）
// 			},
// 			error: function(result) {
// 				//
// 			}
// 		});
// }
// function EDIT_ONE_PROBLEM_SUBMIT(event) {
// 	event.preventDefault();
// 	var csrfToken = $('meta[name="csrf-token"]').attr("content");
// 	$.ajax({
// 		type: 'POST',
// 		contentType: "application/x-www-form-urlencoded",//预期服务器返回的数据类型
// 		url: "index.php?r=problem/edit-one" ,//url
// 		data: {
// 			"_csrf":csrfToken,
// 			"code":$("#edit-problem-code").val(),
// 			"title":$("#edit-problem-title").val(),
// 			"time_limit":$("#edit-problem-timelimit").val(),
// 			"memory_limit":$("#edit-problem-memorylimit").val(),
// 			"description":$("#edit-problem-content").val(),
// 			"input":$("#edit-problem-input").val(),
// 			"output":$("#edit-problem-output").val(),
// 			"sample_input":$("#edit-problem-input-sample").val(),
// 			"sample_output":$("#edit-problem-output-sample").val(),
// 			"tip":$("#edit-problem-tip").val()
// 		},
// 		success:function(result){
// 			window.alert("修改成功");
// 			var code=$("#edit-problem-code").val();
// 			var id='#problem_'+code;
// 			var title=$("#edit-problem-title").val();
// 			var content=$("#edit-problem-content").val();
// 			var parent=$(id);
// 			parent.find('a[name="problem-title"]').html(title);
// 			parent.find('td[name="problem-content"]').html(content);

// 		},
// 		error: function(result) {
// 			//
// 		}
// 	});
// }
// function LIST_LOAD(event)
// {
// 		event.preventDefault();
// 		$.ajax({
// 			url: 'index.php?r=problem/list',
// 			type: 'GET',
// 			contentType:"application/x-www-form-urlencoded",
// 			data: {
// 				'page':1,
// 				'pageNum':20
// 			},
// 			success: function(result){
// 				$('#page-wrapper').html(result);
// 				//题库修改题目 点击列表单个题目中的“编辑” 返回题目信息
// 				$('.edit-one-problem').click(SHOW_EDIT_ONE_PROBLEM);
// 				$('#edit-one-problem-submit').click(EDIT_ONE_PROBLEM_SUBMIT);
// 			},
// 			error: function(result) {
// 				//
// 			}
// 		});
// }

// $('.edit-one-problem').click(SHOW_EDIT_ONE_PROBLEM);
// $('#edit-one-problem-submit').click(EDIT_ONE_PROBLEM_SUBMIT);
// //题库问题列表页面   page/problem-list.html
// $('#problem-list').click(LIST_LOAD);


//题库问题列表项

$('#problem-list').click(function(event) {
	event.preventDefault();
		$.ajax({
			url: 'index.php?r=problem/list',
			type: 'GET',
			contentType:"application/x-www-form-urlencoded",
			data: {
				'page':1,
				'pageNum':20
			},
			success: function(result){
				$('#page-wrapper').html(result);
			},
			error: function(result) {
				//
			}
		});
});

$('#problem-add').click(function(event) {
	event.preventDefault();
	$.ajax({
		url: 'index.php?r=problem/add',
		type: 'GET',
		data: {},
		success: function(result){
			$('#page-wrapper').html(result);
			//题库添加题目 problem-add.html
		},
		error: function(result) {
			//
		}
	});
});

//题库查看题目 点击列表单个题目中的“标题” 返回题目信息
$("#problem-title").click(function(event) {
	/* Act on the event */
	event.preventDefault();
	$.ajax({
		url: '/path/to/file',
		type: 'GET',
		data: {},
		success: function(result){
			$('#ShowOneProblem').html();//题目标题
			$('#show-problem-timelimit').html();//时间限制
			$('#show-problem-memorylimit').html();//内存限制
			$('#show-problem-content').html();//题目描述
			$('#show-problem-input').html();//输入
			$('#show-problem-output').html();//输出
			$('#show-problem-input-sample').html();//样例输入
			$('#show-problem-output-sample').html();//样例输出
			$('#show-problem-tip').html();//提示
			$('').html();//待定（隐藏input 题目ID）
			$('').html();//待定（标签）
		},
		error: function(result) {
			//
		}
	});
});



$("#user-student").click(function(event){
	$.ajax({
		url:"index.php?r=user/student",
		type:"GET",
		data:{},
		success:function(result){
			$('#page-wrapper').html(result);
		}
	});
});

$("#user-teacher").click(function(event){
	$.ajax({
		url:"index.php?r=user/teacher",
		type:"GET",
		data:{},
		success:function(result){
			$('#page-wrapper').html(result);
		}
	});
})


//   2018/2/27    修改

$("#class-list").click(function(event){
	$.ajax({
		url:"index.php?r=class/list",
		type:"GET",
		data:{},
		success:function(result){
			$('#page-wrapper').html(result);
		}
	});
});

$("#class-add").click(function(event){
	$.ajax({
		url:"index.php?r=class/add",
		type:"POST",
		data:{},
		success:function(result){
			$('#page-wrapper').html(result);
		}
	});
});

$("#contest-list").click(function(event){
	$.ajax({
		url:"index.php?r=contest/index",
		type:"GET",
		data:{},
		success:function(result)
		{
			$('#page-wrapper').html(result);
		}
	});
	return false;
});

$("#contest-add").click(function(event){
	$.ajax({
		url:"index.php?r=contest/add",
		type:"GET",
		data:{},
		success:function(result)
		{
			$('#page-wrapper').html(result);
		}
	})
});

$("#notice-add").click(function(event){
	$.ajax({
		url:"index.php?r=notice/add",
		type:"GET",
		data:{},
		success:function(result)
		{
			$('#page-wrapper').html(result);
		}
	})
});

$("#notice-QandA").click(function(event){
	$.ajax({
		url:"index.php?r=notice/qanda",
		type:"GET",
		data:{},
		success:function(result)
		{
			$('#page-wrapper').html(result);
		}
	})
});