<?php
    //UPDATE OPERATION
    if(isset($_POST['updatesubmit'])) {
        $name = $obj->filterString($_POST['name']);
        $email = $obj->filterString($_POST['email']);
        $location = $obj->filterString($_POST['location']);
        $uid = $obj->filterString($_POST['uid']);

        $result2 = $obj->updatedata('users',$name,$email,$location, $uid); // SENDING DYNAMIC PARAMETERS
        
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