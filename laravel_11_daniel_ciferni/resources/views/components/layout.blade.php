<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MotorPulse</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar />

    <main class="py-5">
        {{ $slot }}
    </main>

</body>
</html>