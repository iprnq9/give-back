<?php

include 'dbconnect.php';

function formResponse($successBool,$msg){
    if($successBool){
        echo "<div class=\"row\">";
        echo "Success: " . $msg;
        echo "</div>";
    }

    else {
        echo "Error: " . $msg;
    }
}

if(isset($_POST['create'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $zip_code = $_POST['zip_code'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $dob = $_POST['dob'];
    $dob = date("Y-m-d", strtotime($dob));

    if($password1 == $password2){
        $sql = "INSERT INTO users (first_name, last_name, location, email, username, password, dob) VALUES ('$first_name', '$last_name', '$zip_code', '$email', '$username', '$password1', '$dob')";

        $result = mysqli_query($db, $sql);

        if(!$result){
            formResponse(false, "Account not created. Sorry about that.");
        }

        else {
            formResponse(true, "Account created successfully!");
        }
    }

    else{
        formResponse(false, "Passwords don't match!");
    }


}

else { ?>
    <div class="row">
    <form class="col s12 m8 push-m2 l6 push-l3 center-align" method=POST action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
        <h3>Create an Account</h3>
        <div class="row">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">info_outline</i>
                <input id="icon_user" type="text" name="first_name" maxlength="45">
                <label for="icon_first_name">First Name</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix hide">account_box</i>
                <input id="icon_user" type="text" name="last_name" maxlength="45">
                <label for="icon_last_name">Last Name</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">place</i>
                <input id="icon_pass" type="text" name="zip_code" maxlength="5">
                <label for="icon_pass">Zip Code</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">event</i>
                <input class="datepicker" name="dob" type="text">
                <label for="dob" class="active">Date of Birth</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">mail</i>
                <input id="icon_pass" type="email" name="email" maxlength="45">
                <label for="icon_pass">Email Address</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">account_box</i>
                <input id="icon_pass" type="text" name="username" maxlength="45">
                <label for="icon_pass">Username</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="icon_pass" type="password" name="password1" maxlength="45">
                <label for="icon_pass">Password</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="icon_pass" type="password" name="password2" maxlength="45">
                <label for="icon_pass">Confirm Password</label>
            </div>
        </div>
        <p class="center-align">
            <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="create">Create Account
                <i class="material-icons right">person_add</i>
            </button>
        </p>
    </form>
</div>
<script>
    $.getJSON('http://ipinfo.io', function(data){
        var zip = data['postal'];
        console.log(zip);
        $("input[name='zip_code'").val(zip);
    })
</script>
<?php
} //end else
?>
