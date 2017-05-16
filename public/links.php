<?php
                    $query = "SELECT * from categories where cat_id !=7";
                    $res = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($res))
                    {
                      if($active == $row['cat_id'])
                      {
                        echo "<li><a href='category.php?id={$row['cat_id']}&active={$row['cat_id']}' class='active'>{$row['cat_name']}</a>";
                      }
                      else
                       echo"<li><a href='category.php?id={$row['cat_id']}&active={$row['cat_id']}' class=''>{$row['cat_name']}</a> ";
                      
                    }
                ?>
<li><a href="job_vacancies.php" class="">Job Vacancies</a></li> 
