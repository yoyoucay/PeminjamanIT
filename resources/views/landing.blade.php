<!-- resources/views/landing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
         body {
            background-image: url('{{ asset('landing.jpg') }}');
            /* Adjust background properties as needed */
            background-size: cover;
            background-position: center;
            /* Additional styles */
            color: #fff; /* Set text color to white for better readability */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center items-center">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PeminjamanIT Apps</h5>
            </a>
            <div class="flex justify-center w-full p-6">
                <img class="w-[50%] object-center" src="{{ asset('logo.png') }}" alt="Sunset in the mountains">
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                PeminjamanIT adalah aplikasi berbasis web yang dirancang untuk memudahkan pendataan dan manajemen peminjaman barang.
            </p>
            <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Selanjutnya  &nbsp;
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</body>
</html>
