
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

            <!-- Add Problem from Library -->
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
                                        <span style="font-weight: 700">添加题目</span>
                                    </div>
                                    <div class="form-inline pull-right">
                                        <label for="homework-search-m">
                                            <select id="homework-select-m" class="form-control">
                                                <option selected="">ID</option>
                                                <option>Title</option>
                                                <option>Content</option>
                                            </select>
                                            <input class="form-control" type="text" name="homework-search-m" id="homework-search-m">
                                            <button id="homework-search-btn-m" class="btn btn-info">搜索</button>
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
                                                <th style="max-width: 50px;">ID</th>
                                                <th style="max-width: 100px;">Title</th>
                                                <th style="overflow: hidden;">Content</th>
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
                            <button id="add-problems-m" type="button" class="btn btn-primary">添加</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Homework</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">添加作业</div>
                        <div class="panel-body">
							<form id="add-homework-form">
                                <div class="row">
                                    <input class="hidden" id="add-homework-class-id" value="<?=$class->id?>" >
                                    <div class="col-lg-5 col-md-6">
                                        <div class="form-group">
                                            <label for="add-homework-name">作业名称</label>
                                            <input class="form-control" type="text" name="add-homework-name" id="add-homework-name" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="form-group">
                                            <label for="add-homework-class">课程</label>
                                            <input class="form-control" type="text" name="add-homework-class" id="add-homework-class" placeholder="class" value="<?=$class->course?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="add-homework-describe">作业简介</label>
                                            <textarea class="form-control" name="add-homework-describe" id="add-homework-description" rows="4" placeholder="describe"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="add-homework-time">作业时间</label>
                                            <input type="text" name="add-homework-time" id="add-homework-time" class="form-control" value="03/18/2018 - 07/23/2018">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="pull-left">
                                            <span style="font-weight: 700">添加题目</span>
                                        </div>
                                        <div class="form-inline pull-right">
                                            <label for="homework-search">
                                                <a href="" id="homework-search-button" class="btn btn-info" data-toggle="modal" data-target='#search-result'>查找</a>
                                            </label>
                                        </div>
                                        <div style="clear: both; height: 8px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <table width="100%" id="homework-problem-table" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 80px">ID</th>
                                                    <th>Title</th>
                                                    <th>Content</th>
                                                    <th style="width: 100px">Option</th>
                                                    <th style="width: 180px">Visible</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="pull-right">
                                            <a href="class-info.html" id="add-homework-cancel" class="btn btn-default">取消</a>
                                            <button id="add-homework" class="btn btn-info" style="width: 200px;">添加作业</button>
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>
                                <input type="hidden" name="class-id">
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- Daterangepicker -->
            <script src="../vendor/daterangepicker/moment.js"></script>
            <script src="../vendor/daterangepicker/daterangepicker.js"></script>

            <!-- DataTables JavaScript -->
            <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
            <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
            
            <script src="../dist/js/admin-class-add-homework.js"></script>
            <script src="../dist/request/admin-class-add-homework.js"></script>
    