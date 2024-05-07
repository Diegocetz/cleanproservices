<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>
<div class="card">
        <h3><?php echo $news_item['title']; ?></h3>
        <div class="card-body">
                <?php echo $news_item['text']; ?>
        </div>
</div>
        <p><a href="<?php echo base_url('principal/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>


