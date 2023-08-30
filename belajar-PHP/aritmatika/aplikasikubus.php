<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body class='flex bg-gradient-to-r from-slate-800 to-zinc-900 h-screen bg-cover overflow-hidden'>
    <div class='block m-32 mx-[min(400px)] justify-center row-end-3 bg-white p-5 rounded-md w-[min(100vh,200vh)] backdrop-blur-sm shadow-lg shadow-slate-400'>
        <?php include 'linkdropdown.php'; ?>


        <div class="block m-5 first-letter:uppercase">
            <p for="judul1" class="font-mono first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left"><span class="relative bottom-3">V</span>olume <br> panjang</p>
        </div>
        <div>
            <input type="number" class="text-start outline-rose-500 focus:outline-blue-600 mt-1 w-96 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400 text-white">
        </div>

        <div class="block m-5 first-letter:uppercase">
            <p class="font-mono first-line:uppercase first-line:tracking-widset first-letter:text-7xl first-letter:font-bold first-letter:from-slate-800 first-letter:float-left"><span class='relative bottom-3'>L</span>uas Permukaan <br> panjang sisi 6v2</p>
        </div>
        <div>
            <input type="number" class="text-start outline-rose-500 focus:outline-blue-600 mt-1 w-96 p-2 rounded-md transition ease-in-out delay-150 hover:translate-y-1 hover:scale-110 hover:bg-gray-800 bg-slate-400 text-white">
        </div>


    </div>

</body>

</html>