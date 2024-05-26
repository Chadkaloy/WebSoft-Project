


    
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
                <form class="form-horizontal mt-4" action="update_volume?volumeid=<?=$volume['volumeid']?>" method="POST">

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Volume</h4>
                            <h5 class="card-subtitle"></h5>
                            <div class="form-group" >
                                </div>
                                <div class="form-group" >
                                    <label>Volume Name</label>
                                    <input type="text" class="form-control" value="<?=$volume['vol_name']?>" name="vol_name">
                                </div>
                                <label>Description</label>
                                    <textarea id="editor" type="text" class="form-control" value="" name="description">
                                    <?= $volume["description"] ?> 
                                    </textarea>  
                                    <script>
				                    ClassicEditor
					                .create(document.querySelector('#editor'))
					                .catch(error => {
						            console.error(error);
					                });
			                        </script> 
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
            <button class="btn btn-success text-white" type="submit">Update Volume</a>
            </form>