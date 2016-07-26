<form method="post" action="/share/save">
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>" />
    <input type="hidden" name="type" value="text" />
    <textarea name="comment" class="form-control" placeholder="Comment"></textarea>
    <button class="btn btn-success">Save</button>
</form>