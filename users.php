<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</head>
    <title>Users</title>
</head>
<body style="background-color: rgba(140, 150, 120, 0.9)">
    
<!--start of container-->
<div class="container" >
    <div class="row">
       <div class="col-md-12">
           <hr>
           <h1 class="text-center text-white text-sm-center">TURNSTONE S1 SYSTEM</h1>
           <hr>
       </div>

    </div>
  <div class="row">
    <div class="col-md-12"><!-- Editable table -->
      <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Turnstone-S1 Users</h3>
        <div class="card-body">
          <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                  class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center" style="background-color: rgba(140, 140, 140, 0.2)">
              <thead>
                <tr>
                  <th class="text-center">Firstname</th>
                  <th class="text-center">Lastname</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Gender</th>
                  <th class="text-center">Remove</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="pt-3-half" contenteditable="true">Elijah </td>
                  <td class="pt-3-half" contenteditable="true">Turnstone</td>
                  <td class="pt-3-half" contenteditable="true">info@elijah.com</td>
                  <td class="pt-3-half" contenteditable="true">0741862008</td>
                  <td class="pt-3-half" contenteditable="true">Male</td>
                  
                  <td>
                    <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                  </td>
                </tr>
                <!-- This is our clonable table line -->
                <tr>
                  <td class="pt-3-half" contenteditable="true">Oliver</td>
                  <td class="pt-3-half" contenteditable="true">Kiara</td>
                  <td class="pt-3-half" contenteditable="true">info@kiaraoliver.com</td>
                  <td class="pt-3-half" contenteditable="true">0728937292</td>
                  <td class="pt-3-half" contenteditable="true">male</td>
                  <td>
                    <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                  </td>
                </tr>
                <!-- This is our clonable table line -->
                <tr>
                  <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
                  <td class="pt-3-half" contenteditable="true">26</td>
                  <td class="pt-3-half" contenteditable="true">Isotronic</td>
                  <td class="pt-3-half" contenteditable="true">Germany</td>
                  <td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
                  <td>
                    <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                  </td>
                </tr>
                <!-- This is our clonable table line -->
                <tr class="hide">
                  <td class="pt-3-half" contenteditable="true">Turnstone</td>
                  <td class="pt-3-half" contenteditable="true">Beaver</td>
                  <td class="pt-3-half" contenteditable="true">info@turnstonebeaver.com</td>
                  <td class="pt-3-half" contenteditable="true">0726362829</td>
                  <td class="pt-3-half" contenteditable="true">male</td>
                  
                  <td>
                    <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Editable table --></div>

      <script>
      //to handle table 
      const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 1) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });
      </script>
</body>
</html>