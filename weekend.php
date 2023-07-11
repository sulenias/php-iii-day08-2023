
<?php 
    
    include_once('include/header.php');
    require_once('conn.php');

 ?>


    <!-- CONTENT START -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-primary" role="alert">


                        <div class="row p-5">
                            <?php foreach($weekends as $weekend) : ?>

                            <div class="col-md-4 m-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $weekend['topik'] ?></h5>
                                        <p class="card-text"><?= $weekend['tanggal'] ?></p>
                                        <p class="card-text"><?= $weekend['jam'] ?></p>
                                        <p class="card-text"><?= $weekend['narasumber'] ?></p>
                                        <p class="card-text"><?= $weekend['perkerjaan'] ?></p>
                                        <a href="#" class="btn btn-primary">Go Somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach ?>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT END -->

