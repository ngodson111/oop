<?php
  include("./connection/connect.php"); //CONNECTION
  include('./php/endpoints.php'); //POPULATING ENDPOINTS METHODS

  //GETDATA
  $obj = new query(); //CALLING CLASS
  $data = $obj->getdata('users'); // SENDING DYNAMIC TABLE

  //DELETE
  include('./php/delete.php');

  //INSERT
  include('./php/insert.php');

  //UPDATE
  include('./php/update.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CURD - Create | Delete | Insert | Update</title>

    <!-- LINKS -->
    <?php include('./links.php'); ?>

  </head>
  <body>
    <!-- CONTAINER -->
    <div class="container">
      <div class="wrapper">
        <!-- HEADER -->
        <div class="header">
          <!-- LEFT -->
          <div class="left">
            <div class="title">
              <span>Simple CURD Operations</span>
            </div>
          </div>
          <!-- RIGHT -->
          <div class="right">
            <div class="icon">
              <i data-toggle="modal" data-target="#insertmodal" class="fas fa-plus"></i>
            </div>
          </div>
        </div>
        <!-- BODY -->
        <div class="body">
          <!-- TABLE -->
          <table class="table">
            <!-- THEAD -->
            <thead>
              <!-- FIRST ROW -->
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Image</th>
                <th>TimeStamp</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <!-- TABLE BODY -->
            <tbody>
              <!-- ROWS -->
              <?php if(isset($data['0'])){
                $counter = 1;
                foreach($data as $item) {
                  ?>
                    <tr>
                      <td><?php echo $counter; ?></td>
                      <td><?php echo $item['name']; ?></td>
                      <td><?php echo $item['email']; ?></td>
                      <td><?php echo $item['location']; ?></td>
                      <td>
                        <img class="rounded-circle" width="50px" height="50px" src="./assets/img/<?php echo $item['image']; ?>" alt="">
                      </td>
                      <td>
                        <?php echo $item['timestamp']; ?>
                      </td>
                      <td>
                        <a data-toggle="modal" data-target="#updatemodal<?php echo $item['uid']; ?>" href="#"><i class="fas fa-edit text-info"></i></a>
                      </td>
                      <!-- MODAL FOR UPDATE -->
                      <?php include("./updatemodal.php"); ?>
                      <td>
                        <a href="?operation=delete&uid=<?php echo $item['uid']; ?>&img=<?php echo $item['image']; ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                      </td>
                    </tr>
                  <?php
                  $counter++;
                }
              }else {
                ?><tr><td>No Records!</td></tr><?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- MODAL -->
    <?php include('./insertmodal.php'); ?>
  </body>
</html>
