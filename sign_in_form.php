<div class="row">
    <form class="col s12 m8 push-m2 l6 push-l3 center-align" method="post">
        <h3>Sign In</h3>
        <h6 class="red-text"><?php echo $error; ?></h6>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_box</i>
                <input id="username" name="username" type="text" class="">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="password" name="password" type="password" class="">
                <label for="password">Password</label>
            </div>
        </div>
        <p class="center-align">
            <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Sign In
                <i class="material-icons right">exit_to_app</i>
            </button>
        </p>
    </form>
</div>
