<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 16px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>MDC SHS-GIS</title>
    @vite
</head>

<body class="antialiased bg-black"
    style="
            background-image: url('/images/bg1.png');
            background-repeat: no-repeat;
            background-size: 100%;
        ">
    @inertia
</body>
<footer class="bg-black text-white py-4">
    <div class="text-center">
        <h1 style="font-family: Old English Five;">Mater Dei College</h1>
        <h5>Cabulijan, Tubigon, Bohol</h5>
    </div>
    <div class="flex justify-between mx-20 mt-10">
        <div class="text-center">
            <a href="#" class="block bg-green-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fas fa-phone-alt text-black text-2xl mt-2"></i>
            </a>
            <p>0945-756-2827</p>
        </div>
        <div class="text-center">
            <a href="#" class="block bg-blue-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fab fa-facebook-f text-black text-2xl mt-2"></i>
            </a>
            <p>mdc2023@facebook.com</p>
        </div>
        <div class="text-center">
            <a href="#" class="block bg-green-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fas fa-envelope text-white text-2xl mt-2"></i>
            </a>
            <p>mdc2023@gmail.com</p>
        </div>
    </div>
</footer>



</html>
