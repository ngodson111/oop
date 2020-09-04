<?php
    //INSERT OPERATION
    if(isset($_POST['submit'])) {
        $name = $obj->filterString($_POST['name']);
        $email = $obj->filterString($_POST['email']);
        $location = $obj->filterString($_POST['location']);
        
        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;
        //UPLOADING IMAGE
        $filedestination = "./assets/img/" . $filenewname ;
        $uploading = move_uploaded_file($filetempname , $filedestination);

        $result2 = $obj->insertdata('users',$name,$email,$location,$filenewname); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
              window.open('./index.php',"_self")
            </script>
          <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
              window.open('./index.php',"_self")
            </script>
          <?php
        }
    }
?>