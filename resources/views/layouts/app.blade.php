<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CodeAcademy')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barrio&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-light font-poppins">
    <header class="text-white bg-primary">
        <nav class="container flex items-center justify-between px-6 py-4 mx-auto">
            <a href="{{ route('landing') }}" class="text-2xl font-bold text-light">CodeAcademy</a>
            <div class="flex items-center text-lg space-x-2">
                <a href="{{ route('landing') }}" class="text-white px-4 py-2 font-medium">Beranda</a>
                <a href="{{ route('courses') }}" class="text-white px-4 py-2 font-medium">Kursus</a>
                <a href="{{ route('help') }}" class="text-white px-4 py-2 font-medium">Bantuan</a>
                @auth
                    <a href="{{ route('profile') }}" class="text-white px-4 py-2 font-medium">Profil</a>
                    @if (auth()->user()->role === 'admin')
                        <a href="{{ route('admin.courses.index') }}" class="text-white px-4 py-2 font-medium">Dashboard</a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 text-lg px-5 p-1 font-semibold rounded-xl text-white">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="text-primary text-lg px-6 p-1 font-semibold rounded-xl bg-white">Login</a>
                @endauth
            </div>
        </nav>
    </header>
    {{-- <main class="container px-6 py-8 mx-auto"> --}}
    <main class="">
        @yield('content')
    </main>
    <footer class="py-10 bg-light">
        <div class="container grid grid-cols-1 gap-8 px-6 mx-auto text-gray-700 md:grid-cols-4">
            <!-- About Section -->
            <div>
                <h4 class="mb-4 text-lg font-bold text-primary">CodeAcademy</h4>
                <p class="text-sm leading-relaxed text-primary">
                    CodeAcademy adalah platform belajar coding interaktif yang menawarkan kursus dalam berbagai bahasa
                    pemrograman, membantu pelajar menguasai coding secara praktis dan menyenangkan.
                </p>
            </div>

            <!-- Tentang Kami -->
            <div>
                <h4 class="mb-4 text-lg font-bold text-primary">Tentang kami</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-primary">Perusahaan</a></li>
                    <li><a href="#" class="text-primary">Artikel</a></li>
                    <li><a href="#" class="text-primary">Testimoni</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div>
                <h4 class="mb-4 text-lg font-bold text-primary">Sosial Media</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-primary">Instagram: @codeacademy</a></li>
                    <li><a href="#" class="text-primary">Whatsapp: 0896 4347 4489</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h4 class="mb-4 text-lg font-bold text-primary">Kontak</h4>
                <ul>
                    <li><a href="mailto:codeacademy@gmail.com" class="text-primary">codeacademy@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-6 mt-8 border-t border-gray-200">
            <div class="container flex flex-col items-center justify-center mx-auto text-sm text-gray-500 md:flex-row">
                <p class="mr-5 text-primary">&copy; 2024</p>
                <div class="space-x-4">
                    <a href="#" class="text-primary">Kebijakan Privasi</a>
                    <a href="#" class="text-primary">Ketentuan Penggunaan</a>
                </div>
            </div>
        </div>
    </footer>

    @include('components.toast')


</body>

</html>
