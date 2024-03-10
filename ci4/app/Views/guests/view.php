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
    <div class="guest">
        <h2><?= esc($guest['name']) ?></h2>
        <p><?= esc($guest['email']) ?></p>
        <p><?= esc($guest['website']) ?></p>
        <p><?= esc($guest['comment']) ?></p>
        <p><?= esc($guest['gender']) ?></p>
    </div>
</section>
