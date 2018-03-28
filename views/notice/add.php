<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Notice</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <button class="btn btn-info" type="button" onclick="saveNotice()">添加</button>
    </div>
    <div class="col-lg-12">
        <table id="notice-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width:150px;">ID</th>
                    <th style="width:200px;">Title</th>
                    <th>Content</th>
                    <th style="width:150px;">User</th>
                    <th style="width:150px;">Date</th>
                    <th style="width:150px;">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td class="overflow-hide">第一个公告</td>
                    <td class="overflow-hide">第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告</td>
                    <td>张翊卓</td>
                    <td>2018-03-18</td>
                    <td><button class="btn btn-default btn-sm" type="button"  onclick="saveNotice(2)">编辑</button> | <button class="btn btn-warning btn-sm" type="button" onclick="deleteNotice(2)">删除</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td class="overflow-hide">第一个公告</td>
                    <td class="overflow-hide">第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告第一个公告</td>
                    <td>张翊卓</td>
                    <td>2018-03-18</td>
                    <td><button class="btn btn-default btn-sm" type="button" onclick="saveNotice(3)">编辑</button> | <button class="btn btn-warning btn-sm" type="button" onclick="deleteNotice(3)">删除</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- panel -->
    <div class="modal fade"  id="save-notice" tabindex="-1" role="dialog" aria-labelledby="SaveNotice" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="panel-title"></h4>
                </div>
                <form class="form" id="notice-form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="notice-title">标题：</label>
                                    <input class="form-control" type="text" name="notice-title" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="notice-content">内容：</label>
                                    <textarea class="form-control" type="text" name="notice-content" rows="20" required></textarea>
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
<script src="../dist/js/admin-notice-add.js"></script>