<?php
script('imagestats', 'settings/admin'); ?>
<form name="imageStatsForm" class="section" action="#" method="post">
    <h2><?php p($l->t('Image Stats')); ?></h2>
        <input id="imageStatsDefault" type="checkbox" class="checkbox"/>
        <label for="imageStatsDefault"><?php p("Include Templates in Stats for Default")?></label>

</form>
