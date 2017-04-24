<form action="premierTP.php" method="post">
    <p>
        MOT DE PASSE :
        <input type="password" name="password" /><br />
        <input type="submit" value="Access to secret password list" />
    </p>
</form>

<?php if (isset($_POST['password'])){
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
}
?>