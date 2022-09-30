<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="flex justify-center items-center h-screen bg-[url('img/yy-hill.png')] bg-cover bg-no-repeat pixelated">
        <div class="bg-pink-100 rounded shadow-lg p-4">
            <div class="flex justify-center mb-5 mt-5">
                <img src="img/kirby-fish-kss.gif" alt="" class="h-20">
            </div>
            <h1 class="text-pink-400 text-2xl md:text-4xl font-bold mb-10 text-center">Visualização de Cadastros</h1>
            <table class="bg-white border border-black">
                <thead class="font-bold">
                    <tr>
                        <td class="border border-black text-center">Nome</td>
                        <td class="border border-black text-center">Email</td>
                        <td class="border border-black text-center">Senha</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            include 'conecta.php';
            
                            $query = "SELECT * FROM usuario;";
            
                            $resultado = $connect->query($query);
                            while ($linha = $resultado->fetch_assoc()) {
                                echo "<td class='border border-black p-2'>" . $linha['nome'] . "</td>";
                                echo "<td class='border border-black p-2'>" . $linha['email'] . "</td>";
                                echo "<td class='border border-black p-2'>" . $linha['senha'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                </tbody>
            </table>
            <div class="flex items-center py-2 px-1 mt-5">
                <a href="./">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 stroke-pink-400 hover:stroke-pink-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                </a>
            </div>   
        </div>

    </main>

</body>
</html>