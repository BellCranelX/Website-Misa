<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Navbar</title>
    @vite('resources/css/app.css')
    @yield('librarycss')
</head>
<!-- Colors: 
        1. #740001 - merah gelap 
        2. #ae0001 - merah terang 
        3. #f6f1e3 - netral 
        4. #002366 - biru terang 
        5. #20252f - biru gelap 
    -->

<body class="bg-white">
    <nav class="bg-[#20252f] text-white p-4 fixed top-0 left-0 right-0">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo Section -->
            <a href="#" class="flex items-center">
                <img src="../../../images/LOGO_MISDINAR.png" alt="Logo" class="h-12 w-12 mr-2 ml-4">
                <span class="font-bold text-xl">MISDINAR ST. TARSISIUS GEREJA KATOLIK ROH KUDUS</span>
            </a>

            <!-- Navbar Buttons -->
            <div class="flex space-x-8 items-center mr-4">
                <a href="#" class="hover:text-[#ae0001] transition duration-300">Home</a>
                <a href="#" class="hover:text-[#ae0001] transition duration-300">About Us</a>
                <a href="#" class="hover:text-[#ae0001] transition duration-300">Contact</a>
                <a href="{{ route('start_login')}}"
                    class="bg-white text-[#20252f] py-2 px-6 rounded-full hover:bg-[#ae0001] hover:text-white transition duration-300">
                    Login
                </a>
            </div>
        </div>
    </nav>
    @yield('content')

    @vite('resources/js/app.js')
    @yield('libraryjs')
</body>

</html>