<?php 
include './components/header.php';
?>
  <body>
  <div class="container">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MA SINH VIEN</th>
      <th scope="col">TEN</th>
      <th scope="col">LOP</th>
      <th scope="col">THAO TAC</th>

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
     <td>
      <a href="edit.php?id= <?php echo $arr['ID'];?>" ><button type="button" class="btn btn-outline-success">Sua</button>
</a>
      <a onclick="return confirm('Do you want to delete this studen?')" href="delete.php?id=<?php echo $arr['ID']; ?>"><button type="button" class="btn btn-outline-danger">Xoa</button>
</a>
     </td>

    </tr>
    <?php
     }
echo '<a href="index.php">Ve trang chu</a>';

    ?>
     </tbody>
</table>

   
   
  </div>
  </body>
</html>


