<div class="navbar dee-navbar-default dee-navbar-top-nav" role="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand dee-navbar-brand" href="#"><b>Nokia Andriod</b></a>
                </div>
                <div class="navbar-collapse collapse " id="bs-example-navbar-collapse-1">
                    <?php if ($content): ?>
                        <section class="<?php print $classes; ?>">
                            <?php print $content; ?>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
</div>