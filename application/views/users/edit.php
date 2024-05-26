


    
    <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <form class="form-horizontal mt-4" action="update?userid=<?=$user['userid']?>" method="POST">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Edit User</h4>
                            <h5 class="card-subtitle"></h5>
                            <div class="form-group" >
                                </div>
                                <div class="form-group" >
                                    <label>Complete Name</label>
                                    <input type="text" class="form-control" value="<?=$user['complete_name']?>" name="completeName">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?=$user['email']?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" value="<?=$user['pword']?>" name="password">
                                </div>
                                <div class="form-group">
                                <label>Role</label>
                                    <select name="role_id" id="">
                                        <?php
                                            foreach($roles as $role):
                                            // Assuming $desiredRoleId is the role ID you want to pre-select
                                            $selected = '';
                                            if ($role["role_id"] == $user["role"]) {
                                                $selected = 'selected';
                                            }
                                        ?>
                                                <option value="<?= $role["role_id"]?>" <?= $selected?>><?= $role["role_name"]?></option>
                                            <?php
                                        endforeach;
                                ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <!-- Display the current status as text next to the checkbox -->
                                <input type="hidden" name="published" value="0">
                                <!-- Checkbox input -->
                                <input type="checkbox" class="form-check-input" name="status" 
                                    <?= $user['status'] == 1 ? 'checked' : ''?>>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <button class="btn btn-success text-white" type="submit">Update User</a>
            </form>