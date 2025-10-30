<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Gerencie a Saúde do seu Pet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">🐾 PetCare</h1>
        <nav class="space-x-6">
            <a href="#sobre" class="hover:text-blue-600 transition">Sobre</a>
            <a href="#funcionalidades" class="hover:text-blue-600 transition">Funcionalidades</a>
            <a href="{{ url('/admin/login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Começar Agora</a>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="h-screen flex flex-col justify-center items-center text-center bg-gradient-to-r from-blue-600 to-blue-400 text-white px-6">
    <h2 class="text-5xl font-extrabold mb-4 drop-shadow-lg">Gerencie a Saúde do seu Pet com Facilidade 🐶🐱</h2>
    <p class="max-w-2xl text-lg mb-6">Acompanhe vacinas, vermífugos e medicamentos do seu pet em um só lugar. Cuide com amor e tecnologia!</p>
    <a href="{{ url('/admin/login') }}" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-blue-100 transition">Começar Agora</a>
</section>

<!-- Sobre -->
<section id="sobre" class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold text-blue-600 mb-6">O que é o PetCare?</h3>
        <p class="max-w-3xl mx-auto text-lg text-gray-600 leading-relaxed">
            O <span class="font-semibold">PetCare</span> é um sistema web que ajuda tutores a gerenciar vacinas, medicamentos e cuidados dos seus animais de estimação.
            Com ele, você nunca mais vai esquecer o dia da próxima vacina ou aplicação de vermífugo.
        </p>
    </div>
</section>

<!-- Funcionalidades -->
<section id="funcionalidades" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold text-blue-600 mb-12">Funcionalidades Principais</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <h4 class="text-xl font-semibold mb-3">💉 Controle de Vacinas</h4>
                <p class="text-gray-600">Cadastre e visualize as vacinas aplicadas e receba alertas sobre as próximas datas.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <h4 class="text-xl font-semibold mb-3">💊 Medicamentos</h4>
                <p class="text-gray-600">Gerencie vermífugos, antipulgas e outros remédios com lembretes automáticos.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <h4 class="text-xl font-semibold mb-3">🐕 Perfil do Pet</h4>
                <p class="text-gray-600">Adicione fotos, nome, raça, peso e idade dos seus pets e tenha tudo organizado.</p>
            </div>
        </div>
    </div>
</section>

<!-- Demonstração -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold text-blue-600 mb-6">Veja como é fácil usar</h3>
        <img src="https://cdn.dribbble.com/users/211151/screenshots/12168642/media/edbb6f7a7fbcf80d29e38b5dc89b733d.png" alt="Mockup PetCare"
             class="mx-auto rounded-xl shadow-lg max-w-3xl">
    </div>
</section>

<!-- CTA -->
<section id="cta" class="py-20 bg-blue-600 text-white text-center">
    <h3 class="text-4xl font-bold mb-4">Cuide melhor do seu pet!</h3>
    <p class="mb-6 text-lg">Crie sua conta gratuita e comece a organizar a saúde do seu melhor amigo agora mesmo.</p>
    <a href="{{ url('/admin/login') }}" class="bg-white text-blue-600 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition">Começar Agora</a>
</section>

<!-- Rodapé -->
<footer class="bg-gray-900 text-white py-6 text-center">
    <p class="text-sm">&copy; 2025 PetCare. Todos os direitos reservados.</p>
</footer>

</body>
</html>
