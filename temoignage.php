<!DOCTYPE html>
<html>

<?php include("includes/head.php"); ?>

<body>

    <?php include("includes/entête.php"); ?>


    <!-- Le corps -->


    <div class="container text-center" style="margin-top:50px;">
        <h1 data-toggle="collapse" data-target=".multi-collapse">Les témoignages </h1>

        <div>
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
        <div class="tem">
            <p>
                <a class="btn btn-outline-secondary fondBouton" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Témoignage 3</a>
                <button class="btn btn-outline-secondary fondBouton" type="button" data-toggle="collapse" data-target="#multiCollapse2" aria-expanded="false" aria-controls="multiCollapseExample2">Témoignage 4</button>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapse1">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
                </div class="tem">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapse2">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("includes/bootstrap.php"); ?>
    <?php include("includes/piedpage.php"); ?>

</body>

</html>