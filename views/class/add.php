
            <!-- Add Student from Excel -->
            <div class="modal fade"  id="upload-excel" tabindex="-1" role="dialog" aria-labelledby="UploadExcel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="UploadExcel">Upload an Excel</h4>
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
                            <button id="add-one-problem-submit" type="button" class="btn btn-primary">上传</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Student from Library -->
            <div class="modal fade"  id="search-result" tabindex="-1" role="dialog" aria-labelledby="SearchResult" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="SearchResult">搜索结果</h4>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <span style="font-weight: 700">添加学生</span>
                                    </div>
                                    <div class="form-inline pull-right">
                                        <label for="student-search-m">
                                            <select id="student-select-m" class="form-control">
                                                <option selected="">Number</option>
                                                <option>Name</option>
                                                <option>Class</option>
                                            </select>
                                            <input class="form-control" type="text" name="student-search-m" id="student-search-m">
                                            <button id="student-search-btn-m" class="btn btn-info">查找</button>
                                        </label>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="search-result-table-m" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th style="max-width: 50px;">Number</th>
                                                <th style="max-width: 100px;">Name</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button id="cancel-all" onclick="cancelAll()" type="button" class="btn btn-warning">全不</button>
                            <button id="check-all" onclick="checkAll()" type="button" class="btn btn-info">全选</button>
                            <button id="add-students-m" type="button" class="btn btn-primary">添加</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Class</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">添加课程</div>
                        <div class="panel-body">
							<form>
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <input type="hidden" id="add-class-teacher-id" value="<?=$teacher->id?>">
                                        <div class="form-group">
                                            <label for="add-class-name">课程名称</label>
                                            <input class="form-control" id="add-class-name" type="text" name="add-class-name" placeholder="name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="form-group">
                                            <label for="add-class-teacher">任课老师</label>
                                            <input class="form-control" type="text" name="add-class-teacher" placeholder="teacher" 
                                                value="<?=$teacher->name?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="add-class-describe">课程简介</label>
                                            <textarea class="form-control" id="add-class-description" name="add-class-describe" rows="4" placeholder="describe"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="add-class-time">课程时间</label>
                                            <input type="text" name="add-class-time" id="add-class-time" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <button class="btn btn-info" type="button" data-toggle="modal" data-target="#upload-excel">Excel导入</button>
                                            <div class="form-inline pull-right">
                                                <a href="" id="student-search-button" class="btn btn-info" data-toggle="modal" data-target='#search-result'>查找添加</a>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div>
                                        <div class="panel-body">
                                            <table width="100%" id="class-add-stu-table" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 180px">Student Number</th>
                                                        <th>Name</th>
                                                        <th style="width: 100px">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <button class="btn btn-info input-lg" style="width: 100%" id="add-class-submit">添加课程</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- DataTables JavaScript -->
            <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
            <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
            <!-- Daterangepicker -->
            <script src="../vendor/daterangepicker/moment.js"></script>
            <script src="../vendor/daterangepicker/daterangepicker.js"></script>
            
            <script src="../dist/js/admin-class-add.js"></script>
            <script src="../dist/request/admin-class-add.js"></script>
            
