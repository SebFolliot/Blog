<footer style="width: 100%; height: 180px; background-color: grey">
    <div style="margin: 40px; padding-top: 20px; padding-bottom: 20px; border-bottom: 1px solid silver;display: flex; justify-content: space-between; color: white">
        <p><strong>BILLET SIMPLE POUR L'ALASKA</strong></p>
        <p><a target="_blank" href="https://www.facebook.com" style="color: white"><i class="fab fa-facebook-f" style="margin-right: 10px" title="Facebook"></i></a><a target="_blank" href="https://www.twitter.com" style="color: white"><i class="fab fa-twitter" style="margin-right: 10px" title="Twitter"></i></a><a target="_blank" href="https://www.googleplus.com" style="color: white"><i class="fab fa-google-plus-g" title="Google+"></i></a></p>
    </div>
    <div style="color: silver; display: flex; justify-content: center">
        <p style="margin-right: 20px"><em><i class="far fa-copyright"></i> 2018 Jean Forteroche</em></p>
        <?php if ($user->isAuthenticated()) { ?>
        <?php } else { ?>
        <p><a href="/admin/"><i class="fas fa-user fa-2x" title="Se connecter au portail admin" style="color: silver"></i></a></p>
        <?php } ?>
    </div>
</footer>
