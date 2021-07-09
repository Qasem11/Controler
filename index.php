<?php include_once './includes/header.php';?>

  <div class="d-flex justify-content-center align-items-center h-100">
      <div class="container-lg bg-white p-5 rounded">
        <form action="./php/controlBase.php" method="POST">
          <div class="row justify-content-center">
            <button
              class="btn btn-outline-primary btn-lg fs-3 fw-bold w-25"
              name="movment"
              value="forward"
            >
              forward
            </button>
          </div>
          <div class="row">
            <button
              class="col btn btn-outline-primary btn-lg g-4 fs-3 fw-bold w-25"
              name="movment"
              value="Left"
            >
              Left
            </button>
            <button
              class="
                col
                btn btn-outline-primary btn-lg
                g-4
                mx-3
                fs-3
                fw-bold
                w-25
              "
              name="movment"
              value="Stop"
            >
              Stop
            </button>
            <button
              class="col btn btn-outline-primary btn-lg g-4 fs-3 fw-bold w-25"
              name="movment"
              value="Right"
            >
              Right
            </button>
          </div>
          <div class="row justify-content-center">
            <button
              class="btn btn-outline-primary btn-lg g-5 fs-3 fw-bold w-25"
              name="movment"
              value="Backward"
            >
              Backward
            </button>
          </div>
        </form>
        <a
          href="./retrieveBase.php"
          class="btn btn-success fs-5 fw-bold bottom-0 end-0 mt-3"
          >Show Data</a
        >
      </div>
    </div>

<?php include_once './includes/footer.php' ?>