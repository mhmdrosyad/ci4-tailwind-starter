<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') . ' - ' . env('SITE_NAME') ?></title>
    <?= $this->include('partials/head') ?>
</head>

<body>
    <main class="flex bg-gray-100 min-h-screen">
        <?= $this->include('partials/sidebar') ?>
        <div class="container ml-[20rem] px-12 py-10">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    <?= $this->include('partials/js') ?>
    <?= $this->renderSection('js', '') ?>
</body>

</html>