<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="BRAND MEDIA">
 <title>CUMBRE <?php if(isset($_SESSION['loginRoleCumbre'])){
  switch($_SESSION['loginRoleCumbre']){
   case "1": echo "Admin";break;
   case "2": echo "Coach";break;
   case "3": echo "Estudiante";break;
 }
 echo " | $subTitle";
}?></title>

    <!--   <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
      <!-- Animate -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

      <!-- Bootstrap -->
      <link href="css/vendors/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="css/vendors/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="css/vendors/nprogress.css" rel="stylesheet">

      <!-- Data picker -->
      <link href="css/vendors/bootstrap-datetimepicker.css" rel="stylesheet">


      <link rel="stylesheet" href="css/vendors/jquery.parallax.css" />

      <!-- Custom Theme Style 
      <link href="css/vendors/custom.css" rel="stylesheet"> -->

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom CSS -->
    <!--  <link href="css/app.css" rel="stylesheet"> -->
    <link href="css/main.min.css" rel="stylesheet">

  </head>