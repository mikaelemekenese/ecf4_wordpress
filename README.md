<h1>ECF 4 - Le Pays</h1>
<br>
Pour cet ECF, nous avons été tenus de réaliser un site pour le journal Le Pays.
<br><br>
Aperçu du site déployé : <a href="http://mikaele.devweb.cfa.nc/">mikaele.devweb.cfa.nc</a>
<br><br>
<h2>Cahier des Charges - Besoins fonctionnels</h2>
<br>
Le commanditaire, Monsieur Do, le propriétaire du journal Le Pays, a exprimé les besoins suivants :


*La **création d'un site internet** :  Ce dernier devra être aussi "agréable" visuellement et à la lecture que la version papier.
* La première page du site devra mettre en avant les derniers *articles*. On y mettra les 5 ou 10 derniers chronologiquement du plus récent au plus ancien. Les articles devront être *facilement visibles et consultables* par les utilisateurs.
* Les utilisateurs auront la possibilité de voir les **évènements culturels et sportifs à venir** dans une barre latérale à droite de la page.
* Comme sur le journal papier, la première page du site comportera une **une** (bien visible, en grand).
* Enfin, le site se devra d'être **responsive**, optimisé pour les écrans mobiles.
<br>

<h2>Tâches réalisées</h2>
<br>
1. Elaboration du cahier des charges qui détaille les besoins fonctionnels du client<br>
2. Conception des maquettes (wireframes) à l'aide du logiciel Pencil<br>
3. Création du template du CMS sur Visual Studio Code et la page admin de Wordpress :<br><br>
    * Création des fichiers qui composeront chaque partie de votre template : front-page.php (accueil), single.php (articles), archive.php (catégories), header.php et footer.php pour le header et le bas de page<br>
    * Sur le fichier functions.php, on y détaille toutes les fonctionnalités que l'on veut faire apparaître sur le site (menu, sidebar) et ce que l'on souhaite configurer sur le site (ex : on veut afficher un extrait d'un article sur la page au lieu de tout le contenu)<br>
    * Création du menu et ajout des widgets à mettre dans la sitebar directement sur Wordpress<br>
    * Mise en forme du site (mise en page ainsi que le rendu mobile) depuis le fichier style.css<br><br>
4. Installation du template<br>
5. Pour sécuriser mon Wordpress :<br><br>
    * J'ai changé le préfixe de table dans le fichier wp-config<br>
    * J'ai installé le plugin WPS Hide Login pour masquer la zone de connexion à la page administrateur<br>
    * J'ai ajouté des fonctions permettant de cacher la version de Wordpress ainsi que les erreurs de connexion<br><br>
6. Déploiement sur un serveur en ligne
<br>

<h2>Choix des technologies</h2>
<br>
Langages utilisés : HTML, CSS et PHP (Wordpress)
<br><br>
Pour les choix des technologies utilisées, j'ai opté pour du CSS Bootstrap pour séparer les articles et la sidebar sur deux colonnes sur la page d'accueil (front-page.php) et celle des articles (single.php) ainsi le système de grid pour le placement des articles sur la page d'accueil, la mise en forme de la page des catégories (archive.php) et celle des articles.
<br><br>
Je me suis inspiré du site des Nouvelles Calédoniennes pour la charte graphique et l'agencement des articles.

<br><br>

<h2>Manuel d'installation</h2>
<br>
Pour installer le template sur votre machine, il vous faudra :<br>
    * Télécharger les fichiers du thème (ils sont tous regroupés dans le dossier mikaele-cms-template.zip)<br>
    * Sur la page administrateur (votresite/wp-admin par défaut) de votre site Wordpress : allez sur Apparence > Thèmes > Ajouter > Téléverser un thème et enfin, activez-le.
<br><br>
Vous aurez besoin de quatre plugins Wordpress :
<br>
    * FakerPress : Pour générer les faux articles sur votre site<br>
    * The Events Calendar : Pour la création des faux évènements à faire apparaître dans la sidebar<br>
    * Wordpress Popular Posts : Pour faire apparaître les articles les plus consultés du site<br>
    * Mobile Menu : Que j'ai utilisé pour créer le menu hamburger de l'interface mobile du site
<br><br>
A noter que vous devez également recréer votre menu et remettre les éléments que vous souhaitez mettre en évidence dans la sidebar directement depuis votre page administrateur dans la section Apparence > Widgets.
