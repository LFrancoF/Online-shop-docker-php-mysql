 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title><?= $data['page_tab']; ?></title>
 </head>
 <body>
     <?php deb($data);?>
     <section id="<?= $data['page_id']; ?>">
          <h1><?= $data['page_title']; ?></h1>
          <p> <?= $data['page_content']; ?> </p>
     </section>
     <?= formatMoney(52501)." ".SMONEY;?>
 </body>
 </html>