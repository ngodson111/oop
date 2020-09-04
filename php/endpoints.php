<?php
    class query extends Database{ 

        //DYNAMIC ENDPOINT FOR ALL DATA    
        public function getdata($tablename,$from = null,$quantity = null) { //PUBLIC FUNCTION WITH PARAMETERS
            if($from === null || $quantity === null) {
                $query = "SELECT * FROM $tablename"; //QUERY WILL ALL DATA
            }else {
                $query = "SELECT * FROM $tablename LIMIT $from,$quantity"; //QUERY WITH LIMIT
            }
            $res = $this->connect()->query($query);
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) { //FETCHING DATA IN ASSOCIATIVE MANNER
                    $array[] = $row; //APPENDING TO THE ARRAY VARIABLE
                }
                return $array; 
            }else {
                return null;
            }
        }

        //DYNAMIC ENDPOINT FOR INSERTING DATA  
        public function insertdata($tablename,$name,$email,$location,$image) { //PUBLIC FUNCTION WITH PARAMETERS
            $uid = rand();
            $query = "INSERT INTO $tablename VALUES(NULL,'$uid','$name','$email','$location','$image',NOW())"; //QUERY WITH DYNAMIC FIELDS
            $res = $this->connect()->query($query);

            if($res) { //SENDING BACK THE RESPONSE
                return true; 
            }else {
                return false;
            }
        }

        //DYNAMIC ENDPOINT FOR DELETING DATA  
        public function deleteData($tablename,$uid) { 
            if(!$uid || !$tablename) { //CHECKING FOR UID AND TABLENAME 
                return null;
            }else {
                $query = "DELETE FROM $tablename WHERE uid = '$uid'"; //DYNAMIC QUERY FOR DELETING DATA
                $res = $this->connect()->query($query);
                return $res; //SENDING BACK THE RESPONSE
            }
        }

        // DYNAMIC ENDPOINT FOR UPDATING DATA
        public function updateData($tablename,$name,$email,$location, $uid) {
            /* IF CUSTOM FIELDNAME TO BE GIVEN WE CAN USE THIS CODE
            $totalFields = count($keyValue);
            $query = "UPDATE $tablename SET "; //INITIAL QUERY
            $counter = 1;
            foreach($keyValue as $fieldname=>$value) {
                if($totalFields == $counter) {
                    $query .= "$fieldname = '$value'";
                }else {
                    $query .= "$fieldname = '$value', ";
                }
                $counter++;
            }

            $query .= " WHERE id = '$uid'";
            */
            
            $query = "UPDATE $tablename SET name='$name',email='$email',location='$location', timestamp=NOW() WHERE uid = '$uid'";
            $res = $this->connect()->query($query);
            return $res;
        }

        //FOR SQL INJECTION AND XXS
        public function filterString($data) {
            return htmlentities(mysqli_real_escape_string($this->connect(), $data));
        }

        //FOR UPLOADING FILES
        public function uploadFile($filenewname,$filetempname) {
            //UPLOADING IMAGE
            $filedestination = "./assets/img/" . $filenewname ;
            $uploading = move_uploaded_file($filetempname , $filedestination);
            return $uploading;
        }
    }
?>