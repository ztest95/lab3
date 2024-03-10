<link rel="stylesheet" href="./styles/style2.css">
<style>
    section {
        margin: 4%;
        border-top: 1px solid #1e1e1e
    }
    p {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 2em;
        opacity: 50%;
        transition: opacity 0.3s ease;
    }

    h2 {
        text-decoration: underline;
    }

    .guest {
        background-color: #f4f4f4;
        transition: background-color 0.3s ease;
        padding: 4%;
    }
    .guest:hover {
        background-color: #ddbda2;
    }

    .guest:hover p {
        opacity: 100%;
    }

    h1 {
        padding-left: 4%;
    }
</style>

<section>
    <?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>
        <div class="guest">
            <h2><?= esc($guest_item['name']) ?></h3>

            <div class="main">
                <p> <?= esc($guest_item['comment']) ?> </p>
            </div>
        </div>


    <?php endforeach ?>

    <?php else: ?>

    <h2>No Guest</h3>

    <p>Unable to find any guest for you.</p>

    <?php endif ?>
</section>

