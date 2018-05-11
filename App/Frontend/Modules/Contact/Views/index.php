<!-- script permettant d'afficher temporairement le message -->
<script>
    document.getElementById("email_ok").innerHTML = "<?="Merci " .htmlspecialchars($_POST['name']) .", votre email a bien été envoyé !";?>";

    setTimeout(function() {
        document.getElementById("email_ok").innerHTML = "";
    }, 4000);
</script>

<script>
    document.getElementById("email_ko").innerHTML = "<?="Désolé " .htmlspecialchars($_POST['name']) .", votre email n'a pas été envoyé. Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur !";?>";

    setTimeout(function() {
        document.getElementById("email_ko").innerHTML = "";
    }, 4000);
</script>

<div class="container" style="padding-bottom: 200px">


    <section class="col-md-8">
        <form class="well" method="post" action="" enctype="multipart/form-data">
            <p>J'ai écris ce roman suite à mon propre voyage en Alaska.<br /> J'espère qu'il vous plaira et je vous invite à me faire part de vos suggestions concernant ce roman mais également sur son mode de parution afin de savoir si je garderai le même procédé pour mes futurs ouvrages.</p>
            <p style="text-align: right"><em>Jean FORTEROCHE</em></p>
            <fieldset>
                <label for="name" style="margin-top: 20px">Votre nom :</label><br />
                <input type="text" id="name" name="name" style="border-color: #397385; width:250px" maxlength="40" title="Veuillez renseigner ce champ. (40 caractères maximum)" required /><br />
                <label for="subject" style="margin-top: 20px">Objet du message :</label><br />
                <input type="text" name="subject" id="subject" name="subject" style="width:250px; border-color: #397385" maxlength="100" title="Veuillez renseigner ce champ. (100 caractères maximum)" required /><br />
                <label for="email" style="margin-top: 20px">Votre adresse email :</label><br />
                <input type="email" id="email" name="email" style="width:250px; border-color: #397385" maxlength="50" title="Veuillez renseigner ce champ. (50 caractères maximum)" required/><br />
                <label for="message" style="margin-top: 20px">Votre message :</label><br />
                <textarea name="message" id="message" rows="6" style="border: 2px solid #397385; width: 500px" maxlength="1000" title="Veuillez renseigner ce champ. (1000 caractères maximum)" required></textarea><br />     
                <button class="btn" type="submit" name="send" style="margin-top: 20px"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button>
            </fieldset>
        </form>
    </section>
    <section class="col-md-4">
        <address class="img-thumbnail"><img src="Web/images/plume.jpg" alt="plume" style="border: none; width: 100px; height: auto"/>
          <p>Vous pouvez également me contacter par courrier postal à cette adresse :</p>
          <strong>Jean FORTEROCHE</strong><br>
            15 rue du roman<br>
            75000 Paris<br>
          </address>
    </section>
</div>


