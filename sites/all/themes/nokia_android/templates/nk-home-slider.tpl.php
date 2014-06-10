
<div  data-ride="carousel" class="carousel slide dee-home-carousel" id="carousel-example-generic">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $count = 0;
        $number_of_image = count($arguments['slider_node']->field_slides[LANGUAGE_NONE]);
        ?>
        <?php while ($number_of_image > 0) { ?>
            <li data-slide-to="<?php echo $count; ?>" data-target="#carousel-example-generic" class="
            <?php
            if ($count == 0) {
                echo ' active';
            }
            ?>"></li>

            <?php
            $count++;
            $number_of_image--;
        }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        foreach ($arguments['slider_node']->field_slides[LANGUAGE_NONE] as $count => $image) {
            $image_file = file_load($image['carousel_image']);

            $variables = array(
                'path' => file_create_url($image_file->uri),
                'alt' => $image['image_alt_text'],
            );
            $img = theme('image', $variables);
            ?>
            <div class="item <?php
             if ($count == 0) {
                 echo "active";
             }
             ?>">
            <?php echo $img; ?>
                <div class="carousel-caption">
                    <p><?php echo $image['carousel_caption']; ?> </p>
                </div>
            </div>
    <?php
}
?>

    </div>

    <!-- Controls -->
    <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a data-slide="next" href="#carousel-example-generic" class="right carousel-control">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
