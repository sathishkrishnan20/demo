


<a href="<?php echo site_url('user/add'); ?>">Add</a>
 <table border='1' cellpadding='4'>
     <tr>
         <td><strong>User Name</strong></td>
         <td><strong>User ID</strong></td>
         <td><strong>Action</strong></td>

     </tr>

      <?php foreach ($users as $key) : ?>
        <tr>
          <td> <?php echo $key['user_id'];?> </td>
          <td> <?php echo $key['user_name'];?> </td>

          <td>
              <a href="<?php echo site_url('user/'.$key['user_id']); ?>">View</a>
              <a href="<?php echo site_url('user/edit/'.$key['user_id']); ?>"> edit</a>
              <a href="<?php echo site_url('user/delete/'.$key['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">delete</a>
          </td>

        <tr>

          <?php endforeach; ?>
   </table>
