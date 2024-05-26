
    
    
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
                <form class="form-horizontal mt-4" action="addUser" method="POST">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Add User</h4>
                            <h5 class="card-subtitle"></h5>
                                <div class="form-group" >
                                    <label>Complete Name</label>
                                    <input type="text" class="form-control" value="" name="completeName">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" value="" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Role </label>
                                    <select name="role_id" id="">
                                        <?php
                                            foreach($roles as $role):
                                                ?>
                                                    <option value="<?= $role["role_id"] ?>"><?= $role["role_name"] ?></option>
                                                <?php

                                            endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="checkbox" class="form-check-input" id="statusCheckbox" name="status" value="1">
                                    <label class="form-check-label" for="statusCheckbox"></label>
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
            <button class="btn btn-success text-white" type="submit">Add User</a>
            </form>