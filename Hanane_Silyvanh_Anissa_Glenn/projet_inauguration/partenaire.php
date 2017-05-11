<!DOCTYPE html>
<html lang="fr">
  <head>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Nos Partenaires</title>
    <link rel="stylesheet" href="style/partenaire.css">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      <!--javascript pour caroussel partenaires-->
      <script>
      $(document).ready(function(){
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});
});
</script>
  </head>
  <body>
      <!-- lien php include pour header-->
    <? include('header.html'); ?>
    <div id="entetePartenaire">
        <h1 id="titrePartenaire">Nos Partenaires</h1>
        <h3 id="sousTitre">Visibilité, Proximité et Coproduction pédagogique</h3>

    </div>
      <br/><br/><br/>
    <!--IMAGES PARTENAIRES -->
    <div class="container">
    <div class="row">
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="Showroomprivé" href="http://www.showroomprive.com/"><img class="thumbnail img-responsive" src="images/showroom.jpg"></a></div>
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="Simplon" href="http://simplon.co/"><img class="thumbnail img-responsive" src="images/simplon.jpg"></a></div>
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="Blanchemaille" href="http://blanchemaille-euratechnologies.com/"><img class="thumbnail img-responsive" src="images/blanchemaille.jpg"></a></div>
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="Oney" href="https://www.oney.fr/"><img class="thumbnail img-responsive" src="images/oney.jpg"></a></div>
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="Plaine Images" href="http://www.plaine-images.fr/"><img class="thumbnail img-responsive" src="images/plaine.png"></a></div>
          <div class="col-lg-2 col-sm-3 col-xs-6"><a title="BlaBlaCar" href="https://www.blablacar.fr/"><img class="thumbnail img-responsive" src="images/blabla.png"></a></div>
    </div>
    </div>
    <div id="modeleSimplon">
      <h4>Simplon.co</h4>
      <p>Séduit par son modèle et sa promesse, un partenariat fort s'est créé entre notre formation et Simplon. Le parteneriat est fondé sur les méthodes de formation pédagogiques et innovantes, réadaptées aux métiers du e-commerce.</p>
    </div>
    <hr id="ligne">
    <div id="blanchemaille">
      <h4>Blanchemaille by Euratechnologies</h4>
      <p>Installé dans le berceau de la vente par correspondance à Roubaix, Blanchemaille est le lieu idéal pour l'implantation de la formation. Avec + de 2000m² de locaux, cet espace compte devenir un lieu de référence pour les acteurs du e-commerce. Incubateur, accélérateur, hôtel d'entreprises mais aussi un laboratoire de recherche marketing et maintenant l'école des métiers du e-commerce de Showroomprivé.</p>
    </div>
    <hr id="ligne2">
    <div id="relation">
      <h4>Une relation privilégiée avec nos entreprises</h4>
        <p>Derrière l'école des métiers du e-commerce de Showroomprivé se cache une idée forte : l'entreprise n'est pas seulement au cœur de l'économie du pays. L'un des enjeux des entreprises c'est également l'éducation.</p>
        <p><em>« L'éducation est essentielle pour leur [entreprises] avenir si elles souhaitent s'entourer de collaborateurs brillants et développer les territoires dans lesquelles elles sont implantées » Thierry Petit, Fondateur de Showroomprivé.</em><p/>
      <p>Nos partenaires sont étroitement associés à la production des contenus pédagogiques ainsi qu'à nos événements. Une manière pour la formation de mieux comprendre et cibler les besoins des entreprises et, pour ses partenaires, de s’inscrire comme des acteurs de référence sur les thématiques stratégiques.</p>
    <p>Régulièrement, des visites d'entreprises sont organisées chez nos partenaires mais aussi des modules de formation avec des professionnels de ces entreprises.</p>
    </div>
    <? include('footer.html'); ?>
  </body>
</html>
</body>
</html>
