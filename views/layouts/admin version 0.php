<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OJ Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Code Mirror -->
    <link href="../vendor/codemirror/codemirror.css" rel="stylesheet">
    <link href="../vendor/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
</head>
<body>
    <style type="text/css">
        p{
            margin: 10px;
            text-indent: 2em;
            font-size: 16px;
            line-height: 24px;
        }
    </style>
    <div id="wrapper">
        <!-- 导航栏 -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- 标题 -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="problem-list.html">OJ Admin v1.0</a>
            </div>
            <!-- 顶部导航栏 -->
            <ul class="nav navbar-top-links navbar-right">
            </ul>
            <!-- 左侧导航栏 -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul id="side-menu" class="nav in">
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 题库模块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a id="problem-list" href="#">题目列表</a>
                                </li>
                                <li>
                                    <a id="problem-add" href="#">添加题目</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 课程模块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="class-list">课程列表</a>
                                </li>
                                <li>
                                    <a href="#" id="class-add">添加课程</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 题库模块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="problem-list.html">题目列表</a>
                                </li>
                                <li>
                                    <a href="problem-list.html">添加题目</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 竞赛模块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="problem-list.html">竞赛列表</a>
                                </li>
                                <li>
                                    <a href="problem-list.html">添加竞赛</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a id="user-student" href="#">学生管理</a>
                                    <a id="user-teacher" href="#">教师管理</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        


        <div id="page-wrapper" style="min-height: 722px;">
            <?= $content ?>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script> -->
    
    <!-- Code Mirror -->
    <script src="../vendor/codemirror/codemirror.js"></script>
    <!-- Code Mirror C-like -->
    <script src="../vendor/codemirror/clike.js"></script>
    <!-- Create Code Mirror -->
    <script src="../vendor/codemirror/cm-create-theme.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/oj-admin.js"></script>
    <script src="../dist/request/admin.js"></script>
</body>
</html>