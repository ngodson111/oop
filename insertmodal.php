<!-- Modal -->
<div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="modal-body" method="post" enctype="multipart/form-data">
          <div class="name">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="email">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Enter Email" required>
          </div>
          <div class="location">
              <label for="location">Location</label>
              <input name="location" type="text" class="form-control" placeholder="Enter Location" required>
          </div>
          <div class="image">
              <label for="image">Image</label>
              <input name="image" type="file" class="form-control" placeholder="SELECT an Image" required>
          </div>
          <hr>
          <button name="submit" class="btn btn-lg btn-success">submit</button>
      </form>
    </div>
  </div>
</div>