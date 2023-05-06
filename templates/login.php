<?php

$user = UserListController::getOneUser();

var_dump($user);

?>

<section>
    <div class="loginform container container-fluid">
        <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username : </label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Password : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" value="LogIn"class="btn btn-primary float-end">Log In</button>
        </form>
    </div>
</section>