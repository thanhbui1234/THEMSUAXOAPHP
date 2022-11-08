<?php 
include './components/header.php';
?>
  <body>
    <div class="container pt-4">
      <h1>Dang ky</h1>
      <form action="add.php" method="POST" class="" onsubmit="return check()" >
        <div class="form-group">
          <label for="masv">Ma Sinh Vien</label>
          <input
            name="masv"
            type="text"
            class="form-control"
            id="masv"
            placeholder="ma sinh vien"
          />
        </div>
        <div class="form-group">
          <label for="name">Ho va ten</label>
          <input
            name="hoten"
            type="text"
            class="form-control"
            id="name"
            aria-describedby="emailHelp"
            placeholder="Ho va ten"
          />
        </div>

        <div class="form-group">
          <label for="lop">Lop</label>
          <input
            name="lop"
            type="text"
            class="form-control"
            id="lop"
            placeholder="lop"
          />
        </div>

        <button name="submit" type="submit" class="btn btn-success">
          Them Sinh Vien
        </button>
      </form>
    </div>
   
  </body>
</html>
