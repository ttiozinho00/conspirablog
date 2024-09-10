@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Bem-vindo ao Conspira Blog!</h2>
        
        <p class="mb-4">
            O Conspira Blog é um espaço onde você pode explorar, criar e compartilhar suas ideias. Seja você um entusiasta de teorias da conspiração, um curioso sobre os mistérios do universo, ou alguém que gosta de compartilhar pensamentos profundos, este é o lugar certo para você.
        </p>

        <p class="mb-4">
            Aqui, você pode ler artigos interessantes, deixar seus comentários e até mesmo contribuir com seus próprios textos. Estamos constantemente atualizando o blog com novos conteúdos, então fique à vontade para explorar e participar das discussões.
        </p>

        <h3 class="text-xl font-semibold mb-2">Recursos do Conspira Blog:</h3>
        <ul class="list-disc pl-5 mb-4">
            <li>Leitura de posts sobre uma variedade de tópicos intrigantes.</li>
            <li>Criação e publicação de seus próprios artigos.</li>
            <li>Edição e personalização de posts já existentes.</li>
            <li>Interação com outros leitores através de comentários.</li>
        </ul>

        <p class="mb-4">
            Quer começar a explorar? Visite a nossa <a href="{{ route('posts.index') }}" class="text-blue-500 hover:underline">página de posts</a> para ver os artigos mais recentes, ou <a href="{{ route('posts.create') }}" class="text-blue-500 hover:underline">crie um novo post</a> agora mesmo!
        </p>

        <p class="font-semibold">Obrigado por visitar o Conspira Blog. Esperamos que você aproveite a leitura!</p>
    </div>
@endsection
