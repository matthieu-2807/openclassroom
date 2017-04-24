<?php

if (isset($_POST['password'])){
    if ($_POST['password'] == 'kangourou') {
        ?>
            <h3>PASSWORD LIST</h3>
            <p>
                YyEKtKFB<br/>
                mHEsLRZm<br/>
                pNyW7MFA<br/>
                f4CBJatS<br/>
                r8t7PUC4<br/>
                aHcTr3rn<br/>
                AtWmc75k<br/>
                NvXXsx7L<br/>
            </p>
        <?php
    }
    else {
        echo 'You have no access to this resource !';
    }
}
echo '<a href="premierTP.php">clique ici pour revenir à la page précédente.</a></p>'
?>