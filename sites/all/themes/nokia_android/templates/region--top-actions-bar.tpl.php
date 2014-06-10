<div class="navbar dee-navbar-actions-bar" role="action">
    <div class="container">
        <div class="hidden-xs row">
            <div class="col-md-10 col-sm-10 col-lg-10">
                
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2">
                <?php if (!user_is_logged_in()) { ?>
                    <?php print ctools_modal_text_button(t('login'), 'modal_forms/nojs/login', t('Login via modal'), 'ctools-modal-modal-popup-small'); ?><span>/</span><?php print ctools_modal_text_button(t('register'), 'modal_forms/nojs/register', t('Login via modal'), 'ctools-modal-modal-popup-small'); ?>
                <?php } else { ?>
                    <?php print l('logout', 'user/logout'); ?>
                <?php } ?>
            </div>
        </div>
        <div class="hidden-sm hidden-md hidden-lg row">
            <div class="col-xs-6">
                
            </div>
            <div class="col-xs-6">
                <?php if (!user_is_logged_in()) { ?>
                    <?php print l('signup', 'user/register',array('attributes'=>array('class'=>array('pull-right')))); ?><span class="pull-right">/</span><?php print l('login', 'user/login',array('attributes'=>array('class'=>array('pull-right')))); ?>
                <?php } else { ?>
                    <?php print l('logout', 'user/logout',array('attributes'=>array('class'=>array('pull-right')))); ?>
                <?php } ?>
            </div>
        </div>
        
    </div>
</div>


