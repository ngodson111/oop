<?php
//DELETE OPERATION
if(isset($_GET['operation'])) {
    $operation = $_GET['operation'];

    //DELETE
    if($operation == 'delete') {
      //DELETE DATA
      $filteredId = $obj->filterString($_GET['uid']);
      $imagename = $_GET['img'];

      //UNLINK IMAGE
      $one = "./assets/img/".$imagename;
      unlink($one);

      $delete = new query(); //CALLING CLASS
      $result3 = $delete->deleteData('users', $filteredId); //SENDING DYNAMIC PARAMETERS

      if($result3 == 1) { //CONCLUDING THE RESULT
          ?>
            <script>
              window.open('./index.php',"_self")
            </script>
          <?php
      }else {
        ?>
          <script>
            alert('Error!');
            window.open('./index.php',"_self");
          </script>
        <?php
      }
    }
  }
?>