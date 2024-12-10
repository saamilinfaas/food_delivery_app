<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <title>@yield('title', 'Al Faa Foods')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="dark:bg-gray-700">

    {{-- Nav Bar --}}
    <div >
        <x-layouts.navBar/>
    </div>

    {{-- Main --}}

    <div class="w-full flex flex-row relative">
        <div class="flex justify-start  z-10">
            <x-layouts.siteBar/>
        </div>
        <div class="rounded-xl px-4 py-2 ml-3 mt-2 absolute left-24 flex justify-center items-center sm:w-[320px] md:w-[720px] lg:w-[1160px]">
            @yield('content')
        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>
