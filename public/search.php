<div class="col-sm-5">
                        <div class="search_box">
                          <form action='search_results.php' method='GET'>
                            <div class="col-sm-1"></div>
                            <select class="col-sm-4" name="category" style="height:35px;
        border-right-style: solid;
        border-right-width:1px;
        border-right-color:#504c4c;
        ">
                              <option value="0">All categories</option>
                              <?php
                                $q = "SELECT * from categories";
                                $res = mysqli_query($con,$q);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                }
                              ?>
                            </select>
                            <input type="text" name='k'  required="required" class="col-sm-6" placeholder="Search"/>
                            <button type="submit" class="btn btn-default col-sm-1 bton"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                    </div>