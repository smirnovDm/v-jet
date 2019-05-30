<h2 align="center">Popular notes!</h2>


<div class="slider">
    <?php foreach ($this->popular_notes as $note): ?>
        <div class="item">
            <div class="text"><?= $note['author_name'] ?></div>
            <div class="text"><?= $note['content'] ?></div>
            <div class="text">  <form method="POST" action="/notes">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>"/>
                    <button type="submit"><i class="fas fa-comments"></i></button><span><?= $note['num'] ?></span>
                </form></div>

        </div>
    <?php endforeach; ?>
</div> 
<hr>

<?php foreach ($this->notes as $note): ?>
    <div>
        <dl>
            <dt><?= $note['author_name'] ?></dt>
            <dd id="<?= $note['id'] ?>"><p class="content"><?= $note['content'] ?></p></dd>
            <dd><?= $note['created_at'] ?></dd>
            <dd>
                <form method="POST" action="/notes">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>"/>
                    <button type="submit"><i class="fas fa-comments"></i></button><span><?= $note['num'] ?></span>
                </form>
            </dd>
        </dl>
    </div>

<?php endforeach; ?>

<form method="POST" id="createNote" style="width: 30%; margin-left: auto; margin-right: auto;" >
    <div class="form-group" style="margin-top: 50px;">
        <label for="exampleFormControlInput1">Enter your name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required maxlength="50">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Enter your note content:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" required></textarea>
    </div>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>


























<!--<script>

    function sendId(id) {
        id = +id;
        var post_data = 'id=' + id;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/notes');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {

                }
            }
        };
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(post_data);
    }

    var dd = document.getElementsByClassName('content');
    for (i = 0; i < dd.length; i++) {
        dd[i].onclick = function () {
            var note_id = this.id;
            sendId(note_id);

//            event.preventDefault();
        };
    }


</script>-->