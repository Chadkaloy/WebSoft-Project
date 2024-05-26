
<h3><?php echo $title ?></h3>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>File Name</th>
            <th>Author</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($article_author as $article) : ?>
        <tr>
            <td><?php echo $article['title']; ?></td>
            <td><?php echo $article['filename']; ?></td>
            <td><?php echo $article['author_name']; ?></td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    </tbody>
</table>