<?php
require 'functions.php';
require 'inc/head.php';

redirectToCondition('index', false);
if (!empty($_POST['loginname'])) {
    $cleanedUserName = htmlentities(trim($_POST['loginname']));
    if (!empty($cleanedUserName)) {
        $_SESSION['username'] = $cleanedUserName;
        redirectToCondition('index', false);
    }
}
?>
<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://i.pinimg.com/originals/a1/82/43/a18243de7390cee4e33cfe67cc249715.jpg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">not bad</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>
