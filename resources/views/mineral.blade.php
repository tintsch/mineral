<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="p-10">
    <!--Card 1-->
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://sep.yimg.com/ty/cdn/yhst-135466925550166/jj517.JPG" alt="Mountain">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2"><?= $mineral->name ?></div>
            <div class="font-bold text-l mb-2"><?= $mineral->title ?></div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                <?= $mineral->text1 ?>
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#gold</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#gr</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#bergwerk</span>
        </div>
        <div class="text-gray-300 px-6 text-xs italic mb-4">Inventar Nr. <?= $mineral->number ?></div>
    </div>
</div>


</body>
</html>
