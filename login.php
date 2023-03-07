<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sign Up</title>
</head>

<body>
    <?php include "header.php" ?>
    <h1 class="is-size-1 has-text-centered font-lato-bold has-text-" style="padding: 25px;">Log In</h1>
    <div class="container ">
        <div class="card  has-background-white-ter">
            <div class="columns is-12 " style="padding: 25px;">
                <div class="field column" style="padding: 25px;">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text">
                    </div>
                </div>
                <div class="field column" style="padding: 25px;">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email">
                    </div>
                </div>
                <div class="field column" style="padding: 25px;">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text">
                    </div>
                </div>
                <div class="field column" style="padding: 25px;">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password">
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="field column is-1" style="margin:0px auto; display:block;">
                    <input type="button" class="button is-info is-outlined" value="Sign Up">
                </div>
            </div>
            <div class="columns ">
                <div class="column is-12 has-text-centered">
                    <a href="signup.php">
                    <p class="">Not a member? Sign Up Here</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>