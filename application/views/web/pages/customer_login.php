

<div class="main">
    <div class="content" style="text-align: center">
         <div class="login_panel" style="width:400px;text-align:center;display:inline-block;float: none">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/logincheck');?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text"/>
                <input name="customer_password" placeholder="Enter Your Password" type="password"/>
                <p class="note">If you forgot your passoword just enter your email and click <a href="<?php echo base_url('/customer/register'); ?>">here</a></p>
                <div class="buttons"><button class="grey"><a href="<?php echo base_url('/web/home'); ?>">Sign In</button></div>
            </form>
        </div>	
        <div class="clear"></div>
    </div>
</div>