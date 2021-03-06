
    <div class="modal fade bs-example-modal-lg" id="add-one-problem" tabindex="-1" role="dialog" aria-labelledby="AddOndProblem" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="AddOndProblem">Add One Problem</h4>
                    </div>
                    <form id="add-one-problem-form">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="form-group col-lg-12">
                                        <label for="problem-title">问题标题</label>
                                        <input type="text" class="form-control" id="problem-title" placeholder="title">
                                     </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-timelimit">时间限制</label>
                                        <input type="text" class="form-control" id="problem-timelimit" placeholder="ms">
                                        <p class="help-block">输入整数 单位MS</p>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-memorylimit">内存限制</label>
                                        <input type="text" class="form-control" id="problem-memorylimit" placeholder="ms">
                                        <p class="help-block">输入整数 单位KB</p>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="problem-content">问题描述</label>
                                        <textarea class="form-control" rows="4" id="problem-content" placeholder="content"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-input">输入</label>
                                        <textarea class="form-control" rows="3" id="problem-input" placeholder="input"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-output">输出</label>
                                        <textarea class="form-control" rows="3" id="problem-output" placeholder="output"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-input-sample">样例输入</label>
                                        <textarea class="form-control" rows="3" id="problem-input-sample" placeholder="input-sample"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="problem-output-sample">样例输出</label>
                                        <textarea class="form-control" rows="3" id="problem-output-sample" placeholder="output-sample"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="problem-tip">提示</label>
                                        <textarea class="form-control" rows="3" id="problem-tip" placeholder="tips"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="add-one-problem-submit">添加</button>
                    </div>
                </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <!-- Upload Excel -->
        <div class="modal fade"  id="upload-excel" tabindex="-1" role="dialog" aria-labelledby="UploadExcel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="UploadExcel">Upload an Excel</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="added-excel">上传Excel文件</label>
                            <input type="file" id="uploaded" name="AddProblemFileForm[file]">
                        </form>
                        <a id="load_excel_model">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button id="add-from-file-submit" type="button" class="btn btn-primary" data-dismiss="modal">上传</button>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Problem Add</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">标题</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="" data-toggle="modal"  data-target="#add-one-problem">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-plus-square fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Add</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="pull-left">
                                        Add One Problem
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="" data-toggle="modal" data-target="#upload-excel">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-th fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Excel</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="pull-left">
                                        Add Problem from Excel
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <script src="../dist/request/admin-problem-add.js"></script>
