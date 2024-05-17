<body>

   <div class="img-custom2">
      <div class="container container-fluid">
                  <div class="text-custom5">
                  <h1 class="text-center text-white"><?= $title; ?></h1>
         </div>
 </div>
   </div>
   <br><br>

   <div class="container-fluid">  
          <div class="row">
         <div class="text-custom5 col">
            <p class="small">1</p>
<?php foreach ($program_1 as $news_item): ?>
   <h1 class="text-center"><?= $news_item['title']; ?></h1>
                <p><?= $news_item['text']; ?></p>
                       
         </div>
         <div class="col-sm">
         <img class="img-fluid img-custom1" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
   <div class="container-custom1 container-fluid">
      <div class="row">
         <div class="col-sm">
         <?php foreach ($program_2 as $news_item): ?>
         <img class="img-fluid img-custom1" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
         <div class="text-custom5 text-white col">
            <p class="small">2</p>
            <h1 class="text-center"><?= $news_item['title']; ?></h1>
                <p><?= $news_item['text']; ?></p>
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
   <div class="container-fluid">
      <div class="row">
      <div class="text-custom5 col">
            <p class="small">3</p>
            <?php foreach ($program_3 as $news_item): ?>
   <h1 class="text-center"><?= $news_item['title']; ?></h1>
                <p><?= $news_item['text']; ?></p>
                       
         </div>
         <div class="col-sm">
         <img class="img-fluid img-custom1" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
         </div>
      </div>
   </div>
   <?php endforeach; ?>

   <br><br>
   <div class="container-fluid ">
      <div class="container">
         <div class="card-deck">
            <div class="card">
            <?php foreach ($character_1 as $news_item): ?>
               <img class="img-fluid" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
               <div class="card-body text-custom5">
               <h2 class="text-center"><?= $news_item['title']; ?></h2>
                <p><?= $news_item['text']; ?></p>

               </div>
            </div>
            <?php endforeach; ?>

            <div class="card">
            <?php foreach ($character_2 as $news_item): ?>
               <img class="img-fluid" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
               <div class="card-body text-custom5">
               <h2 class="text-center"><?= $news_item['title']; ?></h2>
                <p><?= $news_item['text']; ?></p>

               </div>
            </div>
            <?php endforeach; ?>

            <div class="card">
                   <?php foreach ($character_3 as $news_item): ?>
               <img class="img-fluid" src=" <?= base_url('assets/img/'.$news_item['slug']); ?>">
               <div class="card-body text-custom5">
               <h2 class="text-center"><?= $news_item['title']; ?></h2>
                <p><?= $news_item['text']; ?></p>

               </div>
            </div>      
         </div>
      </div>
   </div>
            <?php endforeach; ?>
 
</body>