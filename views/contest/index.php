<!-- contest.html 右下角页面 -->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contest</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="contest-add.html" class="btn btn-info">添加竞赛</a>
                </div>
                <div class="panel-body">
                    <table width="100%" id="contest-table" class="table table-striped table-hover">
                        <thead>
                            <th>Contest</th>
                            <th>Teacher</th>
                            <th>Contestant</th>
                            <th>Available</th>
                            <th>Sign Up</th>
                            <th>Password</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            <?php foreach($contests as $contest):?>
                            <tr>
                                <td><?=$contest->title?></td>
                                <td><?=$contest->teacher?></td>
                                <td><?=$contest->contestant?></td>
                                <td>
                                    <?php if($contest->available)
                                               echo "<i class=\"fa fa-check\" style=\"color: green\"></i>&nbsp;&nbsp;可用";
                                          else echo "<i class=\"fa fa-close\" style=\"color: red\"></i>&nbsp;&nbsp;不可用"
                                    ?>
                                </td>
                                <td>
                                    <?php if($contest->can_sign)
                                                echo "<i class=\"fa fa-check\" style=\"color: green\"></i>&nbsp;&nbsp;允许";
                                          else  echo "<i class=\"fa fa-close\" style=\"color: red\"></i>&nbsp;&nbsp;不允许";
                                    ?>
                                </td>
                                <td>
                                    <?php if($contest->need_password)
                                                echo "<i class=\"fa fa-check\" style=\"color: green\"></i>&nbsp;&nbsp;需要";
                                          else  echo "<i class=\"fa fa-close\" style=\"color: red\"></i>&nbsp;&nbsp;不需要";
                                    ?>
                                </td>
                                <td><a href="#" class="problem-edit" data-id="<?=$contest->id?>" >编辑</a>
                                |
                                <a href="">删除</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/admin-contest.js"></script>
    <script src="../dist/request/admin-contest.js"></script>
