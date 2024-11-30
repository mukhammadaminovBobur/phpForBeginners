<?php require("views/partials/head.php"); ?>
<?php require("views/partials/nav.php"); ?>
<?php require("views/partials/banner.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <p class="mt-1 max-w-2xl text-sm text-gray-500"><?= htmlspecialchars($note['body']); ?></p>
                </div>
            </div>
            <div class="flex justify-end my-5">
                <a href="/notes"
                   class="inline-flex items-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2h-2.586l2.293 2.293a1 1 0 010 1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                    Back
                </a>
            </div>


        </div>
    </main>

<?php require("views/partials/footer.php"); ?>