<h3><?php echo $title ?></h3>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Role Name</th>
            <th>Actions</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($roles as $roles) : ?>
        <tr>
            <td><?php echo $roles['role_name']; ?></td>
            <td>
                <a href= "<?php echo site_url('view_roles?role='.$roles['role_id']); ?>">View More</a>
                <a href= "<?php echo site_url('roles/delete/'.$roles['role_id']); ?>">Delete</i></a>
                <!-- <?php echo site_url('roles/edit_roles?role_id='.$roles['role_id']); ?> -->
                <a href= "edit_roles?role_id=<?=$roles['role_id']?>">Edit</i></a>
            </td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== --> 

    </tbody>
</table>
<a class="btn btn-success text-white" href= "<?php echo site_url('create_roles'); ?>">Add Role</a>