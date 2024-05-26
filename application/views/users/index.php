<h3><?php echo $title ?></h3>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>status</th>
            <th>Date Created</th>
            <th>Actions</th>
        <tr>
    </thead>
    <tbody>
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($users as $user) : ?>
        <tr>
            <td><?php echo $user['complete_name']; ?></td>
            <td><?php 
            foreach ($roles as $role):
                if($role["role_id"] == $user['role']){
                    echo $role["role_name"]; 
                }
            
            endforeach;
            ?></td>
            <td><?= $user['status'] == 1? 'active' : 'inactive'?></td>
            <td><?php echo $user['date_created']; ?></td>
            <td>
                <a href= "<?php echo site_url('users/'.$user['userid']); ?>">View More</a>
                <a href= "<?php echo site_url('users/delete/'.$user['userid']); ?>">Delete</i></a>
                <!-- <?php echo site_url('users/edit?userid='.$user['userid']); ?> -->
                <a href= "edit?userid=<?=$user['userid']?>">Edit</i></a>
            </td>
        <tr>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== --> 

    </tbody>
</table>
<a class="btn btn-success text-white" href= "<?php echo site_url('create'); ?>">Add User</a>