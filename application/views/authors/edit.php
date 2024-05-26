


    
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
                <form class="form-horizontal mt-4" action="update_author?auid=<?=$author['auid']?>" method="POST">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Author</h4>
                            <h5 class="card-subtitle"></h5>
                            <div class="form-group" >
                                </div>
                                <div class="form-group" >
                                    <label>Author Name</label>
                                    <input type="text" class="form-control" value="<?=$author['author_name']?>" name="author_name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?=$author['email']?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" value="<?=$author['contact_num']?>" name="contact_num">
                                </div>
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" class="form-control" value="<?=$author['title']?>" name="title">
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
            <button class="btn btn-success text-white" type="submit">Update Author</a>
            </form>