<div class="row">
                    <?php
                    require "database-config.php";
                    $sql = "SELECT id, name, image, place, date_time from timeline";
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die( "Can't query data".mysqli_error($conn) );
                        }
                    if (mysqli_num_rows($result) > 0) {
                        // 2. Các dòng dữ liệu
                        while($row = mysqli_fetch_assoc($result)) {
                            echo'<div class="col-sm-6 col-md-4 col-lg-3">';
                            echo '<div class="product-thumbnail">';
                            echo '<a href="photo.php?id='.$row["id"].'"></i>';
                            echo'<img class="img-responsive" src="'.$row["image"].'">';
                            echo'<h3>'.$row["name"].'</h3>';
                            // echo'<p><a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>';
                         

                            echo'</a>';
                            echo'</div>';
                            echo'</div>';
                            
                            
                        }
                    } else {
                    echo "0 results";
                    }
                    mysqli_close($conn);
                   
                    ?>
                    <!-- Mã HTML -->
        </div>