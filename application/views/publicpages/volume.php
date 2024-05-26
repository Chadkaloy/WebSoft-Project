
<h3><?php echo $title ?></h3>

<head>
<link href="<?php echo base_url('assets/libs/bootstrap/dist/css/feed.css')?>" rel="stylesheet">
</head>
<body class="mainbody">
<div class="feed">
<!-- <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>description</th>
            <th>Date Created</th>
        <tr>
    </thead>
    <tbody> -->
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($article_author as $article) : ?>
        <div class="content">
        <a style="font-size:25px;"><?php echo $article['vol_name']; ?></a><br>
            <abs><?php echo $article['description']; ?></a>
        </div><br>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    <!-- </tbody>
</table> -->
</div>
</body>