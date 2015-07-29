<div class="login-container">
    <div class="well-login">
        <?php if (validation_errors()) {
            echo _erMsg2(validation_errors());
        }
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?> 
        <form method="post" action="<?php echo base_url() . "index/login" ?>" >
            <div class="control-group">
                <div class="controls">
                    <div>
                        <input id="username" name="username" required type="text" placeholder="Email" class="login-input user-name">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div>
                        <input id="password" name="password" required type="password" placeholder="Password" class="login-input user-pass">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <button style="background:#3c8dbc none repeat-x scroll 0 0" class="btn btn-inverse login-btn" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>