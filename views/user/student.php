
            <!-- edit-one-student -->
            <div class="modal fade" id="edit-one-student" tabindex="-1" role="dialog" aria-labelledby="EditOneStudent" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="EditOneStudent">Student Info</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-student-number">学号</label>
                                            <input class="form-control" type="text" name="edit-student-number">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-student-name">姓名</label>
                                            <input class="form-control" type="text" name="edit-student-name">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="edit-student-grade">年级</label>
                                            <select class="form-control" id="edit-student-grade">
                                                <option>2017级</option>
                                                <option>2016级</option>
                                                <option>2015级</option>
                                                <option>2014级</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <label for="edit-student-college">学院</label>
                                            <select class="form-control" id="edit-student-college">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-student-major">专业</label>
                                            <select class="form-control" id="edit-student-major">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="edit-student-class">班级</label>
                                            <select class="form-control" id="edit-student-class">
                                                
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="edit-student" type="button" class="btn btn-primary">修改</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add-student -->
            <div class="modal fade" id="add-student" tabindex="-1" role="dialog" aria-labelledby="AddStudent" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="AddStudent">Student Info</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="form-group col-lg-6">
                                            <label for="add-student-number">学号</label>
                                            <input class="form-control" type="text" name="add-student-number">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="add-student-name">姓名</label>
                                            <input class="form-control" type="text" name="add-student-name">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="add-student-grade">年级</label>
                                            <select class="form-control" id="add-student-grade">
                                                <option>2017级</option>
                                                <option>2016级</option>
                                                <option>2015级</option>
                                                <option>2014级</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <label for="add-student-college">学院</label>
                                            <select class="form-control" id="add-student-college">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="add-student-major">专业</label>
                                            <select class="form-control" id="add-student-major">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="add-student-class">班级</label>
                                            <select class="form-control" id="add-student-class">
                                                
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="add-student" type="button" class="btn btn-primary">添加</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- excel student -->
            <div class="modal fade" id="excel-student" tabindex="-1" role="dialog" aria-labelledby="ExcelStudent" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="ExcelStudent">Upload an Excel</h4>
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
                            <button id="uploaded" type="button" class="btn btn-primary">上传</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student</h1>
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
                                <a href="" data-toggle="modal" data-target="#excel-student" id="excelStudent" class="btn btn-sm btn-info">导入</a>
                                <a href="" data-toggle="modal" data-target="#add-student" id="addStudent" class="btn btn-sm btn-info">添加学生</a>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student Number</th>
                                            <th>Name</th>
                                            <th>Grade</th>
                                            <th>College</th>
                                            <th>Major</th>
                                            <th>Class</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>221500134</td>
                                            <td>张翊卓</td>
                                            <td>2015级</td>
                                            <td>数计学院</td>
                                            <td>软件工程</td>
                                            <td>软件一班</td>
                                            <td><a href="" data-toggle="modal"  data-target="#edit-one-student">编辑</a>|<a href="" data-toggle="modal" data-target="#delete-one-student">删除</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     