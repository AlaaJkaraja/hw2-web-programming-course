<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drivers</title>
    <style>
    table,
    th,
    td {
        border: 2px solid #aaa;
        padding: 5px;
    }
    </style>
</head>
<body>
    <table>
            <tr>
                <th>Lat</th>
                <th>Lon</th>
                <th>Driver Name</th>
                <th>Date</th>
            </tr>
            <?php
      $file = fopen("file.txt", "r") or die("Error!");
      $data = fread($file, filesize("file.txt"));
      $json = json_decode($data, true);
      foreach ($json as $obj) {
      ?>
        <tr>
            <td><?= $obj['lat'] ?></td>
            <td><?= $obj['lon'] ?></td>
            <td><?= $obj['driver_name'] ?></td>
            <td><?= $obj['date'] ?></td>
        </tr>
        <?php
      }
  ?>
    </table>
</body>
</html>