<!Doctype>
<html>
   <head>
       <title>Students list</title>
   </head>
   <body>
   <center>
       <br>
       <h1>Welcomme to school management App</h1>
       <hr>
       <h2>Students List</h2>
       <hr><br>
       <?php
       $studentDataDecoded = json_decode($studentData);
       ?>
       <table border="1" cellpadding="20" cellspacing="0">
           <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Class</th>
              <th>Action</th>
           </thead>
           <tbody>
                   <?php
                   for($i=0;$i<count($studentDataDecoded);$i++){
                   ?>
                   <tr>
                       <td><?= $studentDataDecoded[$i]->ID?> </td>
                       <td><?= $studentDataDecoded[$i]->Name?> </td>
                       <td><?= $studentDataDecoded[$i]->Gender?> </td>
                       <td><?= $studentDataDecoded[$i]->Class?> </td>
                       <td>Action</td>
                   <tr>
                   <?php
                   }
                   ?>
           </tbody>
       </table>
   </center>
   </body>
</html>
