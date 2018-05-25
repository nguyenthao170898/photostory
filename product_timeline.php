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
                        	echo '<section class="timeline">';
                        	echo '<div class="container">';
                        	echo '<div class="timeline-item">';
                        	echo '<div class="timeline-img"></div>';
                        	echo '<div class="timeline-content js--fadeInLeft">';
                        	echo'<h2>'.$row["name"].'</h2>';
                        	echo'<h6>'.$row["date_time"].'</h6>';
                        	echo'<h6>'.$row["place"].'</h6>';
                        	
                        	
                        	echo '</div>';
                        	echo '</div>';
                        	echo '</div>';
                        	echo '<div class="timeline-item">';
                        	echo '<div class="timeline-img"></div>';
                        	echo '<div class="timeline-content timeline-card js--fadeInRight">';
                        	echo '<div class="timeline">';
                        	
                        	echo '</div>';
                        	
                        	echo'<img class="img-responsive" src="'.$row["image"].'">';
                        	echo '<a class="bnt-more" href="javascript:void(0)" style="background: #3F51B5">Like</a>';
                        	echo '<a class="bnt-more" href="javascript:void(0)" style="background: #3F51B5">Share</a>';
                        	echo '</div>';
                        	
                        	echo '</div>  ';
                        	echo '</section>';

                        }
                    } else {
                    echo "0 results";
                    }
                    mysqli_close($conn);
                   
                    ?>
                    <!-- Mã HTML -->
</div>