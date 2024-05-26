
    
    
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
                <form class="form-horizontal mt-4" action="addArticle" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Add Article</h4>
                            <h5 class="card-subtitle"></h5>
                                <div class="form-group" >
                                    <label>Article Title</label>
                                    <input type="text" class="form-control" value="" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Key Words</label>
                                    <input type="text" class="form-control" value="" name="keywords">
                                </div>
                                <div class="form-group">
                                <label>Abstract</label>
                                    <textarea id="editor" type="text" class="form-control" value="" name="abstract"> </textarea>  
                                    <script>
				                    ClassicEditor
					                .create(document.querySelector('#editor'))
					                .catch(error => {
						            console.error(error);
					                });
			                        </script> 
                                </div>
                                <div class="form-group">
                                    <label>Publish Status</label>
                                    <!-- Hidden input to ensure unchecked checkbox sends a value -->
                                    <input type="hidden" name="published" value="0">
                                    <!-- Checkbox for published status -->
                                    <br><input type="checkbox" name="published" value="1">
                                </div>
                                <div class="form-group">
                                    <label>File Name</label>
                                    <input type="file" class="form-control" value="" name="filename">
                                </div>
                                <div class="form-group">
                                    <label>DOI</label>
                                    <input type="text" class="form-control" value="" name="doi">
                                </div>
                                <div class="form-group">
                                    <label>Volume </label>
                                    <select name="volumeid" id="">
                                        <?php
                                            foreach($volumes as $volume):
                                                ?>
                                                    <option value="<?= $volume["volumeid"] ?>"><?= $volume["vol_name"] ?></option>
                                                <?php

                                            endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Author </label>
                                    <select name="authorid" id="">
                                        <?php
                                            foreach($authors as $author):
                                                ?>
                                                    <option value="<?= $author["auid"] ?>"><?= $author["author_name"] ?></option>
                                                <?php

                                            endforeach;
                                        ?>
                                    </select>
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
            <button class="btn btn-success text-white" type="submit">Add Article</a>
            </form>