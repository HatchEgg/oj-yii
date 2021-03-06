
            <!-- edit-one-teacher -->
            <div class="modal fade" id="edit-one-teacher" tabindex="-1" role="dialog" aria-labelledby="EditOneTeacher" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="EditOneTeacher">Teacher Info</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-teacher-number">工号</label>
                                            <input class="form-control" type="text" name="edit-teacher-number">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-teacher-name">姓名</label>
                                            <input class="form-control" type="text" name="edit-teacher-name">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="edit-teacher-college">学院</label>
                                            <select class="form-control" id="edit-teacher-college">
                                                
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="edit-teacher" type="button" class="btn btn-primary">修改</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add-teacher -->
            <div class="modal fade" id="add-teacher" tabindex="-1" role="dialog" aria-labelledby="AddTeacher" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="AddTeacher">Teacher Info</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="form-group col-lg-6">
                                            <label for="add-teacher-number">学号</label>
                                            <input class="form-control" type="text" name="add-teacher-number">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="add-teacher-name">姓名</label>
                                            <input class="form-control" type="text" name="add-teacher-name">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="add-teacher-college">学院</label>
                                            <select class="form-control" id="add-teacher-college">
                                                
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="add-teacher" type="button" class="btn btn-primary">添加</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- excel teacher -->
            <div class="modal fade" id="excel-teacher" tabindex="-1" role="dialog" aria-labelledby="ExcelTeacher" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="ExcelTeacher">Upload an Excel</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <p>*下载所需模板</p>
                                <a href="#" class="btn btn-info" type="button">下载模板</a>
                            </div>
                            <hr>
                            <form>
                                <label for="added-excel">上传Excel文件</label>
                                <input type="file" id="uploaded-excel">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="" type="button" class="btn btn-primary">上传</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teacher</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <button id="multiSelect" class="btn btn-sm btn-info">多选</button>
                                <button id="cancelSelect" class="btn btn-sm btn-info" style="display: none;">取消</button>
                                &nbsp
                                <button id="allSelect" class="btn btn-sm btn-info" style="display: none;">全选</button>
                                &nbsp
                                <button id="deleteSelect" class="btn btn-sm btn-info" style="display: none;">删除</button>
                            </div>
                            <div class="pull-right">
                                <a href="" data-toggle="modal" data-target="#excel-teacher" id="excelTeacher" class="btn btn-sm btn-info">导入</a>
                                <a href="" data-toggle="modal" data-target="#add-teacher" id="addTeacher" class="btn btn-sm btn-info">添加教师</a>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Teacher Number</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>xxxxxxxx</td>
                                            <td>XXX</td>
                                            <td>XX学院</td>
                                            <td><a href="" data-toggle="modal"  data-target="#edit-one-teacher">编辑</a>|<a href="" data-toggle="modal"  data-target="#delete-one-teacher">删除</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
