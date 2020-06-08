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


                                <div class="starter-template">

                                    <?php if(array_key_exists('errors', $_SESSION)): ?>
                                        <div class="alert-danger">
                                            <?= implode('<br>', $_SESSION['errors']); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(array_key_exists('success', $_SESSION)): ?>
                                        <div class="alert-success">
                                            Votre email a bien été envoyé
                                        </div>
                                    <?php endif; ?>


                                    <form action="post_contact.php" method="POST">
                                        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>

                                        

                                            <div class="row space-between">
                                                <div class="col-6">
                                                    <?= $form->text('name', 'Votre Nom'); ?>
                                                </div>
                                                <div class="col-6">
                                                    <?= $form->email('email', 'Votre Email'); ?>
                                                </div>
                                                <div class="col-4 select">
                                                    <?= $form->select('service', 'Service', ['Contact', 'Dépanage', 'Heimerdinger']); ?>
                                                </div>
                                                <div class="col-12">
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


