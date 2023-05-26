<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php foreach ($products as $prod) : ?>
            <tr>
                <td><?= $prod['id'] ?></td>
                <td><?= $prod['name'] ?></td>
                <td><?= $prod['price'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>