<!DOCTYPE html>
<html>
  <head>
    <title>MyPage</title>
  </head>
  <body>
    <style scoped="">
      #myPhoto {
        width: 100px;
        height: 100px;
      }
    </style>
    <?php
      include 'Dogs.php';
      include 'Animals.php';
      echo "<h1>Animals</h1>";
      $myCat = new Animals("Roger", 12);
      $myDog = new Dogs("Albert", 13);
      echo "<h3>The first animal is </h3><br><img id='myPhoto' src='".$myDog->photo."' alt=''>";
      echo "<h3>The second animal is ".$myDog->name.".</h3>";
      echo $myDog->bark();
    ?>
  </body>
</html>

