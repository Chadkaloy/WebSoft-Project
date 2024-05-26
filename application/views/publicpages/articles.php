
<h3><?php echo $title ?></h3>

<head>
<link href="<?php echo base_url('assets/libs/bootstrap/dist/css/feed.css')?>" rel="stylesheet">
</head>
<body class="mainbody">
<div class="feed">


    <!-- <div class='content'>
        <a>test totsae </a>
        <div class='description'>
            <a>test a;lsdkfw</a>
        </div>
    </div> -->

<!-- <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Keywords</th>
            <th>Abstract</th>
            <th>File Name</th>
        <tr>
    </thead> -->
    <!-- <tbody> -->
    <!-- ============================================================== -->
    <!-- start of Loop -->
    <!-- ============================================================== -->
    <?php foreach($article_author as $article) : ?>
        <div class="content">
        <a style="font-size:25px;"><?php echo $article['title'];?></a><br>
            <!-- <div class="description"> -->
            <a><?php echo $article['keywords']; ?></a><br><br>
            <a><?php echo $article['abstract']; ?></a><br><br>
            <a href="<?php echo $article['doi']; ?>"><?php echo $article['doi']; ?></a><br>
            <a><?php echo $article['filename']; ?></a><br>
            <a href="<?php echo base_url('assets/cmujs_pdf/'.$article['filename'])?>">PDF</a>
            <!-- </div> -->
        </div><br>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- end of Loop -->
    <!-- ============================================================== -->

    <!-- </tbody>
</table> -->
</div>
</body>