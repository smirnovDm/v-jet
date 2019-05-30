<?php foreach ($this->note as $note): ?>
    <div>
        <dl>
            <dt><?= $note['author_name'] ?></dt>
            <dd id="<?= $note['id'] ?>" class="content"><?= $note['content'] ?></dd>
            <dd><?= $note['created_at'] ?></dd>
        </dl>
    </div>
<?php endforeach; ?>
<?php foreach ($this->note as $note): ?>
<form method="POST" action="/comments" name="createNote" style="width: 20%;" >
    <div class="form-group" style="margin-top: 50px;">
        <label for="exampleFormControlInput1">Enter your name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required maxlength="50">
        <input type="hidden" name="id" value="<?=$note['id']?>"/>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Left your comment:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" required></textarea>
    </div>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Comment</button>
    </div>
</form>
<?php endforeach; ?>
<hr>
<h2 align="center">Comments</h2>
<?php foreach($this->comments as $comment) :?>
<div>
    <dl>
        <dt><?=$comment['author_name']?></dt>
        <dd><?=$comment['text']?></dd>
    </dl>
</div>
<?php endforeach; ?>


