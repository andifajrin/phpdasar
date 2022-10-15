<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
<!-- cara satu/manual string dalam php -->
  <table border="1" cellpadding="10" cellspacing="0">

  <!-- <?php
      for($i = 1; $i <= 3; $i++){
        echo "<tr>";
          for($j = 1; $j <=5; $j++){
            echo "<td>$i,$j</td>";
            }
        echo "</tr>";    
        }
    ?> -->
<!-- cara template -->
    <?php
      for($i = 1; $i <= 3; $i++) : ?>
        <tr>
          <?php for($j = 1; $j <=5; $j++) : ?>
          <!-- echo bisa diganti dengan tanda = apabila hanya untuk melakukan print variabel -->
            <td><?php echo "$i,$j" ?></td>
          <?php endfor; ?>         
        </tr>
      <?php endfor; ?>


<!-- Cara template while -->
    <!-- <?php
    $i = 1;
    while($i <= 3 ) : ?>
    <tr>
        <?php
        $j = 1;
        $i = 5;
        while($j <= 5) : ?>
            <td> <?php= "$i,$j" ?></td>
        <?php $i++; ?>
        <?php endwhile; ?>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?> -->
    </table>        
</body>
</html>