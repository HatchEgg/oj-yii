
    <!-- Show One Problem -->
    <div class="modal fade bs-example-modal-lg" id="show-one-problem" tabindex="-1" role="dialog" aria-labelledby="ShowOneProblem" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="ShowOneProblem">马踏棋盘</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Description</h4>
                                <p id="show-problem-content">在5＊5的棋盘上，行坐标为X，列坐标为Y的位置放置一个国际象棋中的马，请求出，该棋子不重复的访问完每一个格子的方法数。(1<=X,Y<=5)</p>
                            </div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Input</h4>
                                <p id="show-problem-input">一行：用空格隔开的两个整数，分别表示马所在的行坐标X，列坐标Y。</p>
                            </div>
                            <div style="height: 20px"></div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Output</h4>      
                                <p id="show-problem-output">一个整数，访问每一个格子一次且仅一次的方法数。</p>
                            </div>
                            <div class="col-lg-6">
                                <h4 style="color: #3091f2">Sample Input</h4>
                                <div class="panel panel-default">
                                    <div  id="show-problem-sample-input" class="panel-body">
                                        gr
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 style="color: #3091f2">Sample Output</h4>
                                <div class="panel panel-default">
                                    <div id="show-problem-sample-output" class="panel-body">
                                        rt
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Tips</h4>
                                <div class="panel panel-default">
                                    <div id="show-problem-sample-output" class="panel-body">
                                        sdfd
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit One Problem -->
    <div class="modal fade bs-example-modal-lg" id="edit-one-problem" tabindex="-1" role="dialog" aria-labelledby="EditOneProblem" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="EditOneProblem">Edit One Problem</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-group col-lg-12">
                                    <label for="problem-title">问题标题</label>
                                    <input type="text" class="form-control" id="edit-problem-title" placeholder="title">
                                 </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-timelimit">时间限制</label>
                                    <input type="text" class="form-control" id="edit-problem-timelimit" placeholder="ms">
                                    <p class="help-block">输入整数 单位MS</p>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-memorylimit">内存限制</label>
                                    <input type="text" class="form-control" id="edit-problem-memorylimit" placeholder="ms">
                                    <p class="help-block">输入整数 单位KB</p>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="problem-content">问题描述</label>
                                    <textarea class="form-control" rows="4" id="edit-problem-content" placeholder="content"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-input">输入</label>
                                    <textarea class="form-control" rows="3" id="edit-problem-input" placeholder="input"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-output">输出</label>
                                    <textarea class="form-control" rows="3" id="edit-problem-output" placeholder="output"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-input-sample">样例输入</label>
                                    <textarea class="form-control" rows="3" id="edit-problem-input-sample" placeholder="input-sample"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="problem-output-sample">样例输出</label>
                                    <textarea class="form-control" rows="3" id="edit-problem-output-sample" placeholder="output-sample"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="problem-tip">提示</label>
                                    <textarea class="form-control" rows="3" id="edit-problem-tip" placeholder="tips"></textarea>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">添加</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <!-- Test One Problem -->
    <div class="modal fade bs-example-modal-lg" id="test-one-problem" tabindex="-1" role="dialog" aria-labelledby="TestOneProblem" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="test-problem-title">Non-title</h4>
                    <input type="hidden" id="test-problem-id" value="" />
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Description</h4>
                                <p id="test-problem-content">在5＊5的棋盘上，行坐标为X，列坐标为Y的位置放置一个国际象棋中的马，请求出，该棋子不重复的访问完每一个格子的方法数。(1<=X,Y<=5)</p>
                            </div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Input</h4>
                                <p id="test-problem-input">一行：用空格隔开的两个整数，分别表示马所在的行坐标X，列坐标Y。</p>
                            </div>
                            <div style="height: 20px"></div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Output</h4>      
                                <p id="test-problem-output">一个整数，访问每一个格子一次且仅一次的方法数。</p>
                            </div>
                            <div class="col-lg-6">
                                <h4 style="color: #3091f2">Sample Input</h4>
                                <div class="panel panel-default">
                                    <div  id="test-problem-sample-input" class="panel-body">
                                        fsf
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 style="color: #3091f2">Sample Output</h4>
                                <div class="panel panel-default">
                                    <div id="test-problem-sample-output" class="panel-body">
                                        sdfd
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Tips</h4>
                                <div class="panel panel-default">
                                    <div id="test-problem-tip" class="panel-body">
                                        sdfd
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 style="color: #3091f2">Code</h4>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-inline pull-right">
                                            <div class="form-group">
                                                <label for="test-problem-t-select">theme</label>
                                                <select class="form-control input-sm" id="test-problem-t-select">
                                                    <option selected="">duotone-light</option>
                                                    <option>dracula</option>
                                                    <option>zenburn</option>
                                                </select>
                                            </div>
                                        </form>
                                        <form class="form-inline pull-left">
                                            <div class="form-group">
                                                <label for="test-problem-l-select">lang</label>
                                                <select class="form-control input-sm" id="test-problem-l-select">
                                                    <option selected="">C</option>
                                                    <option>C++</option>
                                                    <option>Java</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <textarea class="form-control" id="test-problem-code"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Problem List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><button id="multiSelect" class="btn btn-sm btn-info">多选</button><button id="cancelSelect" class="btn btn-sm btn-info" style="display: none;">取消</button>&nbsp<button id="allSelect" class="btn btn-sm btn-info" style="display: none;">全选</button>&nbsp<button id="deleteSelect" class="btn btn-sm btn-info" style="display: none;">删除</button></div>
                <div class="panel-body">
                    <table width="100%" id="problem-list-table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 80px">ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th style="width: 100px">Option</th>
                                <th style="width: 180px">Aviliable</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php foreach($problems as $problem):?>
                            <tr id="problem_list_row_<?=$problem->code?>">
                                <td><?=$problem->code?></td>
                                <td style="white-space:nowrap;text-overflow: ellipsis;overflow:hidden;max-width: 100px;"><a href="" data-toggle="modal"  data-target="#show-one-problem"><?=$problem->title?></a></td>
                                <td style="white-space:nowrap;text-overflow: ellipsis;overflow:hidden;max-width: 150px;"><?=$problem->description?></td>
                                <td>
                                    <a href="#" class="problem-one-edit" data-toggle="modal"  data-target="#edit-one-problem" data-code="<?=$problem->code?>">编辑</a>
                                    |
                                    <a href="#" class="problem-one-test" data-toggle="modal"  data-target="#test-one-problem" data-code="<?=$problem->code?>"> 测试</a>
                                </td>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" name="<?=$problem->code?>" id="<?=$problem->code?>-a" value="aviliable" data-code="<?=$problem->code?>" <?php if($problem->available==1) echo "checked=\"checked\""?>>可用
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="<?=$problem->code?>" id="<?=$problem->code?>-b" value="unaviliable" data-code="<?=$problem->code?>" <?php if($problem->available==0) echo "checked=\"checked\""?>>不可用
                                    </label>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Code Mirror -->
    <script src="../vendor/codemirror/codemirror.js"></script>
    <!-- Code Mirror C-like -->
    <script src="../vendor/codemirror/clike.js"></script>
    <!-- Create Code Mirror -->
    <script src="../vendor/codemirror/cm-create-theme.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/admin-problem-list.js"></script>
    <script src="../dist/request/admin-problem-list.js"></script>
</div>