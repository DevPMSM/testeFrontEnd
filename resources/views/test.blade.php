<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <h1>{{ $title }}</h1>
        @if($isLoggedIn)
            <p>Bem-vindo, {{ $user['name'] }}!</p>
        @else
            <p>Por favor, faça login</p>
        @endif
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Lista de Itens</h2>
            <ul>
                <li>
                    <span>Guia Prático Sobre Gatos</span>
                    <img src="https://www.doglife.com.br/blog/assets/post/gato-filhote-tudo-que-voce-precisa-saber-para-cuidar-bem-61aa5b4f5448461cf9e0a54b/filhote-capa.jpg.jpg" alt="">
                    <p>Texto curto sobre o guia prático de gatos.</p>
                </li>
                <li>
                    <span>Guia Prático Sobre Cachorros</span>
                    <img src="data:image/jpeg;base64,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" alt="">
                    <p>Texto curto sobre o guia prático de Cachorros.</p>
                </li>
                <li>
                    <span>Guia Prático Sobre Peixes de Aquário (BETA)</span>
                    <img src="https://www.petz.com.br/blog/wp-content/uploads/2019/03/como-cuidar-do-peixe-beta.jpg" alt="">
                    <p>Texto curto sobre o guia prático de Peixes Beta.</p>
                </li>
            </ul>
        </section>

        <section>
            <h2>Formulário de Contato</h2>
            <form action="#" method="POST">
                @csrf
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Exemplo de Site</p>
    </footer>
</body>
</html>
