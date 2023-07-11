
<!-- HEADER -->
<?php
include_once('include/header.php');
require_once('conn.php');
?>




     <!-- CONTENT START -->
    <section class="mb-5" >
        <div class="container mt-5">
            <div class="row">

                <div class="col-12 text-center">

                    <div class="alert alert-primary" role="alert">

                        <div class="row">
                            <div class="col-12 p-3">
                                <h1>Data SaCode Weekend's</h1>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            
            <div class="row p-5">
             <?php foreach($weekends as $weekend) : ?>

                <div class="col-md-4 m-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $weekend['foto']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $weekend['topik']?> </h5>
                            <p class="card-text"> <?= $weekend['tanggal']?> </p>
                            <p class="card-text"> <?= $weekend['jam']?> </p>
                            <p class="card-text"> <?= $weekend['narasumber']?> </p>
                            <p class="card-text"> <?= $weekend['pekerjaan']?> </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

             <?php endforeach ?>


            </div>

        </div>
    </section>

    <!-- CONTENT END -->

<!-- Footer -->
<?php
include_once('include/footer.php');
?>

