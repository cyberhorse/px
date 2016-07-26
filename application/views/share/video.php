<form method="post" action="/share/save">
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>" />
    <input type="hidden" name="type" value="video" />
    <input type="file" name="file" accept="video/*;capture=camcorder">
    <button class="btn btn-success">Save</button>
</form>