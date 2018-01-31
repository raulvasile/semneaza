<?php
require 'functions.php';

$data = get_data();
?><!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strângem semnături pentru ca Uniunea Salvați România (USR) să candideze la alegerile parlamentare din 11 decembrie 2016. Ne vei găsi pe buletinul de vot doar dacă semnezi pentru noi!">
    <meta name="author" content="USR">
    <meta property="og:url" content="https://semneaza.usr.ro/">
    <meta property="og:title" content="Începe curățenia Parlamentului cu o semnătură!">
    <meta property="og:description" content="Strângem semnături pentru ca Uniunea Salvați România (USR) să candideze la alegerile parlamentare din 11 decembrie 2016. Ne vei găsi pe buletinul de vot doar dacă semnezi pentru noi!">
    <meta property="og:image" content="https://semneaza.usr.ro/assets/app/img/semneaza.jpg">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.ico" rel="icon">
    <title>USR &middot; Începe curățenia Parlamentului cu o semnătură!</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/vendor/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <link href="assets/app/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron jumbotron-primary">
      <div class="container">
        <div class="media media-brand">
          <div class="media-left">
            <a href="https://semneaza.usr.ro/">
              <img class="media-object" src="assets/app/img/logo.png" alt="USR">
            </a>
          </div>
          <div class="media-body">
            <h1>Începe curățenia Parlamentului cu o semnătură!</h1>
          </div>
          <div class="media-right">
            <a class="btn btn-inverted" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">Donează</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="maps">
              <div class="map map-ro">
                <div class="label">Click pentru situația pe regiuni</div>
                <div class="embed-responsive embed-responsive-4by3">
                  <div id="map-ro"></div>
                </div>
                <div class="label">În țară</div>
              </div>
              <div class="map map-diaspora">
                <div id="map-diaspora"></div>
                <div class="label">În diaspora</div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="panel panel-default">
              <form id="date-contact" method="post" action="date-contact.php">
                <div class="panel-body">
                  <p>
                    Campania de strangere de semnaturi va incepe dupa ce initiativa va fi aprobata de Consiliul Legislativ.
                    Introduceti datele dumneavoastra de contact in formularul de mai jos si veti fi contactat/a cand procesul de strangere de semnaturi va incepe.
                  </p>
                  <div>
                    <input type="text" name="nume" placeholder="Numele dumneavoastra">
                  </div>
                  <div>
                    <input type="text" name="telefon" placeholder="Telefonul dumneavoastra">
                  </div>
                  <div>
                    <input type="text" name="email" placeholder="Emailul dumneavoastra">
                  </div>
                </div>
                <div class="panel-footer">
                  <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'trimite_date_contact')">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    Trimite
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="statistics">
	    <div class="statistic statistic-primary">
              <div class="value" id="countdown-months">00</div>
              <div class="label">Luni</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-primary">
              <div class="value" id="countdown-days">00</div>
              <div class="label">Zile</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-hours">00</div>
              <div class="label">Ore</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-minutes">00</div>
              <div class="label">Minute</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-seconds">00</div>
              <div class="label">Secunde</div>
            </div>
          </div>
          <div id="progres-semnaturi"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <ul class="media-list">
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-semneaza.png" alt="Semnează">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Semnează</h3>
                <p>Imprimă formularul folosind butonul de mai sus şi completează-l conform instrucțiunilor, folosind date din cartea ta de identitate. La final semnează formularul, doar aşa este considerată validă intrarea.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-spune-prietenilor.png" alt="Spune-le prietenilor">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Spune-le familiei și prietenilor!</h3>
                <p>Ne trebuie cât mai multe semnături, aşa că te rugăm să vorbeşti cu prietenii, familia şi vecinii tăi să completeze şi ei formularul. Semnăturile lor trebuie să fie originale; nu semnaţi în locul altei persoane.</p>
                <p>
                  <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=https://semneaza.usr.ro/" target="_blank">
                    <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
                    Distribuie
                  </a>
                </p>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-trimite.png" alt="Trimite">
              </div>
              <div class="media-body text-left">
                <h3 class="media-heading">Trimite</h3>
                <p>Formularele completate trebuie să ajungă în posesia noastră <strong>până pe 20 octombrie </strong> (ghidul pentru <a href="http://usb.ro/wp-content/uploads/2016/10/Ghid-strangere-semnaturi-diaspora.pdf" target="_blank">diaspora aici</a>). Poţi face asta în două feluri:</p>
                <ul class="list list-checkbox">
                  <li class="checked">
                   Adu personal petiția la unul din corturile de campanie ale USR (<a href="#corturi" data-toggle="modal" role="button">vezi locațiile noastre</a>) sau contactează un reprezentat al USR din țară pentru a le prelua (<a href="#contact" data-toggle="modal" role="button">vezi persoanele de contact</a>).
                  </li>
                  <li class="checked">
                    Trimite GRATUIT formularul/formularele în original prin Poșta Română, serviciul de corespondenţă cu taxe preplătite (<a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="auto" data-html="true" data-content="&lt;p&gt;Atunci când sigilati plicul poştal, pe partea unde aţi trecut ca destinatar sediul central al USR, puneţi în dreapta sus o mică etichetă (un sticker sau o foaie mică printată şi lipită) cu:&lt;/p&gt;&lt;div class=&quot;tag&quot;&gt;&lt;div class=&quot;value&quot;&gt;CR&lt;/div&gt; Taxe poștale preplătite&lt;/div&gt;">vezi detalii</a>) la sediul central al USR (<strong>Str. Carol Davila, Nr. 91, Parter, Ap. 1, Sector 5, 050453, București</strong>), sau adu-le personal în intervalul 10-20.
                  </li>
                </ul>
                <p>Atenție:</p>
                <ul class="list list-bulleted">
                  <li>Listele de semnături nu pot fi trimise prin poșta electronică;</li>
                  <li>Nu trimiteți copii ale listelor de semnături.</li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-body">
              <div class="media">
                <div class="media-body">
                  <p><strong>Fiecare semnătură este o investiție într-un viitor mai bun pentru această țară și o speranță că și oamenii buni pot ajunge în Parlament.</strong></p>
                  <p>Mulțumim!</p>
                </div>
                <div class="media-right media-middle">
                  <a class="btn btn-default" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    Donează acum
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="follow-us">
            <p class="text-muted">Urmărește-ne și pe:</p>
            <ul class="list-inline">
              <li>
                <a class="facebook" href="https://www.facebook.com/Uniunea-Salva%C8%9Bi-Rom%C3%A2nia-1058116737612843/" target="_blank">
                  <img src="assets/app/img/logo-facebook.png" alt="Facebook">
                  Facebook
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="social-media">
      <a class="facebook" href="https://www.facebook.com/sharer.php?u=https://semneaza.usr.ro/" target="_blank">
        <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
    </div>
<?php
function modal_locatii($id, $title, $data_modal) {
  global $data;
?>
  <div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>-label">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="<?= $id ?>-label"><?= $title ?></h4>
        </div>
        <div class="modal-body">
          <div class="row row-three-columns">
            <?php foreach ($data_modal as $judet => $locatii) { ?>
              <div class="col-sm-6 col-md-4">
                <h4><?= $data['numeJudet'][$judet] ?></h4>
                <?php foreach ($locatii as $locatie) { ?>
                  <dl>
                    <dt><?= $locatie['locatie'] ?></dt>
                    <dd>
                      <ul class="list-unstyled">
                        <?php foreach ($locatie['intrari'] as $intrare) { ?>
                          <li><?= $intrare ?>
                        <?php } ?>
                      </ul>
                    </dd>
                  </dl>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Închide</button>
        </div>
      </div>
    </div>
  </div>
<?php
}

modal_locatii('contact', 'Persoane de contact', $data['contacte']);
modal_locatii('corturi', 'Corturile de campanie ale USR', $data['corturi']);
?>
    <script><?php printf('remoteData = %s;', json_encode($data)); ?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/countdown/countdown.js"></script>
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendor/jquery-form/jquery.form.js"></script>
    <script src="assets/app/js/application.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30235099-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
