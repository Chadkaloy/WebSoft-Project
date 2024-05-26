<h3><?php echo $title ?></h3>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($authors as $author) : ?>
        <tr>
            <td><?php echo $author['author_name']; ?></td>
            <td><?php echo $author['email']; ?></td>
            <td><?php echo $author['contact_num']; ?></td>
            <td>
                <a href= "<?php echo site_url('authors/'.$author['auid']); ?>">View More</a>
                <a href= "<?php echo site_url('authors/delete/'.$author['auid']); ?>">Delete</i></a>
                <!-- <?php echo site_url('authors/edit_author?auid='.$author['auid']); ?> -->
                <a href= "edit_author?auid=<?=$author['auid']?>">Edit</i></a>
            </td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    </tbody>
</table>
<a class="btn btn-success text-white" href= "<?php echo site_url('create_author'); ?>">Add Author</a>