
    <!-- class-list 课程列表 -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><a id="class-add-btn" role="button" class="btn btn-info">添加课程</a></div>
                <div class="panel-body">
                    <div class="row">
                        <?php foreach($classes as $class):?>
                        <div class="col-lg-4 col-md-6">
                            <a href="#" class="class-info-btn" data-code="<?=$class->id?>">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><?=$class->course?></div>
                                    <div class="panel-body">
                                        <img src="../src/img/class.png" class="pull-left img-rounded" style="height: 116px;width: 116px;">
                                        <div style="margin-left: 23px;float: left;">
                                            <h4><?=$class->user->name?><h4>
                                            <br/>
                                            <p style="color: black; font-size: 15px;"><?=$class->term?></p>
                                            <p style="color: black; font-size: 13px;">
                                                <?php echo str_replace('-','.',$class->start_date).'-'.str_replace('-','.',$class->end_date)?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                        <div class="col-lg-4 col-md-6">
                            <a href="#">
                                <div class="panel panel-green">
                                    <div class="panel-heading">C++程序设计</div>
                                    <div class="panel-body">
                                        <img src="../src/img/class.png" class="pull-left img-rounded" style="height: 116px;width: 116px;">
                                        <div style="margin-left: 23px;float: left;">
                                            <h4>张翊卓<h4>
                                            <br/>
                                            <p style="color: black; font-size: 15px;">2017学年</p>
                                            <p style="color: black; font-size: 13px;">2017.08.08-2018.03.03</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="#">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">JAVA语言程序设计</div>
                                    <div class="panel-body">
                                        <img src="../src/img/class.png" class="pull-left img-rounded" style="height: 116px;width: 116px;">
                                        <div style="margin-left: 23px;float: left;">
                                            <h4>张翊卓<h4>
                                            <br/>
                                            <p style="color: black; font-size: 15px;">2017学年</p>
                                            <p style="color: black; font-size: 13px;">2017.08.08-2018.03.03</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <script src="../dist/request/admin-class-list.js"></script>
