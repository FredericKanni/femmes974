<?php include("includes/head.php"); ?>
<body>
<?php include("includes/entête.php"); ?>


<div class="container  ">
<div class="row  ">
                        <div class="col-md-12 "   style="background-color: rebeccapurple;">
                            <div class="col">
                                <!--   FORMULAIRE -->
                                <form name="contact" method="post" id="contact-form" data-toggle="validator" autocomplete="off" novalidate="true">

                                    <div class="form-group has-feedback mt-3">
                                        <input type="text" id="contact_nom" name="contact[nom]" required="required" class="form-control" style="height:50px;" placeholder="Entrer votre nom et/ou prénom *">

                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="email" id="contact_email" name="contact[email]" required="required" class="form-control" style="height:50px;" placeholder="Entrer votre adresse email *">

                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="text" id="contact_sujet" name="contact[sujet]" required="required" class="form-control" style="height:50px;" placeholder="Entrer votre sujet *">

                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <textarea id="contact_message" name="contact[message]" required="required" class="form-control" style="height:256px; padding: 13px 12px;" placeholder="Entrer votre message *"></textarea>

                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default disabled " style="width:100%; height:60px; background-color:#c93e9c">
                                            <span class="envoyer"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                ENVOYER</span>
                                            <span class="envoieEnCours" style="display:none"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Envoie en
                                                cours</span>
                                        </button>
                                        <p style="opacity:0.8; margin-top:10px; text-align:right">* Champs obligatoires
                                        </p>
                                    </div>

                                    <input type="hidden" id="contact__token" name="contact[_token]" value="SeKVlvHceuUUMOUIGaQIVrcV0Ayn_cJdoa2Kv1nfffQ">
                                </form>

                                <!--   FIN FORMULAIRE -->

                            </div>
                        </div>

                    </div>
                    </div>

                    <?php include("includes/bootstrap.php"); ?>
                    <?php include("includes/piedpage.php"); ?>

                    </body>