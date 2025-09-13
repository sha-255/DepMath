<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/svg+xml', 'href' => Yii::getAlias('@web/favicon.svg')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="flex flex-col h-full">
    <?php $this->beginBody() ?>

    <header id="header" class="fixed top-0 w-full bg-black/5 backdrop-blur-md border-b border-white/10 z-50">
        <nav class="container mx-auto px-6 py-2.5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a class="text-2xl text-white align-text-bottom !no-underline" href="/">
                        DeepMath AI
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features"
                        class="!text-zinc-500 !no-underline hover:!text-gray-200 duration-300 ease-out">Features</a>
                    <a href="#pricing"
                        class="!text-zinc-500 !no-underline hover:!text-gray-200 duration-300 ease-out">Pricing</a>
                    <a href="#testimonials"
                        class="!text-zinc-500 !no-underline hover:!text-gray-200 duration-300 ease-out">Testimonials</a>
                    <a href="/"
                        class="bg-gray-200 !text-black font-medium px-6 py-2 rounded-lg !no-underline hover:bg-stone-300 duration-300 ease-out">
                        Try now
                    </a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main id="main" role="main">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>

    <footer id="footer" class="bg-black border-t border-zinc-800 py-2">
        <div class="container mx-auto px-6">
            <div class="text-center text-zinc-500">
                <p>© 2024 DeepMath. Making mathematics interesting since yesterday.</p>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>