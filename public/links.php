<?php
                    $query = "SELECT * from categories where cat_id !=7";
                    $res = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($res))
                    {
              
                       echo"<li><a href='category.php?id={$row['cat_id']}&active={$row['cat_id']}' class=''>{$row['cat_name']}</a></li> ";
                      
                    }
                ?>
<li><a href="job_vacancies.php" class="">Job Vacancies</a></li> 
