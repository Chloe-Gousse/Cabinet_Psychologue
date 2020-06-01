<!--Formulaire-->
<section class="contact section" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="section-title padd-15">
                                <h2>Contact</h2>
                            </div>
                        </div>

                        <div class="row">

                            <div class="contact-form">

                                <?php if(array_key_exists('errors', $_SESSION)): ?>
                                    <div class="alert alert-danger">
                                        <?= implode('<br>', $_SESSION['errors']); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(array_key_exists('success', $_SESSION)): ?>
                                    <div class="alert alert-success">
                                        Votre email a bien été envoyé
                                    </div>
                                <?php endif; ?>


                                <form action="post_contact.php" method="POST">
                                    <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <?= $form->text('name', 'Votre Nom'); ?>
                                        </div>
                                        <div class="col-xs-6">
                                            <?= $form->email('email', 'Votre Email'); ?>
                                        </div>

                                        <div class="col-xs-12">
                                            <?= $form->subject('subject', 'Votre Sujet'); ?>
                                        </div>
                                        
                                        <div class="col-xs-12">
                                            <?= $form->textarea('message', 'Votre message'); ?>
                                            <?= $form->submit('Envoyer'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>
                <!--Fin Formulaire-->


</div>
    </main>
    <!--Main Content-->
</div>
<!--Main Container-->

<script src="../js/script.js"></script>
    
</body>
</html>