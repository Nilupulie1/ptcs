
<?php
include "adminSiderNav.php";
?>

<?php
include "adminTop.php";
?>

<div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>MANAGE CLASSES</h3>
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
                                <h2>ADD CLASS</h2>
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
                                    <span class="section">Class Info</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teachCode">Code <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="teachCode" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="teachCode"  required="required" type="text">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grade">Grade <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="grade"  class="form-control col-md-7 col-xs-12" name="value">
<!--                                            <select id="grade" class="form-control ">-->
<!--                                                <option>Choose option</option>-->
<!--                                                <option>Option one</option>-->
<!--                                                <option>Option two</option>-->
<!--                                                <option>Option three</option>-->
<!--                                                <option>Option four</option>-->
<!--                                            </select>-->

                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clsName">Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="clsName" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="4" name="clsName"  required="required" type="text">
                                        </div>
                                    </div>



                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clsTeacher">Class Teacher <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="clsTeacher" class="form-control ">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                            <!--<input class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="sclDistrict" placeholder=" e.g Jon Doe" required="required" type="text">-->
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_of_Students">No of students <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="no_of_Students" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="4" name="no_of_Students"  required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Discription
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

<!--<script>-->
<!--    $( function() {-->
<!--        -->
<!--        var spinner = $( "#spinner" ).spinner();-->
<!---->
<!--//        $( "#disable" ).on( "click", function() {-->
<!--//            if ( spinner.spinner( "option", "disabled" ) ) {-->
<!--//                spinner.spinner( "enable" );-->
<!--//            } else {-->
<!--//                spinner.spinner( "disable" );-->
<!--//            }-->
<!--        });-->
<!--</script>-->

                <?php
                include "adminFooter.php";
                ?>
            </div>
        </div>

