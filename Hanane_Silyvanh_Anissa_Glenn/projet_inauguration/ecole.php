<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style/ecole.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/15a1ea4238.js"></script>
    <script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
    <title>Ecole showroomprivé</title>
  </head>
  <body>
    <?php include('header.html'); ?>
    <br/><br/><br/>
    <div id="main">
        <div id="content">
            <section>
                <div class="container">
                    <h1>L'Ecole des métiers du e-commerce de Showroomprivé</h1>
                    <p><br/>« Comment et à quoi préparer les jeunes générations et celles à venir dans nos sociétés numériques ? »<br/>
    <br/>L'école Showroomprivé est naît de cette volonté d'apporter les réponses à cette question. Aujourd'hui, le numérique est au cœur de l'économie. De nouveaux métiers font leur apparition et les entreprises ont de plus en plus de mal à recruter.
    C'est pourquoi Showroomprivé a lancé sa formation aux métiers du e-commerce. L'idée est de former des « couteaux-suisses » du e-commerce. Il s'agit pour nos apprenants d'avoir une vision globale du e-commerce, des notions dans divers domaines de compétences allant de la maîtrise technique à l'élaboration d'une stratégie marketing.
    Aucune qualification préalable n'était demandée à nos apprenants. Notre principal critère de sélection : la motivation.</p>
                </div>
            </section>
          </div>
    </div><!-- #main -->

    <div id="main">
        <div id="content">
            <section>
                <div class="container">
                    <h1>Valeurs et méthode Simplon</h1>
                    <p>Séduit par son modèle pédagogique et sa réussite, c'est en partenariat avec Simplon.co que Showroomprivé a décidé de lancer sa formation. Cette méthode pédagogique s'affranchit de la méthode scolaire traditionnelle. Il s'agit de pousser l'apprenant sur le chemin de la découverte, et de l'auto-apprentissage tout en lui donnant les outils clés. C'est l'idée du « self made men ». Nous poussons également à la créativité, à l'agilité et au travail d'équipe. Aujourd'hui, ces qualités sont essentielles pour intégrer le monde de l'entreprise.
    </p>


                </div>
            </section>


        </div>
    </div><!-- #main -->
    <div id="main">
        <div id="content">
            <section>
                <div class="container">
                    <h1>Contenus pédagogique</h1>
                    <p>Le programme de formation est intense car toutes les notions du e-commerce sont abordées :
                      <br/><center>La production technique
                        <center>La logistique, la relation client, SAV</center>
                        <center>La communication</center>
                        <center>L'acquisition client.</center>
    <br/>Afin de former au mieux nos apprenants, régulièrement des professionnels de chaque corps de métier viennent compléter nos modules de formation. Des ateliers collectifs sont aussi organisés afin de préparer au mieux nos apprenants à leur intégration sur le marché du travail.
    Toutes ces notions permettront d'avoir les clés et de guider nos apprenants à finaliser leur leading-project : la création d'un site e-commerce de A à Z basée sur les kits partenaires(Camaïeu, Fibr&Co, Avril, IRL by Showroomprivé).
    </p>


                </div>
            </section>


        </div>
    </div><!-- #main -->
  <?php include('footer.html'); ?>
  </body>
</html>
