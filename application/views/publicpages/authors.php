
<h3><?php echo $title ?></h3>

<head>
<link href="<?php echo base_url('assets/libs/bootstrap/dist/css/feed.css')?>" rel="stylesheet">
</head>
<body class="mainbody">
<div class="feed">
<!-- <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
        <tr>
    </thead>
    <tbody> -->
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($article_author as $article) : ?>
        <div class="content">
        <div class="col-lg-8 col-xlg-9">
            <div>
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12">Full Name:</label>
                            <div class="col-md-12">
                            <?php echo $article['author_name']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email:</label>
                            <div class="col-md-12">
                            <?php echo $article['email']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Contact Number:</label>
                            <div class="col-md-12">
                            <?php echo $article['contact_num']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Title:</label>
                            <div class="col-md-12">
                            <?php echo $article['title']; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <br>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    <!-- </tbody>
</table> -->

</div>
</body>