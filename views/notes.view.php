<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex justify-end my-5">
                <a href="/notes-create" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    New note
                </a>
            </div>

            <table class="min-w-full divide-y divide-gray-300">
                <tbody class="bg-white divide-y divide-gray-300">
                    <?php foreach ($notes as $note) : ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <!-- Heroicon name: document-text -->
                                        <svg class="h-10 w-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h1.5M12 17h1.5M21 12h-1.5M5 12h1.5M15 4l-2.73 2.73M19.75 9l-2.73 2.73M3.75 17.25L8.25 12m-4.5 4.5l2.73-2.73M12.75 9.25l2.73 2.73M15.75 4.5l2.73 2.73" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="/note?id=<?php echo $note['id'] ?>" class="text-indigo-600 hover:text-indigo-900">
                                                <?php echo $note['body'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>

<?php require("partials/footer.php"); ?>