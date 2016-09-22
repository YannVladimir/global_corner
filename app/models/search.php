


<?php 
  $k = $_GET['k'];
  $terms = explode(" ", $k);
  $query = "SELECT * FROM search where ";
  foreach ($terms as $each) {
  	$i++;
    if($i==1)
    {
      $query.= "keywords LIKE '%$each%' ";
    }
    else
    {
      $query.= "OR keywords LIKE '%$each%' ";
    }
  }
  //connect to the database

  $query = mysqli_query($query);
  $numrows = mysqli_num_rows($query);
  if($numrows>0)
  {
    while ( $row = mysqli_fetch_assoc($query))
    {
    	$id = $row['id'];
    	$name = $row['name'];

    }
  }
  else
  {
  	echo "no results found for \"<b>$k</b>"";
  }

?>