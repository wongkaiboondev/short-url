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