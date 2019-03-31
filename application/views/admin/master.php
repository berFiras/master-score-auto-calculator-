<div class="area"> 	
   <div class="container">
      <h1>Gestion de mastéres et formules:</h1>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-float" data-toggle="modal" data-target="#exampleModal">
      +
      </button>
      <?php if (isset($error)) { ?>
      <div class="alert alert-danger" role="alert">
         <?= $error ?>
      </div>
      <?php } ?>
      <?php if (isset($success)) { ?>
      <div class="alert alert-success" role="success">
         <?= $success ?>
      </div>
      <?php } ?>
      <div class="table-bg">
         <table class="table" >
            <thead>
               <tr>
                  <th scope="col">ID Master</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Description</th>
                  <th scope="col">Bonus</scope>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach($masters as $master) { ?>
               <tr>
                  <?php echo form_open("admin/master?master_id=$master->id"); ?>
                  <th scope="row"><?= $master->id ?></th>
                  <td><input type="text" name="titre" value="<?= $master->titre ?>" /></td>
                  <td><input type="text" name="description" value="<?= $master->description ?>" /></td>
                  <td>
                     <!-- Mention +  Non Redoublant + Annee Diplome<br> -->
                     <input type="number" name="bonus_mention" value="<?= $master->bonus_mention ?>" size="2" style="width:40px"/> + 
                     <input type="number" name="bonus_non_redoublant" value="<?=  $master->bonus_non_redoublant ?>" size="2"style="width:40px"/> + 
                     <input type="number" name="bonus_annee_diplome" value="<?= $master->bonus_annee_diplome ?>" size="2" style="width:40px" />
                  </td>
                  <td>
                     <button type="submit" name="action" value="update" class="btn tablebtn"><i class="fa 2x fa-pencil"></i></button>
                     <button type="submit" name="action" value="delete" class="btn tablebtn"><i class="fa 2x fa-trash"></i></button>
					 <a href='<?= base_url("admin/best_scores?master_id=$master->id") ?>' >Afficher scores</a>
                     &nbsp;
                  </td>
                  <?php echo form_close(); ?>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?php echo form_open("admin/master"); ?>
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">Ajouter une mastére et formules içi:</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
<div class="modal-body">
   <div class="form-group">
      <label>Titre</label>
      <input type="text" class="form-control" name="titre" placeholder="Ajouter titre">
   </div>
   <div class="form-group">
      <label>Description</label>
      <textarea id="editor1" class="form-control" name="description" placeholder="Ajouter description"></textarea>
   </div>
   <div class="form-group">
      <label>Bonus mention</label>
      <input type="number" class="form-control" name="bonus_mention" value="0" placeholder="Bonus Mention" />
   </div>
   <div class="form-group">
      <label>Bonus Non Redoublant</label>
      <input type="number" class="form-control" name="bonus_non_redoublant" value="0" placeholder="Bonus Non Redoublant" />
   </div>
   <div class="form-group">
      <label>Bonus Annee Diplome</label>
      <input type="number" class="form-control" name="bonus_annee_diplome" value="0" placeholder="Bonus Annee Diplome" />
   </div>
</div>
<div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
   <button type="submit" class="btn btn-primary" name="action" value="add">Sauvegarder </button>
</div>
<?php form_close(); ?>

<style>
    input{ 
    border: none;
    outline: none;
    padding:5px;
    }
    input:hover{
        cursor: text; 
        border: 1px solid #c2cdcd;
    }
    tbody{
    background: white;
    }
    .btn.tablebtn{
      background: transparent;
      padding:0;
      display: inline-block;
    }
</style>
