<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu Portfólio | Eduardo</title>
</head>

<body class="bg-slate-900 text-gray-200">
<!-- Header -->    
    <?php include('./componentes/header.php');?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
<!-- Hero -->
    <?php include('./componentes/hero.php');?>
    <section class="space-y-3 py-6">
<h2 class="text-2xl font-bold">Meus Certificados</h2>
<!-- Projeto -->
<!-- Projetos -->
    <?php include('./componentes/projetos.php');?>

 </section>
</main>
<!-- Footer -->
    <?php include('./componentes/footer.php');?>

</body>
</html>