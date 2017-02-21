<?php
                       if(isset($_SESSION['priority']) == 1)
                       {
                        echo '<li>';
                           echo "<a href='new-admin.php'><i class='fa fa-fw fa-wrench'></i> New Admin</a>";
                        echo '</li>';
                        echo '<li>';
                           echo "<a href='viewcategory.php'><i class='fa fa-fw fa-tasks'></i> Categories</a>";
                        echo '</li><li>
                        <a href="users.php"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                   
                    <li>
                        <a href="posts.php"><i class="fa fa-fw fa-tasks"></i> Posts</a>
                    </li>
                    
                    <li>
                        <a href="messages.php"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>';
                       }
                    ?>
                    