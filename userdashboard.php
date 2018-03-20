
<?php
  $alertSuccess = false;
  if( isset($_COOKIE['success']) ) {

    $alertSuccess = $_COOKIE['success'];
    setCookie("success","",time()-3600,"/");


}

else if( !isset($_COOKIE['success']) ) {

  
  
  echo "$alertSuccess";
 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
  <link rel="stylesheet" href="css/material/css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="css/main.css" media="screen,projection">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="css/material/js/materialize.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fotoz - Dashboard</title>
  <script>
  </script>
</head>
<body>
            <!-- navigation and header-->
             <nav class="nav-extended nav-full-header z-depth-0 blue-grey darken-3">
                         <h1 title="fotoz" class="h1_title">USER DASHBOARD</h1>
                   <div class="sidenav">
                                                      <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/male3-256.png" class="card-image center center-align" width="130px" height="130px" alt="avatar"></img>
                                                      <a class="active" href="userdashboard.php">Home</a>
                                                      <a href="#">Settings</a>
                                                      <a href="LogOut.php">SignOut</a>
                                                </div>
             </nav>

    <div class="main_container">
                       <form class="col s12 center" enctype="multipart/form-data" method="post" name="upload" action="Upload.php" id="form_id">
                                                                <div class="row">
                                                                   <div class="input-field col s3">
                                                                        <input placeholder="select to choose image" id="upload_image"  type="file" name="file" class="center">
                                                                   </div>
                                                                </div>
                                                                <?php 
                                                                  if( $alertSuccess == true) {
                                                                    echo "<p class='info'>Wall uploaded successful </p>";
                                                                  }
                                                                  else {
                                                                    }
                                                                ?>
                                                                <button class="btn waves-effect waves-red center" type="submit" name="action" id="button_submit">Upload</button>
                                          </form>
    </div>
</body>
</html>