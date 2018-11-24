<p>Bonjour <?php echo htmlspecialchars($_POST["prenom"]); ?> !</p>

<p>Ton email : <?php echo htmlspecialchars($_POST["email"]); ?>

<p><a href="index.php">clique ici</a> pour revenir au cv</p>

<p>Ton message : <?php echo htmlspecialchars($_POST['message']); ?></p>

<?php
//creation de variable qui recupere le contenu du formulaire//
$message = $_POST["message"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$contenu = "ton message: ".$message."\nton nom: ".$nom."\nton prenom: ".$prenom;
$mail_entete  = "MIME-Version: 1.0\r\n";
$mail_entete .= "From: {$_POST['nom']} "
             ."<{$_POST['email']}>\r\n";
$mail_entete .= 'Reply-To: '.$_POST['email']."\r\n";
$mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

//fonction qui envoi le mail ('mail destinataire', 'sujet', 'contenu du mail', 'header')//////

if(isset($_POST['message'])){
    $position_arobase=strpos($_POST['email'],'@');
    if($position_arobase===false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour=mail('gam3r@live.fr','Envoi depuis page Contact', $contenu, $mail_entete);
        if($retour)
            echo '<p>Votre message a été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';
}
}
?>