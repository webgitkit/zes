<?php include "common/header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="pe-7s-box1"></i>
      </div>
      <div class="header-title">
         <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
            <div class="input-group">
               <input type="text" name="q" class="form-control" placeholder="Search...">
               <span class="input-group-btn">
               <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
               </span>
            </div>
         </form>
         <h1>Doctor</h1>
         <small>Doctor list</small>
         <ol class="breadcrumb hidden-xs">
            <li><a href="index"><i class="pe-7s-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
         </ol>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd">
               <div class="panel-heading">
                  <div class="btn-group"> 
                     <a class="btn btn-success" href="forms_basic"> <i class="fa fa-plus"></i> Add Doctor
                     </a>  
                  </div>
               </div>
               <div class="panel-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover"  id="alljoining">
                        <thead>
                           <tr>
                              <th>Serial No</th>
                              <th>First Name</th>
                              <th>last Name</th>
                              <th>Department</th>
                              <th>Mobile No</th>
                              <th>Phone </th>
                              <th>Price </th>
                              <th>Update</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Alimul</td>
                              <td>alrazy</td>
                              <td>Neurology</td>
                              <td>019833333222</td>
                              <td>019833333222</td>
                              <td>$43</td>
                              <td>
                                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                 </button>
                                 <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash-o"></i>
                                 </button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include "common/footer.php";?>
<script>
   $(document).ready(function() {
       $('#alljoining').DataTable({
           dom: 
               "<'row'<'col-sm-6'l><'col-sm-6'f>>" + 
               "<'row'<'col-sm-12'tr>>" +             
               "<'row'<'col-sm-5'i><'col-sm-7'p>>" + 
               "<'row'<'col-sm-12'B>>",               
           buttons: [
               {
                   extend: 'copy',
                   className: 'btn btn-sm btn-primary',
                   title: 'Doctor List',
                   filename: 'Doctor_List' // 👈 your custom file name
               },
               {
                   extend: 'csv',
                   className: 'btn btn-sm btn-success',
                   title: 'Doctor List',
                   filename: 'Doctor_List'
               },
               {
                   extend: 'excel',
                   className: 'btn btn-sm btn-warning',
                   title: 'Doctor List',
                   filename: 'Doctor_List'
               },
               {
                   extend: 'pdf',
                   className: 'btn btn-sm btn-danger',
                   title: 'Doctor List',
                   filename: 'Doctor_List',
                   orientation: 'landscape', // optional
                   pageSize: 'A4'            // optional
               },
               {
                   extend: 'print',
                   className: 'btn btn-sm btn-info',
                   title: 'Doctor List'
               }
           ],
           lengthMenu: [
               [10, 25, 50, 100, -1],
               [10, 25, 50, 100, "All"]
           ],
           pageLength: 10
       });
   });
</script>