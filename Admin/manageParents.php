<?php
include "adminSiderNav.php";
?>

<?php
include "adminTop.php";
?>

<?php

$connection=mysqli_connect("localhost", "root","mysql", "ptcs", "3306");
if (!$connection){
    echo mysqi_connect_error();
}else{
$resultset = mysqli_query($connection, "select * from student ");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>MANAGE STUDENTS</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>ADD STUDENT</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form  id="frmMngParent" method="post" enctype="application/x-www-form-urlencoded" class="form-horizontal form-label-left" novalidate>

                            <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>-->
                            <!--</p>-->
                            <span class="section">Student Info</span>

                            <div>
                                <button id="btnDeletePrnt" class="btn btn-danger" type="submit">Delete </button>
                                <a href="addClass.php"><button id="btnNewParent" class="btn btn-primary" type="button">New Student</button></a>
                            </div>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">Admin Code </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title">Telephone </th>
                                        <th class="column-title">Discription </th>

                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>
                                    </thead>

                                    <tbody>
                                    <?php
                                    while ($rowdata = mysqli_fetch_row($resultset)) {
                                        echo "<tr>
                                                  <td><input type=\"checkbox\" value=$rowdata[0] name=\"stcode[]\"></td>
                                                  <td>$rowdata[0]</td>
                                                  <td>$rowdata[1]</td>
                                                  <td>$rowdata[2]</td>
                                                  <td><a href='upadteAdmin.php? =$rowdata[0] & name=$rowdata[1] & email=$rowdata[2] & title=Manage Admin >Update Admin'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
                                              </tr>";
                                    }
                                    mysqli_free_result($resultset);

                                    mysqli_close($connection);
                                    }
                                    ?>
                                    </tbody>
                                </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "adminFooter.php";
?>
