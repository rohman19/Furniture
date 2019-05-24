<div class="x_panel">
   <div class="x_title">
      <h2>Detail Kategori</h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <div class="row">
         <div class="col-md-6 col-sm-6">
            <table class="table table-striped">
              <tr>
                  <td width="100px;">Kategori</td>
                  <?php
                  $value = '';
                  foreach ($kategori->result() as $k) {
                     $value .= ', '.$k->kategori;
                  }
                  ?>
                  <td>: <?= trim($value, ', '); ?></td>
               </tr>
               <tr>
                  <td width="100px;">URL</td>
                  <td>: <?= $url; ?></td>
               </tr>
            </table>
            <a href="<?=base_url();?>item/update_kategori/<?=$id_kategori;?>" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
         </div>
      </div>
   </div>
</div>
