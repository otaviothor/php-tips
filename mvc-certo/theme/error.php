<?php $v->layout("_theme"); ?>

<div class="error">
  <h2>
    Ooops! Erro <?= $error ?>
  </h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>
</div>

<?php $v->start("sidebar"); ?>
<a title="Voltar ao início!" href="<?= url(); ?>">Voltar</a>
<?php $v->end(); ?>