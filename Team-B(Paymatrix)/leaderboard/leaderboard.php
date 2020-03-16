<?php

$conn= mysqli_connect('localhost','root','bhanu2105');
mysqli_select_db($conn,'leaderboard');
$query= 'select * from records';
$result=mysqli_query($conn,$query);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaderboard</title>
   <link rel="stylesheet" href="style3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">


</head>
<body>
<header id="header">
                        <div id="nav">
                                <div class="dropdown-bars">
                                                <i class="fa fa-bars" id="bars" aria-hidden="true"></i> 
                                    <div class="dropdown-content-bars">
                                                <a href="http://localhost/team-b(paymatrix)/login-signup-profile/profile.php#">Profile</a>
                                                <a href="#">Settings</a>
                                                <a href="http://localhost/team-b(paymatrix)/login-signup-profile/logout.php">Logout</a>
                                        </div>
                                    </div> 
                                    <a href="http://localhost/team-B(paymatrix)/practice/practice.html"><img src="hackerrank_icon.svg" class="img" alt="Sorry!image cannot be loaded"/></a>
                                    <ul class="list">
                                    <li class="li-item"><a class="nav-links" href="http://localhost/team-B(paymatrix)/practice/practice.html">practice</a></li>
                                    <li class="li-item"><a class="nav-links"href="http://localhost/team-b(paymatrix)/compete/compete.html">compete</a></li>
                                    <li class="li-item"><a class="nav-links"href="http://localhost/team-B(paymatrix)/leaderboard/index1.html">leaderboard</a></li>
                                    </ul>
                        </div>
                            <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
                            <input type="text" id="search" placeholder="Search">
                            <i class="fa fa-comment-o" id="message" aria-hidden="true"></i>
                            <i class="fa fa-bell-o"    id="comment" aria-hidden="true"></i>
                            <i class="fa fa-user-o" id="user" aria-hidden="true"></i>
                            <div class="dropdown">
                                <button class="username">username 
                                <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                        <a href="http://localhost/team-b(paymatrix)/login-signup-profile/profile.php#">Profile</a>
                                        <a href="#">Settings</a>
                                        <a href="http://localhost/team-b(paymatrix)/login-signup-profile/logout.php">Logout</a>
                                </div>
                            </div> 
                    </header>
    <!-- <br><br><br><br> -->
    <div id="head">
        <h2> <b> &nbsp;&nbsp; Leaderboard </b></h2>
    </div>


    <div id="main">
      <br>
        <div id="language"  style="background-color: white;">
        <h3><b>&nbsp;&nbsp;&nbsp;Java</b></h3>

        </div>

        <br>

        <div id="right">

                <p>HACKERS  </p>

          <div>
            <label class="form-check-label">
              <input type="radio" id="all"class="form-check-input" name="optradio">ALL
            </label>

          </div>
          <div>
            <label class="form-check-label">
                <br>
              <input type="radio" class="form-check-input" name="optradio">Friends
            </label>
          </div>
          <br>

          <p>FILTER BY</p>
            <div id="hacker">


              <p>HACKER</p>

              <input id="myInput" onkeyup="myFunction()" type="text" placeholder="Search">


            </div>



            <div id="country">


           <p>COUNTRY</p>

            <input class="form-control" id="myInput1" onkeyup="myFunction1()" type="text" placeholder="Search">





            </div>



        </div>


    <div class="">
        <table  id="myTable">

            <tr class="header">
                <th>HACKER</th>
                <th>RANK</th>
                <th>COUNTRY</th>
                <th>SCORE</th>
            </tr>

            <?php
       while($rows=mysqli_fetch_assoc($result))
       {
        ?>
        <tr>
          <td> <?php echo $rows['hacker']; ?></td>
          <td> <?php echo $rows['rank']; ?></td>
          <td> <?php echo $rows['country']; ?></td>
          <td> <?php echo $rows['score']; ?></td>

        </tr>
<?php
}
 ?>

        </table>
        </div>
        <br>
        <br>
        <br>

<!--         <div class="container" id="page">

                <button type="button" ><b><-</b></button>
                <button type="button" style="background-color: lawngreen; color: white;"><b>1</b></button>
                <button type="button" ><b>2</b></button>
                <button type="button" ><b>3</b></button>
                <button type="button" ><b>4</b></button>
                <button type="button" ><b>5</b></button>
                <button type="button" ><b>-></b></button>


        <br>
        <br>

    </div> -->

     <div class="center">
    <div class="pagination" id="page">
      <a href="#">&laquo;</a>
      <a href="#" class="active"><b>1</b></a>
      <a href="#" ><b>2</b></a>
      <a href="#"><b>3</b></a>
      <a href="#"><b>4</b></a>
      <a href="#"><b>5</b></a>
      <a href="#"><b>6</b></a>
      <a href="#">&raquo;</a>


    </div>
    </div>

    <br>
    <br>
    <br>

  </div>


    <script>

              // function ShowHideDiv() {
              // // var hacker = document.getElementById("hacker");
              // // var myInput = document.getElementById("myInput");
              // // myInput.style.display = hacker.checked ? "block" : "none";
              // //<p>Bhanu prakash</p>
              //     var a=document.createElement('input');
              //     var x=document.getElementById('appending');
              //     var text=document.createTextNode("Bhanu prakash");
              //     a.appendChild(text);
              //     x.appendChild(a);
              //     }

              // function ShowHideDiv1() {
              // var country = document.getElementById("country");
              // var myInput1 = document.getElementById("myInput1");
              // myInput1.style.display = country.checked ? "block" : "none";
              //     }

                  function myFunction() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction1() {

 var input1, filter, table, tr, td, i, txtValue;
 input1= document.getElementById("myInput1");

 filter = input1.value.toUpperCase();
//  table = document.getElementById("myTable");
 tr = document.getElementsByTagName("tr");


 for (i = 0; i < tr.length; i++) {
   td = tr[i].getElementsByTagName("td")[2];
   if (td) {
     txtValue = td.textContent || td.innerText;
     if (txtValue.toUpperCase().indexOf(filter) > -1) {
       tr[i].style.display = "";
     } else {
       tr[i].style.display = "none";
     }
   }
 }
}


  </script>

</body>
</html>
