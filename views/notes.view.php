<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note) : ?>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
                    <div class="px-4 py-5 sm:px-6">
                        <a href="/note?id=<?= $note['id']; ?>" class="block text-xl font-semibold text-blue-500 hover:text-blue-700"><?= $note['body']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php require("partials/footer.php"); ?>