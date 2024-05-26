<h3><?php echo $title ?></h3>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Date Created</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($volumes as $volumes) : ?>
        <tr>
            <td><?php echo $volumes['vol_name']; ?></td>
            <td><?php echo $volumes['description']; ?></td>
            <td><?php echo $volumes['date_at']; ?></td>
            <td>
                <a href= "<?php echo site_url('volumes/'.$volumes['volumeid']); ?>">View More</a>
                <a href= "<?php echo site_url('volumes/delete/'.$volumes['volumeid']); ?>">Delete</i></a>
                <!-- <?php echo site_url('volumes/edit_volume?volumeid='.$volumes['volumeid']); ?> -->
                <a href= "edit_volume?volumeid=<?=$volumes['volumeid']?>">Edit</i></a>
            </td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    </tbody>
</table>
<a class="btn btn-success text-white" href= "<?php echo site_url('create_volume'); ?>">Add Volume</a>