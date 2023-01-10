<?php 

require_once("header.php");

if (isset($_COOKIE['username'])) {
    if ($_COOKIE['username'] == "TOPS") {
        header("location:userdashboard.php");
    }
}


if (isset($_REQUEST['btn-save'])) {
    $_SESSION['Testing'] = "checking";
    // echo "<pre>";
    // print_r($_REQUEST);
    if ($_POST['username'] == "TOPS" && $_REQUEST['password'] =="123") {
        $_SESSION['UserData'] = array("UserName"=>$_POST['username'],"password"=>$_REQUEST['password']);
        if (isset($_REQUEST['setcookieuserlogin'])) {
            setcookie("username","TOPS",time()+3600);
            // $username = "value"
        }
        header("location:userdashboard.php");
    }else{
        echo "Invalid user";
    }
}

?>

<div class="container">
<div class="row">
    <div class="col-lg-4 offset-lg-4 my-4">
        <div class="card border-success">
    
            <div class="card-header text-center">login</div>
            <div class="card-body">
                <form method="post">
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter User Name" name="username" id="username">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                        </div>
                    </div>
                    <div class="row my-2 text-center">
                        <div class="col">
                            <input type="checkbox" name="setcookieuserlogin" value="true" id="setcookieuserlogin"> Remember me
                        </div>
                    </div>
                    <div class="row my-2 text-center">
                        <div class="col">
                            <input type="submit" class="btn btn-sm btn-primary" name="btn-save" id="btn-save">
                            <input type="reset" class="btn btn-sm btn-danger">
                        </div>
                    </div>
                </form>
            </div>
    
        </div>

    </div>
</div>
</div>