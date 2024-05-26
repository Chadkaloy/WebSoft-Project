


    
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
                <form class="form-horizontal mt-4" action="update_article?articleid=<?=$article['articleid']?>" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Article</h4>
                            <h5 class="card-subtitle"></h5>
                            <div class="form-group" >
                                </div>
                                <div class="form-group" >
                                    <label>Article Title</label>
                                    <input type="text" class="form-control" value="<?=$article['title']?>" name="title">
                                </div>
                                <div class="form-group" >
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" value="<?=$article['keywords']?>" name="keywords">
                                </div>
                                <div class="form-group" >
                                    <label>Abstract</label>
                                    <textarea id="editor" type="text" class="form-control" value="" name="abstract">
                                    <?= $article["abstract"] ?>        
                                </textarea>  
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editor'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script> 
                                </div>
                                <div class="form-group">
                                <div class="form-group">
                                    <label>Publish Status</label>
                                    <!-- Display the current status as text next to the checkbox -->
                                    <input type="hidden" name="published" value="0">
                                    <!-- Checkbox input -->
                                    <input type="checkbox" class="form-check-input" name="published" 
                                        value="1" <?= $article['published'] == 1? 'checked' : ''?>>
                                </div>

                                <div class="form-group">
                                    <label>File Name</label>
                                    <input type="text" class="form-control" value="<?=$article['filename']?>" name="filename">
                                </div>
                                <div class="form-group">
                                    <label>DOI</label>
                                    <input type="text" class="form-control" value="<?=$article['doi']?>" name="doi">
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
            <button class="btn btn-success text-white" type="submit">Update Article</a>
            </form>