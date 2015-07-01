<html>
  <head>
    <title>quickiebin</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <h1>quickiebin &mdash; the no bullshit, no frills pastebin</h1>
    <hr>
    <form action="save.php" method="post" enctype="multipart/form-data">
      file extension: <input type="text" name="ext">
      <br>
      <br>
      code:
      <br>
      <textarea class="code" name="code"></textarea>
      <br>
      <br>
      <button type="submit">save</button>
    </form>
  </body>
</html>