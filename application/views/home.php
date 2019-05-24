<?php
if ($data->num_rows() > 0) {

   if (isset($url)) {
      echo '<h4>List Item Pada Kategori "'.$url.'"</h4><hr />';
   }
?>
<div class="row">
   <?php foreach($data->result() as $key) : ?>
      <div class="col s12 m3">
         <div class="card">
            <div class="card-image">
               <img src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>">
      <span ><?= $key->nama_item; ?></span>
            </div>
            <div class="card-content"></br></br></br>
            <p></p>
               <center><p>Rp. <?= number_format($key->harga, 0, ',', '.'); ?></p></center>
            </div>
            <div class="card-action">
               <a href="<?= base_url(); ?>home/detail/<?= $key->id_item; ?>" class="waves-effect waves-light btn-flat blue white-text"><i class="fa fa-search-plus"></i> Detail</a>
               <a href="<?= base_url(); ?>cart/add/<?= $key->id_item; ?>" class="waves-effect waves-light btn-flat green white-text"><i class="fa fa-shopping-cart"></i> Add to cart</a>
            </div>
         </div>
      </div>
   <?php endforeach; ?>
</div>
<?php
} else {
   echo '<h4>Kategori "'.$url.'" Masih Kosong</h4><hr />';
}
?>
