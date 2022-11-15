<?php  if (count($errors) > 0) : ?>
  <div class="error" style="color:black;">
        <?php foreach ($errors as $error) : ?>
        <?php echo $error?></br>
        <?php endforeach ?>
  </div>
<?php  endif ?>