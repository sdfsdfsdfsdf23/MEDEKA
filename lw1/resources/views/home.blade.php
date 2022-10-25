<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }}</title>
</head>

<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-under">
                <img class ="imgkrip" src="{{ asset('ifDFxVeptvY.jpg') }}" alt="" width="700" height="500">
            </div>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <img src="{{ asset('logodota.png') }}" alt="" width="30" height="30">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">Как его зовут?</a></div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Крипочек Гриша.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <img src="{{ asset('logodota.png') }}" alt="" width="30" height="30">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">Кто он?</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Он был нормальным парнем, встречался с девками, пил пиво, но случилось страшное...
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <img src="{{ asset('logodota.png') }}" alt="" width="30" height="30">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">Что с ним стало?</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            На него накричала мама...
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <img src="{{ asset('logodota.png') }}" alt="" width="30" height="30">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">Что ему делать дальше?</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Умереть...ведь он не может даже открыть рта...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>