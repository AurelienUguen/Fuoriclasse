<section>
    <div class="loginform container container-fluid">
        <form method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Username : </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Password : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" value="LogIn"class="btn btn-primary float-end">Log In</button>
        </form>
    </div>
</section>

<?php

/* $users = LogUser::logUser();
var_dump($users); */