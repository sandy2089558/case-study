<?php
include '../upload_script/logsession.php';
//session_start();
$obj_login_session = new userActivity;
$obj_login_session->checkLoginSession();
//echo $_SESSION["id_abm"];
 include '../partials/_head.php';
 ?>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php
       include '../partials/_navbar.php';
       ?>


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->

 <nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
     <li class="nav-item nav-profile">
       <a href="#" class="nav-link">
         <div class="profile-image">
           <img class="img-xs rounded-circle" src="../assets/images/faces/ananay.jpg" alt="profile image">
           <div class="dot-indicator bg-success"></div>
         </div>
         <div class="text-wrapper">
           <p class="profile-name">Alisha Goyal</p>
           <p class="designation">Doctor</p>
         </div>
       </a>
     </li>
     <li class="nav-item nav-category">Main Menu</li>
     <li class="nav-item">
       <a class="nav-link" href="index.php">
         <i class="menu-icon typcn typcn-document-text"></i>
         <span class="menu-title">Dashboard</span>
       </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="sales_to_upload.php">
         <i class="menu-icon typcn typcn-document-text"></i>
         <span class="menu-title">Sales</span>
       </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui_employee_list" aria-expanded="false" aria-controls="ui-basic">
         <i class="menu-icon typcn typcn-coffee"></i>
         <span class="menu-title">Employees</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui_employee_list" id="ui_employee_list">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item">
             <a class="nav-link" href="create_employee_types.php">Create New Employee Category</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="addemployee_list.php">Add Employees</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="employee_list.php">List of Employee</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Employee Sales History</a>
           </li>
         </ul>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui_customer_list" aria-expanded="false" aria-controls="ui-basic">
         <i class="menu-icon typcn typcn-shopping-bag"></i>
         <span class="menu-title">Patients</span>
         <i class="menu-arrow"></i>
       </a>

       <div class="collapse" id="ui_customer_list">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item">
             <a class="nav-link" href="add_customerslist.php">Add Patients</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="customer_list.php">List of Patients</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="adding_vehicles.php">Medical Records</a>
           </li>
         </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" href="sales_history.php">
         <i class="menu-icon typcn typcn-bell"></i>
         <span class="menu-title">Sale History</span>
       </a>
     </li>


   </ul>
 </nav>

 <script>

 </script>
