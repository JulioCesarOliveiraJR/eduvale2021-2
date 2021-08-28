<article>
    <h1><?= $profile->name; ?></h1>

    <p>
        Seu sobrenome é <?= $profile->lastName; ?>
        <a title="Enviar E-mail"  href="mailto:<?= $profile->email; ?>">Enviar E-mail</a>
    </p>

</article>