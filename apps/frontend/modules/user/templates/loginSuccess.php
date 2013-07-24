<h2>Enter your email and password to login</h2>

<form action="<?php echo url_for('users/login') ?>" method="post">
    <?php
    echo $form;
    ?>
    <input type="submit" value="Save" id="btnSubmit" />
</form>