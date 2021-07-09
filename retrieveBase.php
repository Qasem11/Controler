<?php 
include_once './php/connect.php';
include_once './includes/header.php';

?>

<div class="d-flex justify-content-center align-items-center h-100">
      <div class="container-lg bg-white p-5 rounded">
      <?php
            $sql = "SELECT movment from base WHERE id = 1;";
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_row($result);
            ?>
        <h1 class="text-center fw-bolder display-1"><?php  echo $row[0];?></h1>
        <?php } else {?>
            <h1 class="retrieve text-center fw-bold display-2">No Data</h1>
        <?php }?>

        <a
          href="./index.php"
          class="btn btn-success fs-5 fw-bold bottom-0 end-0 mt-3"
          >Go Back</a
        >
      </div>
    </div>

</div>

<?php include_once './includes/footer.php'?>