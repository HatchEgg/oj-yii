
    <!-- Add Problem from Library -->
    <div class="modal fade"  id="search-result-problem" tabindex="-1" role="dialog" aria-labelledby="SearchResult" aria-hidden="true" data-backdrop="static">
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
                                <span style="font-weight: 700">添加题目</span>
                            </div>
                            <div class="form-inline pull-right">
                                <label for="problem-search-p">
                                    <select id="problem-select-p" class="form-control">
                                        <option selected="">ID</option>
                                        <option>Title</option>
                                        <option>Content</option>
                                    </select>
                                    <input class="form-control" type="text" name="problem-search-p" id="problem-search-p">
                                    <button id="problem-search-btn-p" class="btn btn-info">搜索</button>
                                </label>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="search-result-table-p" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="max-width: 50px;">ID</th>
                                        <th style="max-width: 100px;">Title</th>
                                        <th>Content</th>
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
                    <button id="cancel-all-p" onclick="cancelAll_p()" type="button" class="btn btn-warning">全不</button>
                    <button id="check-all-p" onclick="checkAll_p()" type="button" class="btn btn-info">全选</button>
                    <button id="add-problems-p" type="button" class="btn btn-primary">添加</button>
                </div>
            </div>
        </div>
    </div>
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
    <!-- Add Contestant from Library -->
    <div class="modal fade"  id="search-result-contestant" tabindex="-1" role="dialog" aria-labelledby="SearchResult" aria-hidden="true" data-backdrop="static">
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
                                <span style="font-weight: 700">添加参赛者</span>
                            </div>
                            <div class="form-inline pull-right">
                                <label for="contestant-search-c">
                                    <select id="contestant-select-c" class="form-control">
                                        <option selected="">Stu Num</option>
                                        <option>Name</option>
                                        <option>Class</option>
                                    </select>
                                    <input class="form-control" type="text" name="contestant-search-c" id="contestant-search-c">
                                    <button id="contestant-search-btn-c" class="btn btn-info">搜索</button>
                                </label>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="search-result-table-c" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Student Number</th>
                                        <th>Name</th>
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
                    <button id="cancel-all-c" onclick="cancelAll_c()" type="button" class="btn btn-warning">全不</button>
                    <button id="check-all-c" onclick="checkAll_c()" type="button" class="btn btn-info">全选</button>
                    <button id="add-contestants-c" type="button" class="btn btn-primary">添加</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Contest</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <form>
                        <div class="panel panel-danger">
                            <div class="panel-heading">基本信息</div>
                            <div class="panel-body">
                                <div class="form-group col-lg-7">
                                    <label for="contest-title">标题</label>
                                    <input class="form-control" type="text" name="contest-title" id="contest-title">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="contest-teacher">指导老师</label>
                                    <input class="form-control" type="text" name="contest-teacher" id="contest-teacher">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="contest-description">竞赛简介</label>
                                    <textarea class="form-control" id="contest-description"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="contest-time">竞赛时间</label>
                                    <input type="text" name="contest-time" id="contest-time" class="form-control" id="contest-description">
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                竞赛题目
                                <div class="pull-right">
                                    <a href="" id="lesson-search-button" class="btn btn-info" data-toggle="modal"  data-target="#search-result-problem">添加</a>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="panel-body">
                                <table width="100%"  id="problem-table" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">基本操作</div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input id="contest-available" type="checkbox" name="contest-option">是否可见
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="contest-sign" type="checkbox" name="contest-option">是否允许报名
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="contest-secret" type="checkbox" name="contest-option">是否需要密码
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="contest-password">设置密码</label>
                                    <input id="contest-password" class="form-control input-sm" type="text" name="contest-password" disabled="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#upload-excel">Excel导入</button>
                                <div class="form-inline pull-right">
                                    <a href="" id="student-search-button" class="btn btn-info" data-toggle="modal" data-target='#search-result-contestant'>查找添加</a>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" style="max-height: 500px;overflow: auto;">
                                    <table width="100%" id="contestant-table" class="table table-striped table-hover" >
                                        <thead>
                                                <tr>
                                                    <th>Student Number</th>
                                                    <th>Name</th>
                                                    <th>Class</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div style="margin-left: auto;margin-right: auto;margin-bottom: 180px;">
                        <button id="add-contest" class="btn btn-info input-lg" style="width: 100%;">添加竞赛</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Datarangepicker -->
    <script src="../vendor/daterangepicker/moment.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/admin-contest-add.js"></script>
    <script src="../dist/request/admin-contest-add.js"></script>
