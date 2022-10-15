<link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet">

<body id="particles-js"></body>
<div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form name="form1" class="box" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <h4>Silahkan Login</h4>
            <input type="text" name="username" placeholder="Username" autocomplete="off">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">

            <input type="submit" value="Sign in" class="btn1">
        </form>

    </div>
    <div class="footer">
        <span>Made with <i class="fa fa-heart pulse"></i> Rizqia Fauziah Rachma</span>
    </div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/login.js"></script>