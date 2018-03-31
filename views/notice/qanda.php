<div class="row">
    <div class="col-lg-12">
       <div class="page-header"><h1>Q&amp;A问题列表</h1></div>   
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="notice-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 10%">ID</th>
                    <th style="width: 30%">Question</th>
                    <th style="width: 40%">Answer</th>
                    <th style="width: 20%">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td class="overflow-hide">问题一</td>
                    <td class="overflow-hide">回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答回答</td>
                    <td><button class="btn btn-default btn-sm" type="button"  onclick="getQA(2)">编辑</button> | <button class="btn btn-warning btn-sm" type="button" onclick="deleteQA(2)">删除</button></td>
                </tr>
            </tbody>
        </table>
      </div>
</div>
<div class="modal fade bs-example-modal-lg"  id="edit-QA" tabindex="-1" role="dialog" aria-labelledby="EditQA" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            <form class="form" id="notice-form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="question">问题：</label>
                                    <input class="form-control" type="text" name="question" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="answer">回答：</label>
                                    <textarea class="form-control" id="answer" autofocus required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary" id="save-notice-bt">保存</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="../vendor/simditor/js/module.js"></script>  
<script type="text/javascript" src="../vendor/simditor/js/hotkeys.js"></script>  
<script type="text/javascript" src="../vendor/simditor/js/uploader.js"></script>
<script type="text/javascript" src="../vendor/simditor/js/simditor.js"></script>
<script src="../dist/js/admin-notice-QandA.js"></script>