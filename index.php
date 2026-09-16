<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <?php
            echo"Cau 2: ";
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>Chuong $i</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++){
                echo "<td>$i x $j=". $i*$j."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


  <?php
  echo "<br> câu 1: ";
  $N = rand(1, 100);
  echo "Số tự nhiên random: N = $N";
  echo "<br>Các số chẵn là: ";
  for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 0)
      echo "$i ";
  }


  //Cau 3
  //a
  echo "<br> Cau 3: ";
  $M = rand(-100, 100);
  echo "<br> Giá trị của M: $M";
  if ($M > 0) {
    echo "<br> M là số dương";
    echo "<br> Các ước số của M: ";
    for ($i = 1; $i <= $M; $i++) {
      if ($M % $i == 0)
        echo "$i ";
    }
    //b
    //Tim so nguyen to
  
    $dem = 0;
    for ($i == 1; $i <= $M; $i++) {
      if ($M % $i == 0) {
        $dem++;
      }
    }
    if ($dem == 2) {
      echo "<br>$M là số nguyên tố";
    } else
      echo "<br>$M không là số nguyên tố";

    //c
    //Tinh tong cac so nguyen to < N
    $tong = 0;
    for ($k = 2; $k < $M ; $k++) {
      $dem_k= 0;
      for ($j = 1; $j <= $k; $j++) {
        if ($k % $j == 0) {
        $dem_k++; 
      } 
    }
    if($dem_k == 2) {
      $tong+= $k; 
      }
    }
    echo "<br> Tổng các số nguyên tố nhỏ hơn $M là: $tong";
    //d
    //Tim so chinh phuong
    $E = (int) sqrt($M);
    if ($E * $E == $M){
      echo "<br> $M là số chính phương";
    }else
      echo "<br> $M không là số chính phương";
  } else 
    echo "<br> M không là số nguyên dương";
  
  ?>
</body>

</html>