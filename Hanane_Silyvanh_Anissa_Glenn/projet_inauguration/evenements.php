<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Evénements</title>
    <link rel="stylesheet" href="style/evenements.css">
    <script>$(document).ready(function(){
	var my_posts = $("[rel=tooltip]");

	var size = $(window).width();
	for(i=0;i<my_posts.length;i++){
		the_post = $(my_posts[i]);

		if(the_post.hasClass('invert') && size >=767 ){
			the_post.tooltip({ placement: 'left'});
			the_post.css("cursor","pointer");
		}else{
			the_post.tooltip({ placement: 'rigth'});
			the_post.css("cursor","pointer");
		}
	}
});</script>
  </head>
  <body>
    <? include('header.html'); ?>
    <div class="container">
      <div class="page-header text-center">
          <h1 id="timeline"style="color: #F71073;">Nos Evénements et rencontres</h1>
      </div>
      <ul class="timeline">
          <li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="9 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <img class="img-responsive" src="images/showroom.jpg" />

              </div>
              <div class="timeline-body">
                <p>Nous avons été accueilli dans les nouveaux locaux de Showroomprivé Roubaix. On y retrouve les différents pôles de la production des ventes. De la réception des échantillons à la rédaction des fiches produits en passant par le shooting photo : nous avons pu découvrir le circuit d'un produit arrivant chez Showroomprivé Roubaix de A à Z. Ce fut également l'occasion d'échanger avec le responsable du studio photo ainsi que la responsable échantillon.</p>

              </div>

              <div class="timeline-footer">
                  <p>Visite de Showroomprivé Roubaix</p>
              </div>
            </div>
          </li>

          <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="9 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <img class="img-responsive" src="images/laredoute.jpg" />

              </div>
              <div class="timeline-body">
                <p>Une vidéo retraçant l'histoire de La Redoute ainsi que de ses évolutions nous a été proposé par Camille Caron, chargée de démarche RSE accompagnée de Véronique Tanghe, responsable recrutement du groupe. Cette entreprise, native de Roubaix, n'a cessé d'évoluer avec le temps. Aujourd'hui, sa stratégie numérique est forte. Lors de cet échange, on comprend que chez La Redoute, les opportunités dans le digital sont nombreuses.</p>

              </div>

              <div class="timeline-footer">
                  <p>Visite des locaux La redoute</p>
              </div>
            </div>
          </li>
          <li >
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="9 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <img class="img-responsive" src="images/plaine.png" />

              </div>
              <div class="timeline-body">
                <p>C'est Mélanie Hanscotte, secrétaire générale qui nous a accueilli dans ce site d'excellence images numériques et industries créatives. Ce site économique dédié à l'image accueille un espace de co-working, un accélérateur, un incubateur ainsi qu'un hôtel d'entreprises. Nous avons également eu l'occasion de rencontrer Olivier Cornil, jeune créateur d'une start-up en incubation. L'occasion pour lui de nous donner quelques conseils et astuces pour la création d'un site internet ou encore le lancement d'une start-up.</p>

              </div>

              <div class="timeline-footer">
                  <p>Visite de Plaine Images</p>
              </div>
            </div>
          </li>

          <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="16 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-body">
                <img class="img-responsive" src="images/showroom.jpg" />
                <p>Après une présentation du groupe, du modèle économique ainsi que de la stratégie commerciale, nous avons pu visiter les différents espaces de travail de l'entreprise. A cette occasion, David Dayan, fondateur de showroomprivé est également venu à notre rencontre. L'occasion pour nous d'échanger avec lui sur l'évolution de l'entreprise et les enjeux actuels. Nous avons également pu rencontrer des collaborateurs de différents corps de métiers : infographiste, chargé des ventes, web-designer, community manager...</p>

              </div>

              <div class="timeline-footer">
                  <p>Visite de Showroomprivé Paris</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="16 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <img class="img-responsive" src="images/visiteblabla.jpg" />

              </div>
              <div class="timeline-body">
                <p>C'est dans les nouveaux locaux parisiens de Blablacar que l'on a pu rencontrer Laure Wagner, chargée de communication. Une ambiance à la start-up californienne. Laure est aussi la première salariée de l'entreprise qui fut recrutée. Moment privilégié d'échange sur son parcours professionnel mais aussi sur le développement de l'entreprise. Le modèle économique, la stratégie marketing, les objectifs ; divers thèmes ont été abordés lors de cet échange de questions/réponses.</p>

              </div>

              <div class="timeline-footer">
                  <p>Dans les locaux de Blablacar</p>
              </div>
            </div>
          </li>

          <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="24 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <img class="img-responsive" src="images/oney.jpg" />

              </div>
              <div class="timeline-body">
                <p>Deux collaborateurs de chez Oney se sont déplacés chez nous afin de partager leurs domaines de compétences. Ainsi, Caroline Babilotte nous a dévoilé ses secrets pour bien gérer son budget, que ce soit à titre personnel ou professionnel. C'est ensuite Pierre Luc Ravet, responsable moyens de paiement qui nous a présenté un module complet sur les solutions de paiements. Deux modules interactifs qui nous ont permis d'assimiler des notions clés du e-commerce.</p>

              </div>

              <div class="timeline-footer primary">
                  <p>Rencontre avec des collaborateurs Oney</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="31 mars 2017" id=""></i></a></div>
            <div class="timeline-panel">
              <div class="timeline-body">
                <p><b>Inauguration de l'école Showroomprivé, école des métiers du e-commerce le 31 mars 2017</b></p>
                <p>Thierry Petit, fondateur de Showroomprivé, accompagné d'élus et de nombreux chefs d'entreprises seront présents.</p>
              </div>

              <div class="timeline-footer primary">
                  <p>A venir...</p>
              </div>
            </div>
          </li>

          <li class="clearfix" style="float: none;"></li>
      </ul>
  </div>
  <? include('footer.html'); ?>
</body>
</html>
