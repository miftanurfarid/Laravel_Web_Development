
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir</title>
</head>
<body>
  <h1>Formulir</h1>

  <p>Form ini hasil view form.blade.php hasil dari controller RegisterController.php</p>

  <form action="/sapa" method="POST">
    @csrf
    <input type="text" name="Nama" id="">
    <input type="submit" value="Masuk Dah">
  </form>
</body>
</html>