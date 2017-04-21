<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page de test et il est <?php echo date('h:i:s'); ?></title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php date_default_timezone_set('UTC'); echo date('d/m/Y h:i:s'); ?>.
        <br/>
        <?php $age_du_visiteur=17; echo 'Le visiteur a ' . $age_du_visiteur . ' ans.'; ?>
        </p>
        <hr/>
        <p>
            <?php
                echo '<ul>';
                $nombre = 2 + 4; // $nombre prend la valeur 6
                echo '<li>' . $nombre . '</li>';
                $nombre = 5 - 1; // $nombre prend la valeur 4
                echo '<li>' . $nombre . '</li>';
                $nombre = 3 * 5; // $nombre prend la valeur 15
                echo '<li>' . $nombre . '</li>';
                $nombre = 10 / 2; // $nombre prend la valeur 5
                echo '<li>' . $nombre . '</li>';

                // Allez on rajoute un peu de difficulté
                $nombre = 3 * 5 + 1; // $nombre prend la valeur 16
                echo '<li>' . $nombre . '</li>';
                $nombre = (1 + 2) * 2; // $nombre prend la valeur 6
                echo '<li>' . $nombre . '</li>';
                $nombre = 10;
                $resultat = ($nombre + 5) * $nombre; // $resultat prend la valeur 150
                echo '<li>' . $resultat . '</li>';
                $nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
                echo '<li>' . $nombre . '</li>';
                $nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
                echo '<li>' . $nombre . '</li>';
                echo '</ul>';
                echo '<hr/><br/>';
                $age = 8;
                if ($age <= 12) // SI l'âge est inférieur ou égal à 12
                {
                    $autorisation_entrer = true;
                }
                else // SINON
                {
                    $autorisation_entrer = false;
                }
                if ($autorisation_entrer)
                {
                    echo "Bienvenue petit nouveau. :o)";
                }
                else
                {
                    echo "T'as pas le droit d'entrer !";
                }

                echo '<hr/><br/>';
                // La fonction array permet de créer un array
                $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
                // Puis on fait une boucle pour tout afficher :
                for ($numero = 0; $numero < sizeof($prenoms); $numero++)
                {
                    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
                }

                foreach($prenoms as $element)
                {
                    echo '<br />' . $element; // affichera $prenoms[0], $prenoms[1] etc.
                }
                echo '<br />';


                // On crée notre array $coordonnees
                $coordonnee1 = array (
                    'prenom' => 'François',
                    'nom' => 'Dupont',
                    'adresse' => '3 Rue du Paradis',
                    'ville' => 'Lille');

                foreach($coordonnee1 as $element)
                {
                    echo '<br />' . $element;
                }
                echo '<br />';
                
                $coordonnees['prenom'] = 'François';
                $coordonnees['nom'] = 'Dupont';
                $coordonnees['adresse'] = '3 Rue du Paradis';
                $coordonnees['ville'] = 'Marseille';

                foreach($coordonnees as $cle => $element)
                {   
                    echo '<br />[' . $cle . '] vaut ' . $element;
                }
                
                echo '<pre>';
                print_r($coordonnees);
                echo '</pre>';
                var_dump($coordonnees);

                echo '<hr/><br/>';
                if (array_key_exists('nom', $coordonnees))
                {
                    echo 'La clé "nom" se trouve dans les coordonnées !';
                }

                if (array_key_exists('pays', $coordonnees))
                {
                    echo 'La clé "pays" se trouve dans les coordonnées !';
                }
                echo '<hr/><br/>';
                $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

                if (in_array('Myrtille', $fruits))
                {
                    echo 'La valeur "Myrtille" se trouve dans les fruits !';
                }

                if (in_array('Cerise', $fruits))
                {
                    echo 'La valeur "Cerise" se trouve dans les fruits !';
                }
                echo '<br/> <strong>Array_search</strong><br/>';
                $position = array_search('Fraise', $fruits);
                echo '"Fraise" se trouve en position ' . $position . '<br />';

                $position = array_search('Banane', $fruits);
                echo '"Banane" se trouve en position ' . $position;
                
                echo '<hr/><br/>';

                function DireBonjour($nom)
                {
                    echo 'Bonjour ' . $nom . ' !<br />';
                }

                DireBonjour('Marie');
                DireBonjour('Patrice');
                DireBonjour('Edouard');
                DireBonjour('Pascale');
                DireBonjour('François');
                DireBonjour('Benoît');
                DireBonjour('Père Noël');

            ?>
        </p>
        coucou c'est la fin !!!!
    </body>
</html>