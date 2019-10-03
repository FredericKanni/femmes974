<!DOCTYPE html>
<html>

<?php include("includes/head.php"); ?>

<body>

    <?php include("includes/navbar.php"); ?>
    <?php include("includes/entête.php"); ?>

    <?php include("menu.php"); ?>

    <!-- Le corps -->


    <div class="container text-center" style="margin-top:50px;">
        <h1>Les témoignages </h1>

        <p>
            <a class="btn btn-outline-secondary fondBouton" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Témoignage 1</a>
            <button class="btn btn-outline-secondary fondBouton" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Témoignage 2</button>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("includes/bootstrap.php"); ?>
    <?php include("includes/piedpage.php"); ?>

</body>

</html>