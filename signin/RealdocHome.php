<!DOCTYPE html>
<?php
session_start();
require_once "userLoginData.php";
require_once "search.php";
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location:signin.php");
  exit;
}
if ($_SESSION['status'] == "Student") {
  header('location: home.php');
  exit;
}



?>
<?php
if (isset($_SESSION['statmsg'])) : ?>
  <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
    <?php
    echo $_SESSION['statmsg'];
    unset($_SESSION['statmsg']);

    ?>
  </div>
<?php endif; ?>


<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/ionicons.min.css">

  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/icomoon.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/99738b2def.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
  <style>
    /* @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
          a{
            font-family: 'Indie Flower', cursive;
            font-size: large;
            color: white;
          } */
    .card {
      box-shadow: 0 0 5px 0;
      background-color: rgba(255, 255, 255, .15);
      backdrop-filter: blur(10px);
    }
  </style>
</head>

<body class="container bg-white">

  <div class=" justify-content-center container">
    <div class="container m-auto text-center mx-5" id="profile">
      <div>
        <h4 class="container m-auto text-center mx-5">
          <p class="container m-auto text-center mx-5">Welcome
          </p>
      </div>

      <img style="max-width: 50%;" class=" rounded-circle  img-fluid mb-3" alt="USER PIC" src="../images/usepic.jpeg" />



      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="justify-content-center ">
        <div class="form-group my-5">
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" name="searchid" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" name="search_user" class="btn input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <!-- <div class="row text-center">
    <div class="col-md-4">
      <div class="list-group list-group-flush" style="max-height: 12rem; overflow-y:auto" id="myList" role="tablist">
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a> <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
      </div>
    </div> -->
  <?php if (!empty($usernum)) { ?>
    <div style="background-color:aliceblue;" class="w-100 p-3">
      <div class="tab-content ">

        <table class="table">
          <thead>
            <tr>
              <th>
                Name
              </th>
              <th>
                Contacnt
              </th>
              <th>
                Time
              </th>
              <th>
                Notes
              </th>
              <th>
                Edit
              </th>
              <th>
                Delete
              </th>
            </tr>
          </thead>

          <?php
          while ($userapp = $searchresults->fetch_assoc()) : ?>
            <tr>
              <td><?php echo $userapp["first_name"] . " " . $userapp["last_name"]; ?></td>
              <td><?php echo $userapp["contact"]; ?></td>
              <td><?php echo $userapp["appdate"]; ?></td>
              <td><?php echo $userapp["messages"]; ?></td>
              <td><a href="RealdocHome.php?edit=<?php echo $userapp['idkey']; ?>" class="btn btn-info">Edit Appointment</button></td>
              <td><a href="RealdocHome.php?delete=<?php echo $userapp['idkey']; ?>" class="btn btn-danger">Delete</a></td>
              <td></td>
            </tr>
        <?php endwhile;
        } ?>

        </table>
        <form class="d-flex justify-content-center" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <?php
          if (isset($_GET['edit'])) {

          ?>
            <input type="hidden" name="idkey" value="<?php echo $idvalue; ?>">

            <input class=" d-flex justify-content-center" name="newdate" type="date">
            <input class=" d-flex justify-content-center" name="newtime" type="time">
            <div>
              <button name='editsub' class="btn btn-warning">update</button>
            </div>
          <?php  } ?>

        </form>
      </div>
    </div>

    <!-- carousel Card -->
    <!-- <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Special title treatment</h5>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1NzU1NUM7IiBkPSJNNDkwLjAyMyw0OTAuMjY5Yy0xNi40NDUsMTYuNDU2LTQzLjIxNywxNS4yMzUtNTcuOTY1LTEuNDhMMzEzLjEwOSwzNTguMzhsNDQuOTk2LTQ0Ljk5Ng0KCWwxMzAuNDM5LDExOC45MkM1MDUuMTk5LDQ0Ny4wMDEsNTA2LjUxMyw0NzMuNzksNDkwLjAyMyw0OTAuMjY5eiIvPg0KPHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZFQzQ1OTsiIHBvaW50cz0iMzEzLjI0OSwyNzEuOTU4IDMxMy4yMzksMjcxLjk0OCAyNzEuMTgzLDMxMy44NDQgMjcxLjE5MywzMTMuODU0IDMxMy4xMDksMzU4LjM4IA0KCTM1OC4xMDUsMzEzLjM4NCAiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBkPSJNMjk5Ljk4LDU5LjgyN2M2Ni40MjIsNjYuNDIyLDY2LjY0LDE3NC4zMzksMC4yOSwyNDAuNjg5DQoJYy02Ni4wNTYsNjYuMDU2LTE3My45ODMsNjYuNDE2LTI0MC42ODktMC4yOWMtNjYuMzg0LTY2LjM4NC02Ni4zODQtMTc0LjAxNSwwLTI0MC4zOTlTMjMzLjU5Ni02LjU1NywyOTkuOTgsNTkuODI3eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0FERTZGRjsiIGQ9Ik0yNzIuNDMzLDg3LjQwNmM1MS4xOTIsNTEuMTkyLDUxLjM1OCwxMzQuMzYxLDAuMjI0LDE4NS40OTYNCgljLTUwLjkwOSw1MC45MDktMTM0LjA4Niw1MS4xODctMTg1LjQ5Ni0wLjIyNEMzNiwyMjEuNTE3LDM2LDEzOC41NjcsODcuMTYyLDg3LjQwNVMyMjEuMjcyLDM2LjI0NSwyNzIuNDMzLDg3LjQwNnoiLz4NCjxwYXRoIGQ9Ik0yNTEuMDI0LDgxLjAzNWM1LjUyLDAsOS45OTktNC40OCw5Ljk5OS05Ljk5OWMwLTUuNTItNC40OC05Ljk5OS05Ljk5OS05Ljk5OWMtNS41MiwwLTkuOTk5LDQuNDgtOS45OTksOS45OTkNCglDMjQxLjAyNSw3Ni41NTUsMjQ1LjUwNSw4MS4wMzUsMjUxLjAyNCw4MS4wMzV6Ii8+DQo8cGF0aCBkPSJNMjIxLjU0LDE4Ny44NjNMMjExLjAyOCwyMTkuNGwtMTAuNTEyLTMxLjUzNmMtMS4zNjEtNC4wODQtNS4xODMtNi44MzctOS40ODYtNi44MzdoLTEyLjE5MWwtMTguMTA0LTcyLjQyDQoJYy0xLjExMi00LjQ1MS01LjExMi03LjU3My05LjctNy41NzNjLTQuNTg5LDAtOC41ODgsMy4xMjMtOS43LDcuNTczbC0xOC4xMDQsNzIuNDJIOTEuMDM4Yy01LjUyMiwwLTkuOTk5LDQuNDc4LTkuOTk5LDkuOTk5DQoJczQuNDc4LDkuOTk5LDkuOTk5LDkuOTk5aDM5Ljk5NmM0LjU4OSwwLDguNTg4LTMuMTIzLDkuNy03LjU3M2wxMC4yOTgtNDEuMTlsMTAuMjk4LDQxLjE5YzEuMTEyLDQuNDUxLDUuMTEyLDcuNTczLDkuNyw3LjU3Mw0KCWgxMi43OTFsMTcuNzE5LDUzLjE1N2MxLjM2MSw0LjA4NCw1LjE4Myw2LjgzNyw5LjQ4Niw2LjgzN3M4LjEyNS0yLjc1NCw5LjQ4Ni02LjgzN2wxNy43MTktNTMuMTU3aDMyLjc4OQ0KCWM1LjUyMiwwLDkuOTk5LTQuNDc4LDkuOTk5LTkuOTk5cy00LjQ3OC05Ljk5OS05Ljk5OS05Ljk5OWgtMzkuOTk2QzIyNi43MjEsMTgxLjAyNiwyMjIuOTAxLDE4My43OCwyMjEuNTQsMTg3Ljg2M3oiLz4NCjxwYXRoIGQ9Ik0zMDcuMyw1Mi43NTZjLTcwLjM0LTcwLjMzOC0xODQuMTkyLTcwLjM0Ni0yNTQuNTQsMGMtNzAuMzM4LDcwLjM0LTcwLjM0NiwxODQuMTkyLDAsMjU0LjU0MQ0KCWM1OS45NTMsNTkuOTUxLDE1My4wMDIsNjkuNTgzLDIyMy4zNjksMjUuMzg3YzAuMTQ5LDAuMTYzLDE1MC40MzcsMTY0LjU3OCwxNTAuNTU3LDE2NC42OTYNCgljMTkuNTI5LDE5LjQ5Niw1MS4xMjcsMTkuNTA3LDcwLjY1NC0wLjAzN2MyMC43NjMtMjAuNzQ2LDE4Ljg1NS01NC4wODUtMS44NjUtNzIuNDc2DQoJQzQ4Mi41NCw0MTMuMDUsMzUxLjEyMywyOTMuMjU5LDMzMi41NTksMjc2LjMzNkMzNzYuOTMsMjA1LjkwNywzNjcuMjgzLDExMi43NDEsMzA3LjMsNTIuNzU2eiBNMjkzLjQ1MywzMjEuNzIzbC0wLjc4MS0wLjc4MQ0KCWM1LjE5Mi00LjE1MywxMC4xODMtOC42MiwxNC45Mi0xMy4zNTZjNC43MDUtNC43MDQsOS4xNDctOS42NzIsMTMuMjg3LTE0Ljg0MWwyMy4wMDMsMjAuOTcybC0zMC4xODgsMzAuMTg4bC0xOS45MjEtMjEuODQ5DQoJQzI5My42NjgsMzIxLjk0MywyOTMuNTYxLDMyMS44MzMsMjkzLjQ1MywzMjEuNzIzeiBNNDgzLjE5OSw0ODMuMjAyYy0xMi4zNjgsMTIuMzc2LTMyLjQ4MSwxMS40MDItNDMuNTAzLTEuMTVMMzI3LjE4MywzNTguNjk4DQoJbDMxLjQ5My0zMS40OTJsMTIzLjM4MiwxMTIuNDg3QzQ5NS40OTksNDUyLjEyNyw0OTQuNzcxLDQ3MS42NCw0ODMuMTk5LDQ4My4yMDJ6IE0yOTMuNDUsMjkzLjQ0NQ0KCWMtNjIuNTQ5LDYyLjU1Ny0xNjMuNzc1LDYyLjQ4My0yMjYuNTQ3LTAuMjljLTYyLjUyMi02Mi41Mi02Mi41MzMtMTYzLjcyOCwwLTIyNi4yNTdjNjIuNTItNjIuNTIyLDE2My43MjgtNjIuNTMzLDIyNi4yNTcsMA0KCUMzNTYuMDcsMTI5LjgwOCwzNTUuOTU0LDIzMC45NDEsMjkzLjQ1LDI5My40NDV6Ii8+DQo8cGF0aCBkPSJNMjc0LjM5OCw5MC4wNTNjLTQuMjY1LDMuNTEtNC44NzYsOS44MTEtMS4zNjcsMTQuMDc1YzM5LjQyNCw0Ny45MDIsMzYuMDQxLDExNy4xMy03Ljg3LDE2MS4wMzENCgljLTQ2LjgwNSw0Ni44MTUtMTIyLjg2OSw0Ni44MjEtMTY5LjY4Mi0wLjAwMmMtNDYuODE2LTQ2LjgwNi00Ni44Mi0xMjIuODcsMC4wMDEtMTY5LjY4MQ0KCWMzMC4yNzUtMzAuMjc0LDc0Ljg1Mi00Mi4xMjEsMTE2LjM0Mi0zMC45MTRjNS4zMywxLjQzOCwxMC44MjEtMS43MTUsMTIuMjYxLTcuMDQ2YzEuNDM5LTUuMzMxLTEuNzE1LTEwLjgyLTcuMDQ2LTEyLjI2MQ0KCUMxNjguNjU4LDMyLjE4NSwxMTYuNjYsNDYuMDExLDgxLjMzOSw4MS4zMzNjLTU0LjYzMiw1NC42MjItNTQuNjM4LDE0My4zMzktMC4wMDIsMTk3Ljk2NQ0KCWM1NC42MjIsNTQuNjMzLDE0My4zMzksNTQuNjM4LDE5Ny45NjUsMC4wMDJjNTEuMjU4LTUxLjI0OSw1NC40NzctMTMyLjgzMSw5LjE3MS0xODcuODc5DQoJQzI4NC45NjQsODcuMTU3LDI3OC42NjMsODYuNTQzLDI3NC4zOTgsOTAuMDUzeiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiM0REJCRUI7IiBkPSJNMTcwLjQ3LDM1Mi4wMDFjLTE1LjE1LDAtMjksOC41Ni0zNS43OCwyMi4xMWwtOC45NCwxNy44OWgxNDRsMjEuMDEtNDBMMTcwLjQ3LDM1Mi4wMDENCglMMTcwLjQ3LDM1Mi4wMDF6Ii8+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojNTc1NTVDOyIgZD0iTTQ0NS43NSw0NTIuMDAxdjUwaC0zODB2LTUwYzAtMTEuMDUsOC45NS0yMCwyMC0yMGMzMC4zNTIsMCwzMDEuODc3LDAsMzQwLDANCgkJQzQzNi44LDQzMi4wMDEsNDQ1Ljc1LDQ0MC45NTEsNDQ1Ljc1LDQ1Mi4wMDF6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzU3NTU1QzsiIGQ9Ik0zMzkuMTcsMTczLjM2MWwtMzMuODcsNTguNjZjMy40MS0wLjUxLDYuOS0wLjc4LDEwLjQ1LTAuNzhjMzguNjYsMCw3MCwzMi4xLDcwLDcwLjc2DQoJCWMwLDE2LjMyLTUuNTksMzEuMzQtMTQuOTUsNDMuMjRsMzUuODgsNDkuNTdoMC4wMWMyNC4wOS0yMy42MSwzOS4wNi01Ni40OSwzOS4wNi05Mi44MQ0KCQlDNDQ1Ljc1LDIzOC4zMTEsMzk5LjcxLDE4NC40MjEsMzM5LjE3LDE3My4zNjF6Ii8+DQo8L2c+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRTNGMkZGOyIgZD0iTTQxOS4wOCw0MzIuMDAxSDIzMi40MmMxLjE3Mi0zLjUxNS00Ljc1NCwxNC4yNjEsMTQuMzYtNDMuMDgNCgkJYzExLjI3OS0zMy44MzYsNDIuOTc4LTU2LjkyLDc4Ljk3LTU2LjkyYzM1LjgzLDAsNjcuNjM1LDIyLjkxNiw3OC45Nyw1Ni45MkM0MjMuODM0LDQ0Ni4yNjIsNDE3LjkwOSw0MjguNDg1LDQxOS4wOCw0MzIuMDAxeiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBkPSJNNDEwLjM5LDUwLjAwMWwtMjAsMzQuNjRjLTIwLjMxMy0xMS43MjgtNDcuNjY5LTI3LjUyMi02OS4yOC00MGwyMC0zNC42NEw0MTAuMzksNTAuMDAxeiIvPg0KPC9nPg0KPHJlY3QgeD0iMzI1Ljc0NCIgeT0iNjEuOTcyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC41IDAuODY2IC0wLjg2NiAtMC41IDU4OS42MDY0IC0xNzYuNDYyOCkiIHN0eWxlPSJmaWxsOiM1NzU1NUM7IiB3aWR0aD0iMzkuOTk4IiBoZWlnaHQ9IjM5Ljk5OCIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0UzRjJGRjsiIGQ9Ik0zNzAuMzksMTE5LjI4MWMtODEuMzE5LDE0MC44NS03OS44MzcsMTM4LjI4OC04MCwxMzguNTdsLTY5LjI4LTQwbDgwLTEzOC41Nw0KCUMzMjEuNDI0LDkxLjAwOSwzNDguNzc5LDEwNi44MDMsMzcwLjM5LDExOS4yODF6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNTc1NTVDOyIgZD0iTTMwNy43MSwyNjcuODUxbC0yMCwzNC42NGwtMTAzLjkyLTYwbDIwLTM0LjY0QzIyOC4zNzUsMjIyLjA0NSwyODYuNTM2LDI1NS42MjUsMzA3LjcxLDI2Ny44NTF6Ii8+DQo8cGF0aCBkPSJNMjg2LDM4Mi4wMDFjLTUuNTIsMC0xMCw0LjQ4LTEwLDEwczQuNDgsMTAsMTAsMTBzMTAtNC40OCwxMC0xMFMyOTEuNTIsMzgyLjAwMSwyODYsMzgyLjAwMXoiLz4NCjxwYXRoIGQ9Ik04Niw0MjIuMDAxYy0xNi41NDIsMC0zMCwxMy40NTgtMzAsMzB2NTBjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGgzODBjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHYtNTANCgljMC0xNi4zNi0xMy4xNjYtMjkuNjk1LTI5LjQ1OC0yOS45ODZsLTguMTk1LTI0LjU4NkM0NDIuNjczLDM3MS40MDgsNDU2LDMzNy43NjYsNDU2LDMwMi4wMDENCgljMC02Mi45ODQtNDIuMDYxLTExOC4wNDgtMTAxLjIxMi0xMzUuMjYybDI0LjUxMi00Mi40NThjMi43NjEtNC43ODMsMS4xMjItMTAuODk4LTMuNjYxLTEzLjY2bC04LjY2LTVsMTAtMTcuMzJsOC42Niw1DQoJYzQuNzcyLDIuNzU1LDEwLjg5MiwxLjEzNCwxMy42Ni0zLjY2bDIwLTM0LjY0YzIuNzYtNC43OCwxLjEyMS0xMC44OTktMy42Ni0xMy42NmwtNjkuMjgtNDBjLTQuNzgxLTIuNzYtMTAuODk5LTEuMTIyLTEzLjY2LDMuNjYNCglsLTIwLDM0LjY0Yy0yLjc2LDQuNzgtMS4xMjIsMTAuODk5LDMuNjYsMTMuNjZsOC42Niw1bC0xMCwxNy4zMmwtOC42Ni01Yy00Ljc3OS0yLjc2LTEwLjktMS4xMjItMTMuNjYsMy42NmwtNzUsMTI5LjkwOWwtOC42Ni01DQoJYy00Ljc3OC0yLjc2MS0xMC44OTktMS4xMjItMTMuNjYsMy42NmwtMjAsMzQuNjQxYy0yLjc2Miw0Ljc4My0xLjEyMywxMC44OTgsMy42NiwxMy42NmwxMDMuOTIsNjANCgljNC43NSwyLjc0NCwxMC44ODIsMS4xNTEsMTMuNjYtMy42NmwyMC0zNC42NDFjMi43NjItNC43ODMsMS4xMjMtMTAuODk4LTMuNjYtMTMuNjZsLTguNjYtNWw3LjM4NS0xMi43OTENCglDMzQ2LjU1LDIzOC45LDM3NiwyNjYuOSwzNzYsMzAyLjAwMWMwLDEwLjcwMi0yLjc1OSwyMC45MTktOC4wMiwyOS45ODNjLTEyLjk4MS02LjU1Mi0yNy4zMTctOS45ODMtNDEuOTgtOS45ODMNCgljLTIwLjk0NSwwLTQxLjI4LDcuMDgtNTcuNjkzLDIwSDE3MC43MmMtMTkuMDU3LDAtMzYuMTk0LDEwLjU5LTQ0LjcyNiwyNy42NDFsLTguOTQsMTcuODljLTEuNTQ5LDMuMS0xLjM4Myw2Ljc4LDAuNDM5LDkuNzI4DQoJYzEuODIyLDIuOTQ4LDUuMDQxLDQuNzQyLDguNTA2LDQuNzQyaDEwNi4xMjlsLTYuNjY3LDIwTDg2LDQyMi4wMDFMODYsNDIyLjAwMXogTTQzNiw0NTIuMDAxdjQwSDc2di00MGMwLTUuNTE0LDQuNDg2LTEwLDEwLTEwDQoJYzguMjMsMCwzMjIuOTk3LDAsMzQwLDBDNDMxLjUxNSw0NDIuMDAxLDQzNiw0NDYuNDg3LDQzNiw0NTIuMDAxeiBNMzQyLjM0MSw2OC4zMDFsMTcuMzE5LDEwbC0xMCwxNy4zMmwtMTcuMzE5LTEwTDM0Mi4zNDEsNjguMzAxeg0KCSBNMzQ1LjAyLDIzLjY2MWw1MS45NiwzMGwtMTAsMTcuMzE5Yy0xMS41NjctNi42NzgtMzguNDY1LTIyLjIwOS01MS45Ni0zMEwzNDUuMDIsMjMuNjYxeiBNMzA1LjAyLDkyLjk0MQ0KCWM5OC4xMTcsNTYuNjUsMC44NTksMC40OTYsNTEuOTYsMzBjLTEwLjMzNSwxNy45MDItNjEuMjQxLDEwNi4wNzYtNzAuMDAxLDEyMS4yNDlsLTUxLjk2LTMwTDMwNS4wMiw5Mi45NDF6IE0yODQuMywyODguODMxDQoJbC04Ni42LTUwbDEwLTE3LjMyYzkuMTkyLDUuMzA3LDY1Ljc4NiwzNy45ODMsNzcuOTM3LDQ0Ljk5OWMwLjAwMSwwLjAwMSwwLjAwMiwwLjAwMSwwLjAwNCwwLjAwMmMwLjAwMSwwLDAuMDAyLDAuMDAxLDAuMDAzLDAuMDAxDQoJbDguNjU2LDQuOTk4TDI4NC4zLDI4OC44MzF6IE0zMjMuMTI4LDIyMS41NzlsMjEuMzE2LTM2LjkyMkMzOTcuODk2LDE5Ny42NjUsNDM2LDI0NS45MzMsNDM2LDMwMi4wMDENCgljMCwyNy4xNDMtOC45NjMsNTIuODYyLTI1LjQ5OCw3My44ODZjLTUuOTY0LTEyLjc3NS0xNC43ODUtMjQuMDg4LTI1LjcyMy0zMi45OTRDMzkyLjE0NSwzMzAuNTc5LDM5NiwzMTYuNjI2LDM5NiwzMDIuMDAxDQoJQzM5NiwyNTkuODk2LDM2My45MTIsMjI1LjIzMywzMjMuMTI4LDIyMS41Nzl6IE0xNzAuNzIxLDM2MS45MDFoNzguNzQ5Yy00LjMxMiw2LjE5OC03Ljg2OCwxMy4wMjEtMTAuNTcyLDIwLjFoLTk2LjcyMQ0KCUMxNDIuODY5LDM4MS4xOTEsMTQ5LjIzNiwzNjEuOTAxLDE3MC43MjEsMzYxLjkwMXogTTI1Ni41MTcsMzkyLjA4M2MxMC4wNTctMzAuMTY2LDM4LjI3Mi01MC4wODIsNjkuNDgzLTUwLjA4Mg0KCWMzMS44OTQsMCw1OS42MzQsMjAuNTM4LDY5LjQ4Miw1MC4wNzdsOS45NzQsMjkuOTIzSDI0Ni41NDVMMjU2LjUxNywzOTIuMDgzeiIvPg0KPHBhdGggZD0iTTM2NiwzODIuMDAxaC00MGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3NywxMCwxMCwxMGg0MGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwUzM3MS41MjMsMzgyLjAwMSwzNjYsMzgyLjAwMXoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0VENTE1MTsiIGQ9Ik00NjEuNzUsMTQ2aC00MTJjLTIyLjA5LDAtNDAsMTcuOTEtNDAsNDB2MjYwYzAsMjIuMDksMTcuOTEsNDAsNDAsNDBoNDEyYzIyLjA5LDAsNDAtMTcuOTEsNDAtNDANCglWMTg2QzUwMS43NSwxNjMuOTEsNDgzLjg0LDE0Niw0NjEuNzUsMTQ2eiIvPg0KPGc+DQoJPHJlY3QgeD0iNzUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCgk8cmVjdCB4PSIzOTUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCjwvZz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1NzU1NUM7IiBkPSJNMzc1Ljc1LDc2djcwaC00MFY4NmMwLTExLjA1LTguOTUtMjAtMjAtMjBoLTEyMGMtMTEuMDUsMC0yMCw4Ljk1LTIwLDIwdjYwaC00MFY3Ng0KCWMwLTI3LjYxLDIyLjM5LTUwLDUwLTUwaDE0MEMzNTMuMzYsMjYsMzc1Ljc1LDQ4LjM5LDM3NS43NSw3NnoiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBwb2ludHM9IjM0NS43NSwyODYgMzQ1Ljc1LDM0NiAyODUuNzUsMzQ2IDI4NS43NSw0MDYgMjI1Ljc1LDQwNiAyMjUuNzUsMzQ2IDE2NS43NSwzNDYgMTY1Ljc1LDI4NiANCgkyMjUuNzUsMjg2IDIyNS43NSwyMjYgMjg1Ljc1LDIyNiAyODUuNzUsMjg2ICIvPg0KPHBhdGggZD0iTTM5NiwyMzZjLTUuNTIsMC0xMCw0LjQ4LTEwLDEwczQuNDgsMTAsMTAsMTBzMTAtNC40OCwxMC0xMFM0MDEuNTIsMjM2LDM5NiwyMzZ6Ii8+DQo8cGF0aCBkPSJNMTE2LDIzNmMtNS41MiwwLTEwLDQuNDgtMTAsMTBzNC40OCwxMCwxMCwxMHMxMC00LjQ4LDEwLTEwUzEyMS41MiwyMzYsMTE2LDIzNnoiLz4NCjxwYXRoIGQ9Ik0zNDYsMjc2aC01MHYtNTBjMC01LjUyMi00LjQ3OC0xMC0xMC0xMGgtNjBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTUwYy01LjUyMiwwLTEwLDQuNDc4LTEwLDEwdjYwDQoJYzAsNS41MjIsNC40NzgsMTAsMTAsMTBoNTB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg2MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi01MGg1MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi02MA0KCUMzNTYsMjgwLjQ3OCwzNTEuNTIyLDI3NiwzNDYsMjc2eiBNMzM2LDMzNmgtNTBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTQwdi01MGMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwaC01MHYtNDBoNTANCgljNS41MjIsMCwxMC00LjQ3OCwxMC0xMHYtNTBoNDB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg1MFYzMzZ6Ii8+DQo8cGF0aCBkPSJNNDYyLDEzNmgtNzZWNzZjMC0zMy4wODQtMjYuOTE2LTYwLTYwLTYwSDE4NmMtMzMuMDg0LDAtNjAsMjYuOTE2LTYwLDYwdjYwSDUwYy0yNy41NywwLTUwLDIyLjQzLTUwLDUwdjI2MA0KCWMwLDI3LjU3LDIyLjQzLDUwLDUwLDUwaDQxMmMyNy41NywwLDUwLTIyLjQzLDUwLTUwVjE4NkM1MTIsMTU4LjQzLDQ4OS41NywxMzYsNDYyLDEzNnogTTM5NiwyNzZjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2MTkwSDEyNg0KCVYyODZjMC01LjUyMi00LjQ3OC0xMC0xMC0xMHMtMTAsNC40NzgtMTAsMTB2MTkwSDg2VjE1NmgyMHY1MGMwLDUuNTIyLDQuNDc4LDEwLDEwLDEwczEwLTQuNDc4LDEwLTEwdi01MGgyNjB2NTANCgljMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMHMxMC00LjQ3OCwxMC0xMHYtNTBoMjB2MzIwaC0yMFYyODZDNDA2LDI4MC40NzgsNDAxLjUyMiwyNzYsMzk2LDI3NnogTTMyNiwxMzZIMTg2Vjg2DQoJYzAtNS41MTQsNC40ODYtMTAsMTAtMTBoMTIwYzUuNTE0LDAsMTAsNC40ODYsMTAsMTBWMTM2eiBNMTQ2LDc2YzAtMjIuMDU2LDE3Ljk0NC00MCw0MC00MGgxNDBjMjIuMDU2LDAsNDAsMTcuOTQ0LDQwLDQwdjYwaC0yMFY4Ng0KCWMwLTE2LjU0Mi0xMy40NTgtMzAtMzAtMzBIMTk2Yy0xNi41NDIsMC0zMCwxMy40NTgtMzAsMzB2NTBoLTIwVjc2eiBNMjAsNDQ2VjE4NmMwLTE2LjU0MiwxMy40NTgtMzAsMzAtMzBoMTZ2MzIwSDUwDQoJQzMzLjQ1OCw0NzYsMjAsNDYyLjU0MiwyMCw0NDZ6IE00OTIsNDQ2YzAsMTYuNTQyLTEzLjQ1OCwzMC0zMCwzMGgtMTZWMTU2aDE2YzE2LjU0MiwwLDMwLDEzLjQ1OCwzMCwzMFY0NDZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> -->

    </div>


    <div class=" my-5 card text-light text-light text-center rounded">
      <div class="row">

        <div class="col-md-6 my-5 border-right border-dark">
          <img style="max-width: 50%;" src="../signin/images/icons/home.svg" />
          <div>
            <a href="index.php" class="btn btn-info btn-sm text-justify">
              Home
            </a>
          </div>
        </div>

        <div class="col-sm-6 my-5">
          <img style="max-width: 50%;" src="../signin/images/icons/help.svg" />
          <div>
            <button href="getnotes.php" data-toggle="modal" name="getnotes" class="btn btn-info btn-sm text-justify" data-target="#exampleModal">
              Upload files and notes
          </div>
        </div>

        <!-- Icons made by <a href="https://www.flaticon.com/free-icon/tooth_993307?related_item_id=993270&term=white" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->





        <a href="logout.php" class="btn btn-danger ml-3 m-auto text-center">Sign Out</a>


      </div>
    </div>

    <!-- Modal Edit Account -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="idkey" value="<?php echo $idvalue; ?>">
                <label for="notes"></label>
                <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Notes"></textarea>
                <!-- <input type="file" name="files"> -->
              </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-info" name="upload" type="submit">Upload</button>

            </form>

          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>