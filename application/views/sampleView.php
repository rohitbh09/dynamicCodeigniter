<?php echo $this->load->view('default/header'); ?>

<table  class = "table table-hover" >
  <thead>
    <tr>
      <th data-field="id"> ID</th>
      <th data-field="name"> Name</th>
      <th data-field="password">Password</th>
      <th>edit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sample as $key => $value) { ?>
    <tr> 
      <td><?php echo $value->id;?></td>
      <td><?php echo $value->user;?></td>
      <td><?php echo $value->password;?></td>
      <td><i class="glyphicon glyphicon-edit" ></i></td>
    </tr>
    <?php }?>  
  </tbody>  

</table>

<?php echo $this->load->view('default/footer'); ?>


