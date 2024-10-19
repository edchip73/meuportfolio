<?php
    $itens = [
        ['href'=>'https://x.com/edchip73', 'src'=> 'img/twitter.png', 'alt'=> 'Twitter Logo'],    
        ['href'=>'https://web.facebook.com/eduardosouza', 'src'=> 'img/facebook.png', 'alt'=> 'Facebook Logo'], 
        ['href'=>'https://www.linkedin.com/in/carlos-eduardo-de-souza-santos-4273b468/', 'src'=> 'img/linkedin.png', 'alt'=> 'Linkedin Logo'], 
        ['href'=>'https://www.instagram.com/carloseduardodesouzasantos5', 'src'=> 'img/instagran.png', 'alt'=> 'Instagram Logo'], 
        ['href'=>'https://github.com/edchip73', 'src'=> 'img/github.png', 'alt'=> 'Github Logo'], 
        ['href'=>'https://www.luknet.com.br', 'src'=> 'img/net.png', 'alt'=> 'NET Logo'],
    ];
?>
<section class="flex gap-x-3">
        <!--Titulo e Descrição-->
        <div class="w-2/3">
            <h1 class="text-3xl font-bold">Oi, meu nome é Eduardo</h1>
            <p class="text-xl leading-6 mt-6">
                Falando um pouco sobre mim, sou um profissional da área de TI, atuando como Supervisor de TI em um grupo de empresas no ramo de concessionárias de automóveis.
                Gosto de estudar programação e minha linguagem preferida é o PHP, o qual pretendo me especializar em breve.
                
            </p>
            <p>
                <!-- links de redes sociais-->
                 <ul class="flex gap-x-3 mt-3">

                 <?php foreach ($itens as $item):?>
                    <li><a href="<?=$item['href']?>" target="_blank">

                    <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>">
                       
                    </a>
                </li>
                <?php endforeach; ?>

                 </ul>
            </p>
        </div>
                <!-- imagem -->
        <div class="w-1/3 flex items-center justify-center">
            <div>
                <img class="h-60 -mt-6 hover:animate-pulse rounded-lg" src="img/foto.jpeg" alt="Eduardo">
            </div>
        </div>         
    </section>