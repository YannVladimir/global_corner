<div class="col-sm-4">
    <form action='search_results.php' method='GET'>
      <div class="col-sm-5">
         <input type="text" name='k'  required="required" class="form-control" placeholder="Search"/>
      </div>
        <div class="col-sm-5">
          <select class="form-control" name="category"  style="border-left-style: solid; border-left-width:1px; border-left-color:#504c4c;">
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
        </div>
        <div class="col-sm-2">
        <button type="submit" class="btn btn-default bton"><i class="fa fa-search"></i></button>
        </div>
      </form>
</div>
