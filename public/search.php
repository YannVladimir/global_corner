<div class="col-sm-4">
  <div class="search_box">
    <form action='search_results.php' method='GET'>
      
      <input type="text" name='k'  required="required" class="col-sm-6" placeholder="Search"/>
      <select class="col-sm-4" name="category" class="col-sm-6" style="height:35px;
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
        <button type="submit" class="btn btn-default col-sm-1 bton"><i class="fa fa-search"></i></button>
      </form>
  </div>
</div>
