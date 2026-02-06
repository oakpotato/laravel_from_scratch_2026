<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground">
    <x-layout.navbar />
    <main class="mx-auto max-w-7xl px-6">
        {{ $slot }}
    </main>

    <p>Hello</p>
    <div x-data="{ greeting: 'Hello' }">
        <p x-text="greeting"></p>

        <input type="text" x-model="greeting">
    </div>

    @session('success')
        <div 
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            x-transition.opacity.duration.300ms
            class="b-primary px-4 py-3 absolute bottom-4 right-4 rounded-lg"
        >
            {{ $value }}
        </div>
    @endsession
    
</body>
</html> 