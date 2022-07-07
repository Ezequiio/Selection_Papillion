<?php include "../include/head.php"; ?>

<body class="bodycontact">
<?php include "../include/header.php"; ?>

    <div class="background_color">
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2 class="title_contact">Nous Contactez</h2>
        </div>
        <form  class="contact-form" id="contact-form" method="post" action="" role="form">
            <div class="row">
                <div class="col-lg-6">
                    <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email <span class="blue">*</span></label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" value="">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="">
                    <p class="comments"></p>
                </div>
                <div>
                    <label for="message" class="form-label">Message <span class="blue">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                    <p class="comments"></p>
                </div>
                <div>
                    <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                </div>
                <div>
                    <input type="submit" class="button1" value="Envoyer">
                </div>    
            </div>
        </form>
    </div>
    </div>
    <div class="backgroundcolor2"></div>


</body>

<?php include "../include/footer.php"; ?>

