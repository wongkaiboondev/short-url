<?php
    include "../model/connect.php";

    if(isset($_POST['original_url'])){
        $original_url = $_POST['original_url'];
        shorten_url($conn, $original_url, $domain);

        // $original_url = mysqli_real_escape_string($conn, $_POST['original_url']);

        // insert($conn, $orig_url, $short_url);
    }

    











        // if(mysqli_num_rows($sql) > 0){
        //     echo "Something went wrong. Please generate again!";
        // }else{
            //insert typed url into the table with short url
    //         $sql2 = mysqli_query($conn, "INSERT INTO url (original_url, short_url, clicks)
    //                                      VALUES ('{$original_url}', '{$ran_url}', '0')");
    //         if($sql2){
    //             $sql3 = mysqli_query($conn, "SELECT short_url FROM url WHERE short_url = '{$ran_url}'");
    //             if(mysqli_num_rows($sql3) > 0){
    //                 $short_url = mysqli_fetch_assoc($sql3);
    //                 echo $short_url['short_url'];
    //             }
    //         }
    //     // }
    // }


    function validation($url) {

        if (!empty($url) && filter_var($url, FILTER_VALIDATE_URL)){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function insert($conn, $orig_url, $short_url){

        echo "in insert statement";
        $sql = "INSERT INTO url_collection (orig_url, shorten_url) VALUES ('{$orig_url}','{$short_url}')";

        if ($conn->query($sql) === TRUE) {
            $last_id = mysqli_insert_id($conn);
            get_shorten_url($conn, $last_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
        $conn->close();
    }

    function shorten_url($conn, $orig_url, $domain) {

        if (validation($orig_url)) {    

            //generating a random number, 5 characters
            $ran_url = substr(md5(microtime()), rand(0, 26), 5);

            $shorten_url = $domain."/".$ran_url;
            
            insert($conn, $orig_url, $shorten_url);

            die();
            
            
            
            //checking that random generated url exists in the database or not
            // $sql = mysqli_query($conn, "SELECT * FROM url_collection WHERE shorten_url = '{$ran_url}'");
            
            // $result = mysqli_execute_query($conn, $sql);

            // foreach ($result as $row) {
            //     printf("%s (%s)\n", $row["Name"], $row["District"]);
            // }

            // echo $sql;
        }
    }

    function get_shorten_url($conn, $id){
        $sql = "SELECT shorten_url FROM collection_url where '{$id}'";
        $result = mysqli_query($conn, $sql);

        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row["shorten_url"];
            }
        }
    }
?>