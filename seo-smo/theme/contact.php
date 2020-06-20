<?php $v->layout("_theme"); ?>

<div class="contact">
  <h2>Fale conosco!</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, dolorum!</p>

  <form action="<?= url("contact"); ?>" method="post" enctype="multipart/form-data">

    <input type="text" name="name" placeholder="Seu nome">
    <input type="email" name="email" placeholder="Seu email">
    <textarea name="message" placeholder="Mensagem!" rows="3"></textarea>
    <button>Enviar mensagem!</button>

  </form>
</div>

<?php $v->start("scripts"); ?>
<script>
  $(() => {
    $('button').after('<button type="reset">Limpar!</button>')
  })
</script>

<?php $v->end(); ?>