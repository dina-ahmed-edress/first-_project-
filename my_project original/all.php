<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="users" style="width: 80%;margin: auto;padding-top: 10%; ">
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
      <th scope="col">##</th>
      <th scope="col"> Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Check-in date</th>
      <th scope="col">Check-out date</th>
      <th scope="col">Number of people</th>
      <th scope="col">Comment</th>
    
    </tr>


  </thead>


<tbody>   
    <?php

$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);
  $select="SELECT * FROM add_cline";
  $query=  $conn->query($select);

      if (mysqli_num_rows($query)>0) {
         $count=0;

        while ($row = mysqli_fetch_array($query)) {
          echo "<tr>";
           $count+=1;
           echo "<td>".$count."</td>";
           echo "<td>".$row["name"]."</td>";
           echo "<td>"."------".$row["email"]."</td>";
           echo "<td>"."------".$row["phone"]."</td>";
           echo "<td>"."------".$row["regDate"]."</td>";
           echo "<td>"."------".$row["outdate"]."</td>";
           echo "<td>"."------".$row["num_p"]."</td>";
            echo "<td>"."------".$row["comment"]."</td>";
           
           echo "</tr>";

         
        }
        
      }
      else
        echo "NO DATA";



    ?>











  </tbody>
</table>
</div>
</body>
</html>