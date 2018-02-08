<?php echo validation_errors(); ?>

<?php echo form_open('user/edit/' .$user['user_id'] ); ?>
USER NAME :
<input type = 'text' name="userName" id = "userName" value = "<?php echo $user['user_name'] ?>" > </input>
<input type = 'submit' value = 'Update'></input>
</form>
