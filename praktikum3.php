<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Warung Joy || 105218032</title>
  <style>
    .redcells {
      background-color: red;
      color: white;
    }

    .numhead {
      background-color: #00e699;
    }

    .num {
      background-color: #7fffd4;
    }

    .incell {
      background-color: #e6fff7;
    }

    h1 {
      text-align: center;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #ccffee;
    }
  </style>
</head>

<body>
  <h1>Stock Barang Warung Joy</h1>
  <center>
    <?php
    $buah = [
      ['nama' => "Jeruk", 'stock' => 10, 'kg' => 20, 'gr' => 20 * 1000, 'mg' => 20 * 1000000, 'liter' => "-"],
      ['nama' => "Durian", 'stock' => 20, 'kg' => 25, 'gr' => 25 * 1000, 'mg' => 25 * 1000000, 'liter' => "-"],
      ['nama' => "Mangga", 'stock' => 15, 'kg' => 40, 'gr' => 40 * 1000, 'mg' => 40 * 1000000, 'liter' => "-"],
      ['nama' => "Jambu", 'stock' => 32, 'kg' => 21, 'gr' => 21 * 1000, 'mg' => 21 * 1000000, 'liter' => "-"],
      ['nama' => "Rambutan", 'stock' => 40, 'kg' => 22, 'gr' => 22 * 1000, 'mg' => 22 * 1000000, 'liter' => "-"],
      ['nama' => "Markisa", 'stock' => 'kosong', 'kg' => 0, 'gr' => 0 * 1000, 'mg' => 0 * 1000000, 'liter' => "-"]
    ];

    ?>
    <table class="table" border="3">
      <tr>
        <th class="numhead">No</th>
        <th class="numhead">Nama Barang</th>
        <th class="numhead">Stock</th>
        <th class="numhead">Berat (Kg)</th>
        <th class="numhead">Berat (Gram)</th>
        <th class="numhead">Berat (Miligram)</th>
        <th class="numhead">Berat (Liter)</th>
      </tr>


      <?php
      foreach ($buah as $index => $nama) { ?>

        <tr>
          <td class="num"><?= $index + 1 ?></td>
          <td><?= $nama['nama'] ?></td>
          <td class="<?php if ($nama['stock'] == 'kosong') {
                        echo 'redcells';
                      } ?>"><?= $nama['stock'] ?></td>
          <td><?= $nama['kg'] ?></td>
          <td><?= $nama['gr'] ?></td>
          <td><?= $nama['mg'] ?></td>
          <td><?= $nama['liter'] ?></td>
        </tr>
      <?php } ?>

    </table>
  </center>

</body>

</html>