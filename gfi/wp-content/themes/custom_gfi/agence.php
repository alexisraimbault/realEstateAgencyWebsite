<?php
/**
Template name: agence
 */

get_header();
?>
<div class = "top_wrapper">
  <div class = "nav_bar_container">
    <div class = "logo" onClick="document.location.href='acceuil'"></div>
    <div class="menu">
      <div class = "menu__group"><a class="link" href="#">Agence</a></div>
      <div class = "menu__group"><a class="link" href="agence#contact">Contact</a></div>
      <div class = "menu__group"><a class="link" href="#">Estimation</a></div>
    </div>
    <div class="hamburger">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </div>
  <div class="mobile_menu">
    <div class = "mobile_menu__group"><a class="link" href="agence">Agence</a></div>
    <div class = "mobile_menu__group"><a class="link" href="#">Contact</a></div>
    <div class = "mobile_menu__group"><a class="link" href="#">Estimation</a></div>
  </div>
</div>
<div class = "bg_images container" id = "index">
  <div class = "gestion_page_container">
    <diV class = "gestion_page_flex_container">
      <div class = "gestion_pad">
        <div class = "gestion_pad_1_image"></div>
        <div class = "gestion_pad_content">
          <div class = "gestion_pad_subtitle">AGENCE IMMOBILIÈRE MONTREUIL : GFI CONSEIL</div>
          <div class = "gestion_pad_line"></div>
          <div class = "gestion_pad_text">
            L'équipe de l'agence GFI Conseil vous accueille au cœur de Montreuil et vous accompagne dans votre projet immobilier sur Montreuil, la Croix de Chavaux, Bagnolet et tout l'Est parisien. Notre agence s'attache, depuis sa création il y a plus de 30 ans, à répondre aux attentes de ses clients en privilégiant avant tout l'écoute.
          </div>
          <div class = "gestion_pad_text">
          Elle a bâti son succès sur l'expérience et le savoir-faire des membres de son équipe mais surtout sur ses aptitudes à cerner les besoins des personnes qui ont choisi de pousser sa porte.
          </div>
        </div>
      </div>

      <div class = "gestion_pad2">
        <div class = "gestion_pad_1_image"></div>
        <div class = "gestion_pad_content">
          <div class = "gestion_pad_subtitle">QUI SOMMES-NOUS</div>
          <div class = "gestion_pad_line"></div>
          <div class = "gestion_pad_text">
            DEPUIS 35 ANS, notre agence, GFI CONSEIL gère, loue et vend tous les types de biens immobiliers à Montreuil et ses environs.
          </div>
          <div class = "gestion_pad_text">
          Nous sommes installés dans un immeuble indépendant sur trois niveaux, au 36, rue de Paris, à l’angle de la place du Marché et au pied de la Station de Métro « Croix de Chavaux ».
          </div>
        </div>
      </div>
      <div class = "gestion_pad">
        <div class = "gestion_pad_1_image"></div>
        <div class = "gestion_pad_content">
          <div class = "gestion_pad_subtitle">NOS SERVICES</div>
          <div class = "gestion_pad_line"></div>
          <div class = "gestion_pad_text">
            NOTRE SERVICE TRANSACTION est composé d’une équipe de 4 personnes spécialisées dans la vente de biens à usage d’habitation. Avec une connaissance pointue du marché local. Pour mieux servir nos clients, ce service est doté d’un service de HOME STAGING interne avec une personne dédiée.
          </div>
          <div class = "gestion_pad_text">
            NOTRE SERVICE GESTION DE PATRIMOINE est composé de 7 personnes qui gèrent et louent le portefeuille de biens immobiliers composé d’appartements, de maisons, de locaux commerciaux, de locaux industriels et de bureaux.
          </div>
          <div class = "gestion_pad_text">
            NOTRE SERVICE IMMOBILIER D'ENTREPRISE est une particularité historique de GFI CONSEIL. Nous louons et vendons des bureaux, des entrepôts, des lofts, des ateliers, des droits au bail et des commerces.
          </div>
          <div class = "gestion_pad_text">
            NOTRE SERVICE PROMOTION IMMOBILIÉRE ET MARCHANDS DE BIEN
            Nos deux spécialistes dédiés sont en charge de cette activité.
          </div>
          <div class = "gestion_pad_text">
            L'accueil de l'agence : qu’il soit physique ou téléphonique c’est le poste le plus sensible car c’est votre premier contact avec nous.
            Expérimentée et professionnelle, Hélène GREETHAM vous reçoit, répond à vos questions et vous oriente dans vos démarches.
          </div>
        </div>
      </div>

      <div class = "gestion_pad2">
        <div class = "gestion_pad_2_image"></div>
        <div class = "gestion_pad_content">
          <div class = "gestion_pad_subtitle">NOS COORDONNÉES</div>
          <div class = "gestion_pad_line"></div>
          <div class = "gestion_pad_text">
            GFI CONSEIL
          </div>
          <div class = "gestion_pad_text">
            36 rue de Paris BP 137
          </div>
          <div class = "gestion_pad_text">
            93100 Montreuil
          </div>
          <div class = "gestion_pad_text">
            0148598484
          </div>
        </div>
      </div>
      <div class = "gestion_pad">
        <div class = "gestion_pad_2_image"></div>
        <div class = "gestion_pad_content">
          <div class = "gestion_pad_subtitle" id = "contact">NOUS CONTACTER</div>
          <div class = "gestion_pad_line"></div>
          <?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email

  $nombreErreur = 0; // Variable qui compte le nombre d'erreur

  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }

  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }

  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    // Variables concernant l'email
    $destinataire = '27raimbault.alexis@gmail.com'; // Adresse email du webmaster
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez recu un message depuis partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

    echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    echo '</div>';
  }
}
?>

  <form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
    <p>Votre nom et prénom: <input type="text" name="nom" size="30" /></p>
    <p>Votre email: <span style="color:#ff0000;">*</span>: <input type="text" name="email" size="30" /></p>
    <p>Message <span style="color:#ff0000;">*</span>:</p>
    <textarea name="message" cols="60" rows="5">Bonjour, je souhaite être recontacté par un négociateur immobilier. Merci.</textarea>
    <p><input type="submit" name="submit" value="Envoyer" /></p>
  </form>
        </div>
      </div>
  </div>
</div>
<?php
get_footer();
?>
