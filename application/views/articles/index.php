<h3><?php echo $title ?></h3>

<form style="width: fit-content;margin: unset;" action="<?php site_url("articles") ?>" method="post">
                <label for='volume'>Filter Volume</label>
                <select name='volume' id='volume' style='width:100px;'>
                    <option value="none" selected>None</option>
                    <?php foreach ($volumes as $volume): ?>
                        
                        <option value="<?= $volume['volumeid'] ?>" <?= !is_null($selected_id) && $volume['volumeid'] == $selected_id ? 'selected' : '' ?>>
                            <?= $volume['vol_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>File Name</th>
            <th>DOI</th>
            <th>Volume</th>
            <th>Publish Status</th>
            <th>Actions</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($articles as $article) : ?>
        <tr>
            <td><?php echo $article['title']; ?></td>
            <td><?php echo $article['filename']; ?></td>
            <td><?php echo $article['doi']; ?></td>
            <td><?php
            foreach($volumes as $volume):
                if($volume["volumeid"] ==  $article['volumeid']){
                    echo $volume["vol_name"]; 
                }
            endforeach;
             ?></td>
            <td>
                <?php 
                    if ($article['published'] == 1) {
                    echo "Published";} 
                    else {
                    echo "Archived";}
                ?>
            </td>
            <td>
                <a href= "<?php echo site_url('articles/'.$article['articleid']); ?>">View More</a>
                <a href= "<?php echo site_url('articles/delete/'.$article['articleid']); ?>">Delete</i></a>
                <!-- <?php echo site_url('articles/edit_article?articleid='.$article['articleid']); ?> -->
                <a href= "edit_article?articleid=<?=$article['articleid']?>">Edit</i></a>
            </td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    </tbody>
</table>
<a class="btn btn-success text-white" href= "<?php echo site_url('create_article'); ?>">Add Article</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    console.log(document.getElementById("volume"));
    $(document).ready(function () {
        $('#volume').on('change', function () {
            $('form[action="<?php site_url("articles") ?>"]').submit();
        });
    });
</script>