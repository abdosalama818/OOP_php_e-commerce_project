<?php 

require_once('header.php')


?>

<?php

$cat = new Cats;
$cats = $cat->selectAll();

?>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Add Product</h3>
                <div class="card">
                    <div class="card-body p-5">


                    <?php 
					
						
                    if($session->hasSet('errors')) :?>
                        <div class="alert alert-danger">
                        <?php foreach($session->get('errors') as $error):
                        ?>

                        <p><?=$error ?></p>
                        <?php endforeach ; $session->remove('errors');?>
                    </div>
                        <?php endif ;?></php>
                        <form method="POST" action="handelers/handele-add.php" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="cat_id">
                                <option>Select Category</option>
                                <?php 
                                      
                                        foreach($cats as $cat) : ;
                                                
                                        ?>
                                  <option value="<?=$cat['id']?>"><?=$cat['name']?></option>
                            
                                  <?php endforeach ?>
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Pieces</label>
                                <input type="number" name="pieces" class="form-control">
                            </div>
  
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="desc" rows="3"></textarea>
                            </div>
                            
                            <div class="custom-file">
                                <input type="file"  name="img" class="custom-file-input" id="customFile">
                                <label class="custom-file-label"  for="customFile">Choose Image</label>
                            </div>
                              
                            <div class="text-center mt-5">
                                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="#">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php 

require_once('footer.php')


?>