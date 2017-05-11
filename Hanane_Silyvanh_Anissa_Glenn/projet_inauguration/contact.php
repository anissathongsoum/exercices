<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/contact.css">
  <script src="https://use.fontawesome.com/15a1ea4238.js"></script>
  <title>Contact</title>
</head>
<body>
  <?php include('header.html'); ?>
  <div class="contact-us">
    <div class="container">
      <div class="contact-form">
        <h3 class="pink_srp">Contact</h3>
        <p>Entreprises, futurs apprenants ou simplement petits curieux... <br>
          Vous souhaitez avoir des informations ?<br> N'hésitez pas à nous envoyer vos demandes !</p>
          <div class="row">
            <div class="col-sm-7">
              <form id="ajax-contact"  method="post" action="contact-form-mail.php" role="form">
                <div class="messages" id="form-messages"></div>
                <div class="controls">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_name" class="pink_srp">Prénom*</label>
                        <input id="form_name" type="text" name="prénom" class="form-control" placeholder="Votre prénom" required="required" data-error="Votre prénom est requis.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_lastname" class="pink_srp">Nom*</label>
                        <input id="form_lastname" type="text" name="nom" class="form-control" placeholder="Votre nom" required="required" data-error="Votre nom est requis.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_email" class="pink_srp">Email*</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Votre email" required="required" data-error="Une adresse valide est requise.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_phone" class="pink_srp">Téléphone*</label>
                        <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Votre numéro de téléphone" required oninvalid="setCustomValidity('Plz enter your correct phone number ')"
                        onchange="try{setCustomValidity('')}catch(e){}">

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="form_message" class="pink_srp">Message*</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" rows="4" required="required" data-error="Veuillez écrire votre message."></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input type="submit" class="btn btn-black" value="Envoyer">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <small class="text-muted"><strong>*</strong>Ces champs sont obligatoire.</small>
                    </div>
                  </div>
                </div>

              </form>

            </div>
            <div class="col-sm-5">
              <div class="row col1">
                <div class="col-xs-3">
                  <i class="fa fa-map-marker" style="font-size:16px;"></i>   Adresse
                </div>
                <div class="col-xs-9">
                  <b class="pink_srp">FONDATION SHOWROOMPRIVE</b><br>
                  BLANCHEMAILLE by Euratech<br>
                  87 rue du Fontenoy<br>
                  59100 Roubaix
                </div>
              </div>

              <div class="row col1">
                <div class="col-sm-3">
                  <i class="fa fa-phone"></i>   Phone
                </div>
                <div class="col-sm-9">
                  +(33) 123 456 789
                </div>
              </div>
              <br /><br />
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.186563864406!2d3.1666302157403523!3d50.69792237951021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328e83b7a7b37%3A0x6cd89cc50fad6aaa!2s87+Rue+du+Fontenoy%2C+59100+Roubaix!5e0!3m2!1sfr!2sfr!4v1490792262463" width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0"></iframe>               </div>
            </div>

          </div>
        </div>
      </div>
      <?php include('footer.html'); ?>
    </body>
    </html>
