<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <link rel="shortcut icon" href="http://chocolat.nois3.net/app/themes/chocolat/img/favicon.jpg">
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders as $order)
    <tr>
      <td>{{ $order->name }}</td>
      <td>{{ $order->email }}</td>
    </tr>
  @endforeach
  </tbody>
</table>

</body>
</html>

