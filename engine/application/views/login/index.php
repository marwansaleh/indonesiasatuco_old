<div class="login-alert-box">
    <div id="alert-login" class="login-alert-content">
        <?php echo isset($message_error)?$message_error:''; ?>
    </div>
</div>
<div class="container">
    <form method="post" id="login-form" class="login-form" action="<?php echo $submit; ?>" >        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username /email" value="<?php echo $remember ? $remember->username:''; ?>" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" value="<?php echo $remember ? $remember->password:''; ?>" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" value="remember-me" <?php echo $remember?'checked="checked"':''; ?>> Remember me
                <span class="pull-right"> <a href="<?php echo site_url('auth/request_reset_password'); ?>"> Forgot Password?</a></span>
            </label>
            <button id="btn-login" class="btn btn-primary btn-lg btn-block" data-loading-text="loading..." type="submit">Login</button>
        </div>
    </form>
</div>