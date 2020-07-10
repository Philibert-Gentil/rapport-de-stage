<?php

$title = "Rapport de stage | lexique";

include __DIR__ . "/include/head.php";
include __DIR__ . "/include/entete.php";
include __DIR__ . "/include/nav.php";

$defs = [
    ["Cahier des charges", "Le cahier des charges est un document contractuel definissant les attentes du client de prévisualiser le projet."],
    ["Intelligence artificielle", "programme prmettant à une machine de prendre des décision, voire d'apprendre."],
    ["Tay AI", "Tay AI était une intelligence artificielle censée apprendre en discutant avec les internautes, et qui c'est mis à tenir des propos haineux car ceux-ci en faisaient mauvais usage, elle est même allée jusqu'a insulter publiquement le président des états unis d'Amérique, cela prouve la dangerosité des inteligence artificielles."],
    ["CMS", "Les CMS, ou systèmes de gestion de contenu sont des logiciels déstinés à la mise à jour dynamique d'applications web ou multimédias (ils y changent le contenu en fonction des utilisateurs)"],
    ["Progiciel", "Enemble de logiciels avec une documentation permettant de remplir un usage spécifique."],
    ["Documentation d'un langage de programmation", "Elle décrit le fonctionnement du langage de programmation, les spécificités, les mises à jour et les fonctions préregistrées destinées à aider le développeur dans sa tâche"],
    ["Algorithmique", "Un algorithme est un ensemble d'instructions et de conditions qui se suivent permettant de résoudre un problème"],
    ["Chasse aux bogues", "Consiste à chercher des failles ou des erreur visibles pour l'utilisateur dans un programme, souvent très bien rémunéré."],
    ["Chasseurs de bogues", "Personnes spécialisée dans la chasse au bogues"],
    ["Bogue", "Erreur dans un prgramme informatique qui nuit à l'expérience du client (équivalent en Français du mot \"bug\")."],
    ["Responsable de sécurité du système informatique", "Le métier responsable sécurité des systèmes d'information (rssi) fait partie du domaine informatique. Sa mission première est de définir la politique de sécurité du SI et de veiller à son application. Le RSSI assure un rôle de conseil, d'assistance, d'information, de formation et d'alerte"],
    ["Technicien de maintenance informatique", "Le technicien de maintenance informatique assure l’entretien et la réparation des matériels informatiques. Il peut réaliser également l’installation de nouveaux équipements ou assurer la formation des utilisateurs."],
    ["Administrateur de bases de données", "L'administrateur de base de données élabore, optimise et supervise une ou plusieurs bases d'information internes à une entreprise. Son objectif ? Que le système soit fiable et que les utilisateurs puissent y avoir accès rapidement et à tout moment."],
    ["Développeur multimédia", "Le développeur multimédia est un professionnel des logiciels, des langages HTML et autres javascript ou PHP et un passionné des technologies de l’image. Il traduit en langage technique les décisions des créatifs."],
    ["Responsable de projet informatique", "C'est le chef de projet ou responsable informatique qui est chargé de superviser la mise au point de la solution informatique. Dans la phase finale, le responsable de projets informatiques participe à la mise en place de l'outil et recueille, si nécessaire, les améliorations à envisager."],
    ["Évangéliste web", "Le web evangelist est un développeur communicant chargé de porter « la bonne nouvelle » d’une marque, d’une technologie ou d’une entreprise en direction des communautés influentes du Web. Objectif : partager, convaincre, faire adopter une technologie ou un produit."],
    ["Base de donnée (BDD, DB : database)", "Ensemble d'informations structurées accessibles au moyen d'un logiciel."],
    ["Langage de programmation", "Langage compris est interpreté par un ordinateur, parmettant de lui faire faire une suite d'action"],
    ["Langage interprété", "Langage qui est traduit par un interpréteur (pas un interprète) qui va lire et traduire ligne par ligne le programme."],
    ["Langage compilé", "Langage traduit en code binaire une seule fois et qui est compréhensible par le système d'exploitation directement"],
    ["compilateur", "Programe informatique permettant de traduire un langage de programmation en coe binaire"],
    ["Code binaire", "Suite de 1 et de 0 compréhensibles par l'ordinateur."],
    ["Système d'exploitation", "Logiciel installé à la racine de l'ordinateur pour le rendre utilisable (comme Microsoft Windows, ou Apple MacOS)."],
    ["Développeur indépendant (développeur freelance)", "Est définie par le terme de freelance une personne qui exerce une activité professionnelle avec la qualité de travailleur indépendant. Ce collaborateur n'a pas de contrat à long terme comme les salariés en CDD ou CDI, mais réalise son activité professionnelle sous la forme de missions, qu'il facture à ses clients."]
];

function searchArray (string $valeur, array $tableau) {
    for ($i = 0; $i < count($tableau); $i++) {
        if (in_array(ucfirst(urldecode($valeur)), $tableau[$i])) {
            return [$tableau[$i][0], $tableau[$i][1]];
        }
    }
    return false;
}
?>

<?php if (isset($_GET['query'])) : ?>
    <?php if ($valeurs = searchArray($_GET['query'], $defs)) : ?>
        <div class="encadre">
            <h1 class="titre-encadre">Lexique</h1>
            <h2 class="def-titre-encadre"><?= $_GET['query'] ?></h2>
            <p><?= $valeurs[1] ?></p>
        </div>
        <div class="encadre">
        <h1 class="titre-encadre">Lexique général</h1>
        <h2 class="sous-titre-encadre">Liste des definitions</h2>

        <?php
        for ($i = 0; $i < count($defs); $i++) {
            echo '<h2 class="def-titre-encadre">' . $defs[$i][0] . '</h2>';
            echo '<p>' . $defs[$i][1] . '</p>';
        } ?>
    </div>
    <?php else : ?>
        <div class="encadre">
            <h1 class="titre-encadre">Lexique</h1>
            <h2 class="sous-titre-encadre">Oups.</h2>
            <p>L'argument de votre requete est incorrect</p>
        </div>
    <?php endif; ?>
<?php else : ?>
    <div class="encadre">
        <h1 class="titre-encadre">Lexique</h1>
        <h2 class="sous-titre-encadre">Liste des definitions</h2>

        <?php
        for ($i = 0; $i < count($defs); $i++) {
            echo '<h2 class="def-titre-encadre">' . $defs[$i][0] . '</h2>';
            echo '<p>' . $defs[$i][1] . '</p>';
        } ?>
    </div>
<?php endif; ?>