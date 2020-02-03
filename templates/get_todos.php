<?php if(isset($todos)):?>
<ul>
    <?php foreach($todos as $index => $todo): ?>
        <li><?=$todo ?></li> <a href="delete_todo.php?id=<?=$index+1?>">delete</a>
    <?php endforeach ?>
</ul>
<?php endif; ?>