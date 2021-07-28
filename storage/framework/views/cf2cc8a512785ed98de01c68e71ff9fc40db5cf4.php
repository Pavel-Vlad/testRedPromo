<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
    <nav>
        <ul>
            <li>
                <a href="/">
                    На главную
                </a>
            </li>
            <li>
                <a href="/news-all">
                    Все новости здесь
                </a>
            </li>
        </ul>
    </nav>
    <img src="<?php echo e(asset('img').'/'.$news_item->image); ?>" alt="">
    <h1><?php echo e($news_item->title); ?></h1>
    <p><?php echo e($news_item->excerpt); ?></p>
    <p><?php echo e($news_item->full_text); ?></p>
    <a href="/to-favor/<?php echo e($news_item->id); ?>" class="btn btn-dark">в избранные</a>
    <br>
    <br>
    <h2>Похожие новости</h2>
    <div class="row">
        <?php $__currentLoopData = $related_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 mb-2">
                <a href="/news-item/<?php echo e($item->id); ?>">
                    <strong>
                        <?php echo e($item->title); ?>

                    </strong>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH D:\phpStormProjects\trp\resources\views/single.blade.php ENDPATH**/ ?>