
<?php if($session->has('errors')) { ?>
    <div id="formmessage" class="form-notice" style="display:block;">
        <?php
        foreach ($session->get('errors') as $errs){ ?>
            <p><?= $errs ?></p>
        <?php };$session->remove('errors'); ?>
    </div>
<?php } ?>