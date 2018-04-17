# Créer un espace membre sur wordpress

Avant de vous lancer, sachez qu’un espace de membres requiert une certaine performance de la part de votre hébergement. D’autant que pour garantir la sécurité des données qui sont échangées sur votre site web, vous devrez recourir à un certificat SSL (Secure Socket Layer). Ce certificat permet de crypter les données qui sont échangées entre un serveur et un ordinateur. Un site web équipé d’un certificat SSL dispose d’une URL du type “https” et non simplement “http”.

Notez que si vous souhaitez proposer le paiement d’un abonnement par carte bancaire, un certificat SSL est indispensable.

## Créer une base de donnée

Ma base de donnée : wordpress_espace_membres

Choisir qui peut s'inscrire : 

<img src="miniature4.png" width="70%">

## Les pages

- Blog : page des articles
- Sample Page :  page d'accueil
Définir dans Réglages/Lecture :
<img src="miniature5.png" width="70%">

- Register (inscription) [ultimatemember form_id=44]
- Login (connexion) [ultimatemember form_id=45]
- User (utilisateur) [ultimatemember form_id=46]
- Members
- Account : Page du compte de l'utilisateur pour modifier son compte[ultimatemember_account]
- Logout (déconnexion) : 
- Password Reset :  [ultimatemember_password] 


## Le pluggin

[5-plugins-wordpress-pour-creer-espace-membres](https://blogpascher.com/plugins-wordpress/membership/5-plugins-wordpress-pour-creer-espace-membres)

[tuto wpformation](https://wpformation.com/espace-membres-wordpress/)
[Personnaliser les pages d'inscriptions](https://blogpascher.com/plugins-wordpress/comment-personnaliser-les-pages-dinscription-et-de-connexion-wordpress)

## J'ai choisi le pluggin : ultimate member

- Installez le, activez le.
    - Forms : modifiez le contenu du formulaire

### settings

General : Définir quelle page à quel rôle.

<img src="miniature6.png" width="70%">

Access : Faut-il se logguer pour avoir accès au site ?

<img src="miniature7.png" width="70%">

### Utilisateur

- Un admin
- Author : 1 ou 2 membres qui sont chargé d'actualiser le blog. En bas de page ne pas oublier de définir le rôle : author. 

<img src="miniature8.png" width="70%">

Se rôle est défini dans Ultimate Member/User Roles

<img src="miniature9.png" width="70%">

### restrindre une page (utilisateur pas membre)

#### Le menu 

<img src="miniature10.png" width="70%">

**Empecher que le blog soit visible par qq'un qui n'est pas loggué**

<img src="miniature11.png" width="70%">

#### La page

Cacher la page blog si je ne suis pas connecté :

<img src="miniature12.png" width="70%">