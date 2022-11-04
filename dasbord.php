<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <div class="container">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MA SINH VIEN</th>
      <th scope="col">TEN</th>
      <th scope="col">LOP</th>
    </tr>
  </thead>
  <tbody>
 

    <?php 
    require_once 'connect.php';
    $dasboard_sql = "SELECT * FROM sinhvien order by ID, masv,hoten,lop";
    $result  = mysqli_query($conn,$dasboard_sql); // bien nay se tre ve du lieu cho chung ta
    // duyet qua result va in ra
   while( $arr = mysqli_fetch_array($result)){
?>
 <tr>
      <th scope="row"><?php echo $arr['ID']; ?></th>
      <td><?php echo $arr['maSV']; ?></td>
      <td><?php echo $arr['hoTen']; ?></td>
      <td><?php echo $arr['lop']; ?></td>
    </tr>
    <?php
     }
echo '<a href="index.html">Ve trang chu</a>';

    ?>
     </tbody>
</table>

   
   
  </div>
  </body>
</html>


