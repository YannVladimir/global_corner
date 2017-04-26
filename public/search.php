<div class="search_box col-sm-4 col-md-4 col-lg-4">
    <form action='search_results.php' method='GET'>
      
      <input type="text" name='k'  required="required" class="col-sm-5 col-md-5 col-lg-5 col-xs-12" placeholder="Search"/>
      <select class="col-sm-5 col-md-5 col-lg-5 col-xs-8" name="category"  style="height:35px;
        border-left-style: solid;
        border-left-width:1px;
        border-left-color:#504c4c;
        ">
          <option value="0">in all categories</option>
          <?php
            $q = "SELECT * from categories";
            $res = mysqli_query($con,$q);
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<option value='{$row['cat_id']}'>in {$row['cat_name']}</option>";
            }
          ?>
        </select>
        <button type="submit" class="btn btn-default col-sm-2 col-md-5 col-lg-5 col-xs-8 bton"><i class="fa fa-search"></i></button>
      </form>
</div>
