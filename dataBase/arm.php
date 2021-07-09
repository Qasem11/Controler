<?php include_once './includes/header.php'?>
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="container-lg bg-white p-5 rounded">
        <h1 class="fw-bold text-center">Control</h1>

        <form
          class="d-flex flex-column"
          action="php/controlArm.php"
          method="POST"
          name="control"
        >
          <div class="d-flex justify-content-center my-3">
            <label for="control1" class="me-2">control1</label>
            <input type="range" name="control1" min="0" max="180" />
            <span class="ms-2" id="control1range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
            <label for="control2" class="me-2">control2</label>
            <input type="range" name="control2" min="0" max="180" />
            <span class="ms-2" id="control2range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
            <label for="control3" class="me-2">control3</label>
            <input type="range" name="control3" min="0" max="180" />
            <span class="ms-2" id="control3range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
            <label for="control4" class="me-2">control4</label>
            <input type="range" name="control4" min="0" max="180" />
            <span class="ms-2" id="control4range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
            <label for="control5" class="me-2">control5</label>
            <input type="range" name="control5" min="0" max="180" />
            <span class="ms-2" id="control5range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
            <label for="control6" class="me-2">control6</label>
            <input type="range" name="control6" min="0" max="180" />
            <span class="ms-2" id="control6range">90</span>
          </div>

          <div class="d-flex justify-content-center my-3">
             <div class="form-check form-switch">
                <input class="form-check-input fs-3 ms-1" type="checkbox" id="flexSwitchCheckChecked" name="running" value="1" checked>
                <label class="form-check-label fw-bold fs-3" for="flexSwitchCheckChecked">On</label>
              </div>
          </div>

          <div class="d-flex justify-content-center my-3">
            <button
              class="btn btn-outline-primary btn-lg w-25"
              id="save"
              type="submit"
            >
              Save
            </button>
          </div>
        </form>
        <a
          href="retrieveArm.php"
          class="btn btn-success fs-5 fw-bold bottom-0 end-0 mt-3"
          >Show Data</a
        >
      </div>
    </div>

<?php include_once "./includes/footer.php";
?>