<main>
        <section  style="text-align: center; display: flex; flex-direction:column; justify-content: center; align-items: center; width: 100%;">
            <h1>La proxima pelicula de Marvel</h1>
            <img src=<?= $poster_url; ?> alt=<?= $title; ?>  style="border-radius: 16px; max-width: 300px;">
            <div style="margin-top: 20px;">
                <h2><?= $title; ?></h2>
                <p> <?= $overview; ?></p>
                <p> Fecha de estreno: <?= $release_date; ?></p>
                <p style="font-weight: bold;"><?= $until_message ?></p>
                <p>Luego de esta viene: <strong><?= $following_production ?></strong></p>
            </div>
        </section>
    </main>