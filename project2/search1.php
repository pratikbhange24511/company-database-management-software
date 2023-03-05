<?php
include("search.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="st.css">

</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>assetid</th>
         <th>assetdt</th>
         <th>catg</th>
         <th>make</th>
         <th>model</th>
         <th>srno</th>
         <th>decp</th>
         <th>warrexpdt</th>
         <th>empid</th>
         <th>depcd</th>
         <th>loc</th>
         <th>section</th>
         <th>creby</th>
         <th>stat</th>







    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['assetid']??''; ?></td>
      <td><?php echo $data['assetdt']??''; ?></td>
      <td><?php echo $data['catg']??''; ?></td>
      <td><?php echo $data['make']??''; ?></td>
      <td><?php echo $data['model']??''; ?></td>
      <td><?php echo $data['srno']??''; ?></td>
      <td><?php echo $data['descp']??''; ?></td>  

      <td><?php echo $data['loc']??''; ?></td>
      <td><?php echo $data['section']??''; ?></td>
      <td><?php echo $data['creby']??''; ?></td>
      <td><?php echo $data['stat']??''; ?></td>
        
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>