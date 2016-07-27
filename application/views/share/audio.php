<form method="post" action="/share/save">
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>" />
    <input type="hidden" name="type" value="audio" />
    <button class="btn btn-default" onclick="recordAudio(); return false">
        <i class="fa fa-microphone"></i>
    </button>
    <button class="btn btn-success">Save</button>
</form>
