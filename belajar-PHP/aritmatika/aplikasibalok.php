<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover overflow-hidden'>
        <div class='block m-32 mx-[min(400px)] justify-center row-end-3 bg-white p-5 rounded-md w-[min(100vh,200vh)] backdrop-blur-sm shadow-lg shadow-slate-400'>
            <?php include 'linkdropdown.php'; ?>

            <div class="block m-5 first-letter:uppercase">
                <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left"><span class="relative bottom-3">V</span>olume <br> panjang, lebar, tinggi</p>
            </div>
            <div class='grid grid-cols-2 grid-rows-2'>
                <div>
                    <label for="" class="block text-md font-bold">Panjang</label>
                    <input type="number" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                </div>
                <div>
                    <label for="" class="block text-md font-bold">Lebar</label>
                    <input type="number" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                </div>
                <div class="mt-2">
                    <label for="" class="block text-md font-bold">Tinggi</label>
                    <input type="number" class="text-start text-white focus:outline-blue-600 ml-1 mt-1 w-72 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400">
                </div>
            </div>
        </div>

    </body>

</html>