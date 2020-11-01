<?php 
  require_once '../core/init.php';
  $id = $_POST['id'];
  $id = (int)$id;
  $sql = "SELECT * FROM products WHERE id = '$id'";
  $result = $db->query($sql);
  $product = mysqli_fetch_assoc($result);
  $brand_id = $product['brand'];
  $sql = "SELECT brand FROM brand WHERE id = '$brand_id'";
  $brand_query = $db->query($sql);
  $brand = mysqli_fetch_assoc($brand_query);
  $colorstring = $product['color'];
  $color_array = explode(',', $colorstring);
?>


  <?php ob_start(); ?>

    <div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><?= $product['title']; ?></h4>
            
            <button class="close" type="button" onclick="closeModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="center-block">
                    <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="details img-responsive">
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4>Details</h4>
                  <p><?= $product['description']; ?></p>
                  <hr>
                  <p class="text-primary"><b><?= $product['price']; ?></</b></p>
                  <p class="text-primary"><b>Brand: <?= $brand['brand']; ?></</b></p>
                  <form action="add_list.php" method="post">
                    <div class="form-group">
                      <div class="col-xs-3">
                        <label for="quantity">Quantity:</label>
                        <input type="text" name="quantity" class="form-control" id="quantity">
                      </div>
                      <div class="form-group">
                        <label for="color">Color:</label>
                        <select name="color" id="color" class="form-control">
                          <option value=""></option>
                          <?php foreach ($color_array as $string) {
                            $string_array = explode(':', $string);
                            $color = $string_array[0];
                            $quantity = $string_array[1];
                            echo '<option value=".$color.">'.$color.' ('.$quantity.' Available)</option>';
                          } ?>                            
                        </select>
                      </div>
                      
                    </div>
                    
                  </form>
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