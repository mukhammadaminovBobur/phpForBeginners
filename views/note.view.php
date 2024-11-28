<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
                    <div class="px-4 py-5 sm:px-6">
                        <a href="/notes" class="rounded btn btn-blue text-white bg-cyan-500 hover:bg-cyan-600 mb-5 px-5 py-2">Back to notes</a>
                        <p class="text-lg font-semibold text-gray-500 mt-2"><?= $note['body']; ?></p>
                    </div>
                </div>
        </div>
    </main>

<?php require("partials/footer.php"); ?>