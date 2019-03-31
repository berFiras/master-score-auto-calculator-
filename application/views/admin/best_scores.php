<div class="area"> 	
   <div class="container">
      <h1>Liste finale des eutiant(e)s:</h1>
      <!-- Button trigger modal -->
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
               <th scope="col">Score</th>
               <th scope="col">CIN Etudiant</th>
               <th scope="col">Etablissement</th>
               <th scope="col">Actions</>
               </tr>
            </thead>
            <tbody>
               <?php foreach($best_scores as $score) { ?>
               <tr>
                  <th scope="row"><?= $score->score ?></th>
                  <td> <?= $score->cin ?></td>
                  <td> <?= $score->etab_dernier_diplome ?></td>
                  <td>
					 <a href='<?= base_url("admin/best_scores?master_id=$score->choix&action=delete&cin=$score->cin") ?>' >Annuller Demande</a>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
         <?php if (count($best_scores) == 0) { ?>
      <div class="alert alert-danger" role="alert">
        Aucune demande pour cette mastere !
      </div>
      <?php } ?>
    
      </div>
   </div>
</div>

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
