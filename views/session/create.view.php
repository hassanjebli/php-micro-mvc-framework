<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>


<main>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6 bg-white p-6 rounded-lg shadow-lg" action="/session" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email address</label>
                    <div class="relative mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 text-gray-800 placeholder:text-gray-500 shadow-sm focus:border-purple-500 focus:ring-2 focus:ring-purple-500 focus:outline-none transition duration-200"
                            value="<?= old('email') ?>">
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex justify-between items-center mb-1">
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                    </div>
                    <div class="relative mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 text-gray-800 placeholder:text-gray-500 shadow-sm focus:border-purple-500 focus:ring-2 focus:ring-purple-500 focus:outline-none transition duration-200">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full rounded-md bg-purple-600 px-4 py-2 text-white font-semibold text-sm shadow-md hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 transition duration-200">
                        Log in
                    </button>
                </div>

                <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                </ul>
            </form>

        </div>
    </div>
</main>


<?php require base_path("views/partials/footer.php") ?>