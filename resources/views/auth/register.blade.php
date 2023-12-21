<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href={{ asset('images/logo-hmps-color.svg') }}>
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
</head>

<body class="w-full overflow-x-hidden h-screen p-5 flex justify-center items-center text-gray-500">
    <div class="w-[93%] grid grid-cols-1 lg:grid-cols-3 gap-5 grid-flow-row">
        <div class="w-full h-auto hidden lg:flex justify-center overflow-hidden">
            <img src={{ asset('illustration/pattern-1.svg') }} alt="" class="object-cover w-full">
        </div>
        <div class="col-span-2 h-auto flex flex-col justify-center items-center gap-5 p-5">
            <div class="w-4/5 flex flex-col justify-center gap-5">
                <div class="flex h-max items-center gap-3">
                    <img src={{ asset('images/logo-hmps-color.svg') }} alt="" class="w-12 aspect-square">
                    <p class="uppercase text-2xl font-bold text-sky-800">
                        h<span class="text-yellow-300">m</span>ps
                    </p>
                </div>
                <div class="">
                    <p class="capitalize text-3xl font-bold text-sky-800">login</p>
                </div>
                <form action="" method="post" class="flex flex-col items-center gap-5 w-fll">
                    <div class="w-full">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                            placeholder="xxx@xx.student.pens.ac.id" required>
                    </div>
                    <div class="w-full">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                            placeholder="•••••••••" required>
                    </div>
                    <div class="w-full capitalize font-medium">
                        belum punya akun ? <a href="" class="text-blue-700">register</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:outline-none focus:ring-4 focus:ring-sky-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
