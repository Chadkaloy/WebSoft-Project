


    
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
                <form class="form-horizontal mt-4" action="update_roles?role_id=<?=$roles['role_id']?>" method="POST">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Role</h4>
                            <h5 class="card-subtitle"></h5>
                            <div class="form-group" >
                                </div>
                                <div class="form-group" >
                                    <label>Role Name</label>
                                    <input type="text" class="form-control" value="<?=$roles['role_name']?>" name="roleName">
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
            <button class="btn btn-success text-white" type="submit">Update Role</a>
            </form>