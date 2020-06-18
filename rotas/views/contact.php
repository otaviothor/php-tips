<!DOCTYPE html>
<html lang="pt-bt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeCode/Router</title>
</head>

<body>

  <form action="<?= $url; ?>/contato" method="POST">
    <select name="_method">
      <option value="POST">POST</option>
      <option value="PUT">PUT</option>
      <option value="PATCH">PATCH</option>
      <option value="DELETE">DELETE</option>
    </select>

    <input type="text" name="first_name" value="Robson" />
    <input type="text" name="last_name" value="Leite" />
    <input type="text" name="email" value="cursos@upinside.com.br" />

    <button>CoffeeCode</button>
  </form>

</body>

</html>