<?php 
include_once './php/connect.php';
include_once './includes/header.php';
?>

    <?php
    $sql = 'SELECT * FROM arm ORDER BY ID DESC LIMIT 1;';
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="container-lg bg-white p-5 rounded">
        <h1 class="text-center fw-bold mb-5">Data</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_row($result);
        ?>
            <table class="table table-dark mb-5">
                <thead class="text-center">
                    <th>Control 1</th>
                    <th>Control 2</th>
                    <th>Control 3</th>
                    <th>Control 4</th>
                    <th>Control 5</th>
                    <th>Control 6</th>
                    <th>Running</th>
                </thead>
                <tbody class="text-center">
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>

                </tbody>
            </table>
        <?php } else {
            echo "<h1>There is no data</h1>";
        }
        ?>
        <a
          href="arm.php"
          class="btn btn-success fs-5 fw-bold bottom-0 end-0 mt-3"
          >Go Back</a
        >
</div>
<?php include_once './includes/footer.php' ?>


