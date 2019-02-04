<?php 
    include '../lib/session.php';
    Session::checkSession();
    include '../lib/config.php'; 
    include '../lib/db.php';
    include '../lib/helpers.php';
    

    $db = new Database();
    $fm = new Format();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | The Politics24.com</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/codemirror.min.css">
    <link rel="stylesheet" type="text/css" href="css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" type="text/css" href="css/froala_style.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- /css -->

    <!-- datePicker And editor CSS -->

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">


    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- /datePicker And editor CSS -->
  </head>