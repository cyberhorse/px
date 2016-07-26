<a class="btn btn-default ajax" href="/share/text">Comment</a>

<ul>
<?php foreach ($records as $record) : ?>
    <li><?php echo $record['name'] ?>: <?php echo $record['content'] ?></li>
<?php endforeach ?>
<ul>

...
