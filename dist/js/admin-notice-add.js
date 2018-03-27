function deleteNotice(index){
	//console.log(index);
	if(index == null){
		console.log("没有指定删除地址");
	}
	else {
		//执行删除操作
	}
}
function saveNotice(index){
	$('#save-notice').modal('show');
	if(index == null){ 
		//执行添加公告操作
		$('#panel-title').html("添加公告");
		console.log("add");
	}
	else{
		//执行编辑公告操作
		$('#panel-title').html("编辑公告");
		console.log("edit");
	}
}
//添加信息至表格
function addNotice(){
	
}