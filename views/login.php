<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>Sign In</h2>
                        <input class="form-control" id="username" name="username" placeholder="username" required="required" type="text" />
                        
                        <input class="form-control" id="password" name="password" placeholder="password" required="required" type="password" />
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Client" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
    include("includes/footer.php");
?>