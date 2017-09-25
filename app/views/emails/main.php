<form name="login-form" class="login-form" action="<?php echo base_url()?>security/forgotpwd" method="post">
    <div class="header">
        <img src="<?php echo base_url()?>assets/img/favicon.png" class="logo"><br><br>
        <h5>Security - Besofty Software Ltd.</h5>
        <?php
            $error = $this->session->userdata('error');
            if (isset($error)) {
                echo "<span style='color:red; font-size: 13px'>$error</span>";
                $this->session->unset_userdata('error');
            }
        ?>
    </div>

    <div class="content">
        <input name="email_address" type="email" autofocus class="input username" placeholder="example@besofty.com" required="required" onfocus="this.value=''" />
    </div>

    <div class="footer">
        <input type="submit" name="btnsubmit" id='btn' value="Send" class="button animate-me" />
        <div class="formFooter">
            <div class="pull-left"><a href="<?php echo base_url()?>login">Login</a></div>
        </div>
    </div>
</form>