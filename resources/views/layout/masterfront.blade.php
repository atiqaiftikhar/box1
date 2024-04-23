<!DOCTYPE html>
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gift Box</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

<style>


</style>
    </head>
<body>


  <script>
  document.getElementById('giftBox').addEventListener('click', function() {
  this.classList.toggle('open');
  this.classList.toggle('closed');
});


  </script>

@yield('content')

</body>
</html>