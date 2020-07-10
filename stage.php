<?php

$title = "Rapport de stage | Mon stage";

include __DIR__ . "/include/head.php";
include __DIR__ . "/include/entete.php";
include __DIR__ . "/include/nav.php";
?>

<body>

<div class="encadre">
    <h1 class="titre-encadre">Mon stage</h1>
    <h2 class="sous-titre-encadre">Mon projet de stage</h2>
    <p>
        En arrivant, j'étais censé apprendre un langage de programmation, le PHP, mais je connaissait déjà ce langage, alors un projet m'a été attribué : Axes et Sites (l'entreprise où j'ai fait mon stage) propose, en plus de son service de développement web, des formation, où les stagiaires (les personnes formées aux logiciels de bureautique) doivent donner leurs avis en remplissant un questionnaire de satisfaction sur Microsoft Excel, or, ça n'est pas pratique, et il serait mieux de créer un site où les stagiaires peuvent répondre au questionnaire.
    </p>
    <p>
        Le site doit remplir les fonctions suivantes :
    </p>
    <ul>
        <li>Les stagiaires doivent pouvoir répondre au formulaire en tapant seulement leur mot de passe</li>
        <li>L'administrateur doit pouvoir inscrire un client</li>
        <li>L'administrateur doit pouvoir créer et lui attribuer des formations, contenant des utilisateurs</li>
        <li>Les mots de passes des stagiaires, en 7 caractères, doivent être définis aléatoirement</li>
        <li>L'administrateur doit pouvoir renommer les stagiaires, formations et client, voir les mots de passes et les résultat.</li>
        <li>Le patron de l'entreprise cliente doit pouvoir acceder aux résultat en tapant un mot de passe de 7 caracatères</li>
        <li>Les données doivent être stockées dans une <a href="/lexique.php?query=<?= urlencode('Base de donnée (BDD, DB : database)') ?>" title="Voir dans le lexique" class="lien-lexique">base de données</a></li>
    </ul>
    <h2 class="sous-titre-encadre">Le résultat</h2>
    <p>
        Défi compliqué à mon niveau, il m'a fallu 5 essais pour réussir à finaliser le projet. Il est maintenant fonctionnel.
    </p>
</div>
<div class="encadre">
    <h1 class="titre-encadre">Données</h1>
    <h2 class="sous-titre-encadre">L'entreprises</h2>
    <p>
        Mon stage à été effectué dans une agence de développement web, logiciel et de formation à l'informatique.
        Elle comporte actuellement trois membre et sous-traite d'autres personnes, des <a href="/lexique.php?query=<?= urlencode('Développeur indépendant (développeur freelance)')?>" title="Voir dans le lexique" class="lien-lexique">développeurs freelance</a>.
    </p>
    <h2 class="sous-titre-encadre">Horaires</h2>
    <p>
        Les horaires de travail étaient de 9h à 17h, ce qui fait sept heures de travail avec une pause déjeuner de 1h30.
    </p>
    <h2 class="sous-titre-encadre">Les outils mis à ma disposition</h2>
    <p>
        Pour effectuer ma mission, les outils suivant ont été distribués :
    </p>
    <ul>
        <li>Un ordinateur portable de formation avec sa souris</li>
        <li>Un bureau et une chaise ergonomique</li>
    </ul>
    <p>
        Il ne faut pas plus pour développer un site, mis à part les logiciels gratuits installés.
    </p>
</div>
</body>