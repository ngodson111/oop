<!-- MODAL FOR UPDATE -->
<div class="modal fade" id="updatemodal<?php echo $item['uid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" enctype="multipart/form-data">
                <div class="name">
                <label for="name">Name</label>
                <input name="name" value="<?php echo $item['name'] ?>" type="text" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input name="email" value="<?php echo $item['email'] ?>" type="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="location">
                    <label for="location">Location</label>
                    <input name="location" value="<?php echo $item['location'] ?>" type="text" class="form-control" placeholder="Enter Location" required>
                </div>
                <input name="uid" type="text" value="<?php echo $item['uid'] ?>" style="display:none">
                <hr>
                <button name="updatesubmit" class="btn btn-lg btn-info">Update</button>
            </form>
        </div>
        </div>
    </div>
    </div>