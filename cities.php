
<div class="city">


<h2>The teams are located in the following cities:</h2>
<?php 
foreach($teams as $team => $teaminfo) {
    $city = $teaminfo['city'];?>
    <p class="cities"><?php echo "$team: $city <br>"; ?></p>
<?php } ?>
</div>