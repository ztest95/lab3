<!-- <h2><?= esc($title) ?></h2> -->

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="<?= base_url('guests')?>" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br><br>
	
	<label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br><br>


    <input type="submit" name="submit" value="Add Guest">
</form>