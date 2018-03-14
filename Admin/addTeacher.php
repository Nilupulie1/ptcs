<?php
include "adminSiderNav.php";
?>

<?php
include "adminTop.php";
?>

<?php
$connection1=mysqli_connect("localhost", "root","mysql", "parentteachcomsys", "3306");
if (!$connection1){
    echo mysqi_connect_error();
}else {
    $resultset1 = mysqli_query($connection1, "select sclName from school");

}
?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>MANAGE TEACHERS</h3>
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
                                        <h2>ADD TEACHERS</h2>
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

                                        <form class="form-horizontal form-label-left" novalidate>

                                            <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>-->
                                            <!--</p>-->
                                            <span class="section">Teacher Info</span>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teachCode">Teacher Code <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="teachCode" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="teachCode"  required="required" type="text">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="scl">School <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select id="scl" class="form-control ">
                                                        <?php
                                                        while ($result = mysqli_fetch_row($resultset1)) {
                                                            echo "<option value=$result[0]>$result[0]</option>";
                                                        }
                                                        mysqli_free_result($resultset1);

                                                        ?>
                                                    </select>

                                                    <!--<input class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="sclDistrict" placeholder=" e.g Jon Doe" required="required" type="text">-->
                                                </div>
                                            </div>


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teachName">Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="teachName" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="4" name="teachName" placeholder="Full Name (eg : Sacred Heart Convent)" required="required" type="text">
                                                </div>
                                            </div>


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!--<div class="item form-group">-->
                                            <!--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="userName">User Name-->
                                            <!--</label>-->
                                            <!--<div class="col-md-6 col-sm-6 col-xs-12">-->
                                            <!--<input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="sclLocation" placeholder=" e.g Galle" required="required" type="text">-->
                                            <!--</div>-->
                                            <!--</div>-->

                                            <!--<div class="item form-group">-->
                                            <!--<label for="password" class="control-label col-md-3">Password</label>-->
                                            <!--<div class="col-md-6 col-sm-6 col-xs-12">-->
                                            <!--<input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">-->
                                            <!--</div>-->
                                            <!--</div>-->


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Discription <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
<?php
include "adminFooter.php";
?>
