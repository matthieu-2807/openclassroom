<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo strip_tags($_POST['prenom']); ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p>
    <?php echo $_POST['message']; ?> 
</p>
<p>
    <?php echo $_POST['choix']; ?> 
</p>
<p>
    <?php echo isset($_POST['case']); ?> 
</p>
<p>
    <?php echo $_POST['frites']; ?> 
</p>
<p>
    <?php echo $_POST['pseudo']; ?> 
</p>