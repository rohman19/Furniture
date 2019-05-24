<div class="x_panel">
   <div class="x_title">
      <h2><?= $header; ?></h2>
     <div class="clearfix"></div>
     <?= validation_errors('<p style="color:red">','</p>'); ?>
     <?php
     if ($this->session->flashdata('alert'))
     {
        echo '<div class="alert alert-danger alert-message">';
        echo $this->session->flashdata('alert');
        echo '</div>';
     }
     ?>
   </div>

   <div class="x_content">
      <br />

      <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">

         <div class="form-group">
           <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Kategori</label>
            <div class="col-md-4 col-sm-6">
               <input type="text" class="form-control col-md-7 col-xs-12" name="kategori" value="<?= $kategori; ?>">
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">URL</label>
            <div class="col-md-4 col-sm-6">
               <input class="form-control col-md-7" type="text" name="url" value="<?= $url; ?>">
            </div>
         </div>

        

         <div class="ln_solid"></div>

         <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
              <button type="button" onclick="window.history.go(-1)" class="btn btn-primary" >Kembali</button>
            </div>
         </div>

     </form>
   </div>
</div>
