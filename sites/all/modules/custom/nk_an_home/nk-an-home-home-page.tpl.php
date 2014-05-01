<?php ?>
<div class="row">
    <div class="dee-home-pane-wrapper col-md-6 col-sm-6 col-lg-6">
        <h3 class="dee-home-pane-wrapper-header text-center">
            <?php echo $arguments['featured']['title']; ?>
        </h3>
        <div class="dee-home-pane-wrapper-content">
            <?php
            foreach ($arguments['featured']['data'] as $value) {
                echo $value . "<br/>";
            }
            ?>
        </div>
    </div>
    <div class="dee-home-pane-wrapper col-md-6 col-sm-6 col-lg-6">
        <h3 class="dee-home-pane-wrapper-header text-center">
            <?php echo $arguments['blogs']['title']; ?>
        </h3>
        <div class="dee-home-pane-wrapper-content">
            <?php
            foreach ($arguments['blogs']['data'] as $value) {
                echo $value . "<br/>";
            }
            ?>
        </div>
     </div>
</div>