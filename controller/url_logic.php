<?php
  include "./connect.php";
  $new_url = "";
  
  if(isset($_GET)){
    foreach($_GET as $key=>$val){
      $u = mysqli_real_escape_string($conn, $key);
      $new_url = str_replace('/', '', $u);
    }
      $sql = mysqli_query($conn, "SELECT original_url FROM url WHERE short_url = '{$new_url}'");
      if(mysqli_num_rows($sql) > 0){
        $sql2 = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE short_url = '{$new_url}'");
        if($sql2){
            $original_url = mysqli_fetch_assoc($sql);
            header("Location:".$original_url['original_url']);
          }
      }
  }
?>

<?php
      $sql2 = mysqli_query($conn, "SELECT * FROM url ORDER BY id DESC");
      if(mysqli_num_rows($sql2) > 0){;
        ?>
        <div class="url-area">
          <div class="title">
            <li>Shorten URL</li>
            <li>Original URL</li>
            <li>Clicks</li>
            <li>Action</li>
          </div>
          <?php
            while($row = mysqli_fetch_assoc($sql2)){
              ?>
                <div class="data">
                <li>
                  <a href="<?php echo $domain.$row['short_url'] ?>" target="_blank">
                  <?php
                    if($domain.strlen($row['short_url']) > 50){
                      echo $domain.substr($row['short_url'], 0, 50) . '...';
                    }else{
                      echo $domain.$row['short_url'];
                    }
                  ?>
                  </a>
                </li>
                <li>
                  <?php
                    if(strlen($row['original_url']) > 60){
                      echo substr($row['original_url'], 0, 60) . '...';
                    }else{
                      echo $row['original_url'];
                    }
                  ?>
                </li>
              </li>
              </div>
              <?php
            }
          ?>
      </div>
        <?php
      }
    ?>
  </div>