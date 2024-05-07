<body>
   <div class="container-custom1 container-fluid">
      <br>
      <div class="row">
         <div class="text-custom5 text-white  col">
            <p class="small">1</p>
<?php foreach ($character_1 as $news_item): ?>
   <h1 class="text-center"><?php echo $news_item['title']; ?></h1>
                <p><?php echo $news_item['text']; ?></p>
                       
         </div>
         <div class="col-sm">
         <img class="img-fluid img-custom1" src=" <?php echo base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
    <div class="container container-fluid">
      <div class="row">
         <div class="col-sm">
         <?php foreach ($character_2 as $news_item): ?>
         <img class="img-fluid img-custom1" src=" <?php echo base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
         <div class="text-custom5 col">
            <p class="small">2</p>
            <h1 class="text-center"><?php echo $news_item['title']; ?></h1>
                <p><?php echo $news_item['text']; ?></p>
         </div>
      </div>
   <?php endforeach; ?>

   <br><br>
   <div class="row">
         <div class="text-custom5 col">
            <p class="small">3</p>
<?php foreach ($character_3 as $news_item): ?>
   <h1 class="text-center"><?php echo $news_item['title']; ?></h1>
                <p><?php echo $news_item['text']; ?></p>
                       
         </div>
         <div class="col-sm">
         <img class="img-fluid img-custom1" src=" <?php echo base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
   <div class="container-custom1 container-fluid">
      <br>
      <div class="row">
         <div class="text-custom5 text-white  col">
            <p class="small">4</p>
<?php foreach ($character_4 as $news_item): ?>
   <h1 class="text-center"><?php echo $news_item['title']; ?></h1>
                <p><?php echo $news_item['text']; ?></p>
                       
         </div>
         <div class="col-sm">
         <img class="img-fluid img-custom1" src=" <?php echo base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
      </div>
    </div>
   <?php endforeach; ?>

   <br><br>
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm">
         <?php foreach ($character_5 as $news_item): ?>
         <img class="img-fluid img-custom1" src=" <?php echo base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
         <div class="text-custom5 col">
            <p class="small">5</p>
            <h1 class="text-center"><?php echo $news_item['title']; ?></h1>
                <p><?php echo $news_item['text']; ?></p>
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
</body>