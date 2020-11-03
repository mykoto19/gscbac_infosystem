<?php 
  require_once '../core/initdb.php';
  $id = $_POST['id'];
  $id = (int)$id;
  $sql = "SELECT * FROM itemtbl WHERE itemID = '$id'";
  $result = $db->query($sql);
  $item = mysqli_fetch_assoc($result);
  $item_id = $item['type'];
  $sql = "SELECT typeName FROM itemtype WHERE typeID = '$item_id'";
  $type_query = $db->query($sql);
  $type = mysqli_fetch_assoc($type_query);
?>


  <?php ob_start(); ?>

    <div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><?= $item['itemName']; ?></h4>
           
            <button class="close" type="button" onclick="closeModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="center-block">
                    <img src="<?= $item['itemImage']; ?>" alt="<?= $item['itemName']; ?>" class="details img-responsive">
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4>Details</h4>
                  <p><?= $item['itemDetails']; ?></p>
                  <hr>
                  <p class="text-primary"><b>Price: P<?= $item['itemCost']; ?></</b></p>
                  <p class="text-primary"><b>Type: <?= $type['typeName']; ?></</b></p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" onclick="closeModal()">Close</button>
            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Save Item</button>
          </div>
        </div>
      </div>
    </div>

    
    
    <script>
      function closeModal(){
        jQuery('#details-modal').modal('hide');
        setTimeout(function(){
          jQuery('#details-modal').remove();
          jQuery('.modal-backdrop').remove();
        },500);
      }
    </script>
  <?php echo ob_get_clean(); ?>