<?php
    include "./model/connect.php";
    
    $error = false;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }


    if(isset($_POST['original_url'])) {
        $original_url = $_POST['original_url'];
        $validation = validation($original_url);

        if ($validation) {
            $shorten_url = shorten_url($domain);
            $get_last_id = insert($conn, $original_url, $shorten_url);
            $short_url = get_shorten_url($conn, $get_last_id);
            header("Location: ./view/shorten_url.php");
        } else {
            $error_message = "Please provide proper url link";
            $error = true; 
        }
    }
    
    function validation($url) {

        if (!empty($url) && filter_var($url, FILTER_VALIDATE_URL)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function shorten_url($domain) {
        
        //generating a random number, 5 characters
        $ran_url = substr(md5(microtime()), rand(0, 26), 5);
        $shorten_url = $domain."/".$ran_url;

        return $shorten_url;
    }


    function insert($conn, $orig_url, $short_url) {

        $sql = "INSERT INTO url_collection (orig_url, shorten_url) VALUES ('{$orig_url}','{$short_url}')";

        if ($conn->query($sql) === TRUE) {
            $last_id = mysqli_insert_id($conn);
            return $last_id;
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
        $conn->close();
    }

    function get_shorten_url($conn, $id) {
        $sql = "SELECT shorten_url FROM url_collection where id = {$id}";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row["shorten_url"];
            }
        } else {
            echo "No Result is found";
        }
    }
?>