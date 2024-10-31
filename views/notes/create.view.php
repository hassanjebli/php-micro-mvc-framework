<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/notes" method="POST">
            <div class="space-y-6">
                <div class="col-span-full">
                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                    <div class="mt-1">
                        <textarea id="body" name="body" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                            placeholder="Here is an idea for a note...."><?= $_POST['body'] ?? '' ?></textarea>
                        <?php if (isset($errors['body'])): ?>
                            <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                        <?php endif; ?>

                    </div>
                </div>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500  ">Save</button>
            </div>
        </form>


    </div>
</main>


<?php require base_path("views/partials/footer.php") ?>