<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />  
   
</head>
<body>
<header class="w-full h-28 p-8 flex items-center justify-center bg-zinc-200">
        <img src="./imgs/logo-escola.png" alt="Logo da Escola Manoel Mano" class="w-36">
      
<span class="absolute text-4xl top-9 right-10 cursor-pointer " onclick="abrir()">
<i class="bi bi-list"></i>
</span>



        <div class=" bg-gray-200 sidebar fixed top-0 bottom-0 
        right-[-300px]
        overflow-y-auto transition-transform duration-300" id="sidebar">
         <div class="flex mt-4 mx-4 space-x-20 ">
            <img src="./imgs/logo-escola.png" alt="" class="w-10 h-10">
 <p>MENU</p> 
 <span class="material-symbols-outlined cursor-pointer" onclick="abrir()">
close
 </span>

         </div>

         <hr class="text-gray-900 mt-3 w-70 mx-2">

         <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-700 texte-white">
         <div class="flex space-x-2 w-full intem-center ">
         <i class="bi bi-house-door-fill"></i>
         <span class="text-[-15px] text-gray-900"><a href="">Hom</a>e</span>   
        </div>
        </div>

            <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-700 texte-white" onclick="SubMenu()">
         <div class="flex space-x-2 w-full intem-center ">
         <i class="bi bi-laptop"></i>
         <span class="text-[15px] text-gray-900">Cursos</span>
        <span class="rotate-180" id="arrow"><i class="bi bi-caret-down"></i></span>
        </div>
        </div>

        <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-800 hidden" id="submenu">
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../cursos/Enfermagem.php">Enfermagem</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../cursos/informatica.php">Informatica</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../cursos/Comercio.php">Comercio</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../cursos/Adm.php">Adiministração</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../cursos/DS.php">Desenvolvimento de sistemas</a></h1>
        </div>



        <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-700 texte-white" onclick="SubMenu2()">
         <div class="flex space-x-2 w-full intem-center ">
         <img src="./imgs/image2.png" alt="" class="w-5 h-5">
         <span class="text-[15px]  text-gray-900">Escola</span>
        <span class="rotate-180" id="arrow2"><i class="bi bi-caret-down"></i></span>
        </div>
        </div>

        <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-800 hidden" id="submenu2">
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="">Grupo Gestor</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../historia/index.php">Ambiente Escolar</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../historia/index.php">Historia</a></h1>
    <h1 class="cursor-pointer p-2 hover:bg-gray-300 rounded-md mt-1"><a href="../processo-seletivo/index.php">Edital</a></h1>
    
        </div>
   
        <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-700 texte-white">
         <div class="flex space-x-2 w-full intem-center ">
         <i class="bi bi-person-gear"></i>
         <span class="text-[-15px] text-gray-900"><a href="">Grupo Desenvolvedor</a></span>   
        </div>
        </div>
       
        <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-700 texte-white">
         <div class="flex space-x-2 w-full intem-center ">
         <i class="bi bi-patch-question-fill"></i>
         <span class="text-[-15px] text-gray-900"><a href="">FAQ</a></span>   
        </div>
        </div>


        </div>
       
    </header>

    
    <div class="flex space-x-8 mx-14 mt-14 w-200 ">
        <img src="./imgs/image.png" alt="" class="w-15 h-15 mt-4">
    <div class="h-25 border-r-5 border-green-700"></div>
    <p class="text-4xl mt-2 ">História <br> EEEP Manoel Mano</p>
    </div>

    <div class="mx-14 mt-14">
      <p>
      A instituição recebe esse nome como homenagem e reconhecimento de um filho para o pai. Manoel Bezerra Lima, conhecido como Manoel Mano, nasceu no ano de 
<br>1889, no município de Crateús, no estado do Ceará. Contraiu matrimônio com a senhora Luzia Bezerra de Pinho. Após o casamento, o casal passou a residir na rua da 
<br>Cruz, atual Rua Frei Vidal, localizada no bairro São José. Dessa união, gerou-se 13 filhos. Manoel, Luís, José, João, Jaime, Felismina, Isaura, Maria José, Mozinha, Rita, 
<br>Maria Helena e Alzira. Utilizou-se da agricultura familiar e da pecuária como forma de sobrevivência. Faleceu no ano de 1975, na cidade de Fortaleza-Ceará.
<br>A denominação desse prédio, reconhece um homem simples, do campo, com característica genuinamente cearense. Parafraseando Euclides da cunha, o sertanejo é, 
<br>antes de tudo, um forte, mesmo com todas as intempéries do espaço, do tempo e dos desafios que era sustentar uma numerosa prole, o Crateuense Manoel Mano, 
<br>em uma perspectiva muito a frente do seu tempo, compreendeu que a educação era um caminho de transformação social e investiu na formação dos filhos.
<br>Dos descendentes, destaca-se Manoel Bezerra de Melo, que tornou-se padre, professor e político brasileiro. Foi prefeito na cidade de Mogi das Cruzes, no estado de 
<br>São Paulo, e posteriormente deputado federal pelos estados de São Paulo e Ceará. Foi fundador e antigo chanceler da Universidade de Mogi das Cruzes.
<br>Durante o seu mandato legislativo, decidiu construir um prédio escolar e fundou o Colégio Manoel Mano em sua cidade natal, homenageando o seu genitor, que tanto 
<br>contribuiu com a sua formação. Anos depois, a instituição passou a ser administrada pelo Governo do Estado do Ceará, e em 2008 iniciou as suas atividades 
<br>educacionais na modalidade de Ensino Médio Integrado à Educação Profissional. Desde então, a EEEP Manoel Mano vem obtendo resultados gratificantes e 
<br>satisfatórios. Em 2011, estava na 125° colocação no Enem, foi a melhor entre as escolas não militares mantidas pelo Governo do Estado. O colégio obteve média 
<br>573,73 no Enem e participação de 83,8% dos alunos do ensino médio. Essas escolas fazem parte de um universo de 238 escolas, que tiveram de 75% a 100% de 
<br>participação de seus alunos inscritos no Enem. No ano 2022, 12 de agosto, a EEEP Manoel Mano foi inaugurada com as estruturas padrões das Escolas Estaduais de 
<br>Educação Profissional, composta por: 12 salas de aula, auditório, biblioteca, anfiteatro, quadra poliesportiva, refeitório, área de vivência, blocos pedagógico e 
<br>administrativo,laboratórios específicos para cursos técnicos oferecidos (informática, administração, comércio e enfermagem), além dos de Ciências e Matemática. A 
<br>unidade de ensino hoje atende até 540 estudantes, em tempo integral, das 7 às 17 horas.
      </p>
    </div>
    

    <div class="mx-14 mt-20 border-l-5 border-green-700 h-13">
          <p class="text-4xl mx-2">Ambiente escolar</p>
    </div>

    <div class="grid grid-cols-3 gap-4 mx-14 mt-14">
    
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 1</p>
    </div>
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 2</p>
    </div>
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 3</p>
    </div>
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 4</p>
    </div>
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 5</p>
    </div>
    <div class="flex flex-col">
        <div class="w-90 h-90 bg-gray-300 rounded-md">
                 </div>
        <p class="text-4xl text-green-700 mx-23 mt-2">Ambiente 6</p>
    </div>
   
    

    </div>


    <script>
        function SubMenu(){
          document.querySelector('#submenu').classList.toggle('hidden');
          document.querySelector('#arrow').classList.toggle('rotate-180');
          

        }

        function SubMenu2(){
          document.querySelector('#submenu2').classList.toggle('hidden');
          document.querySelector('#arrow2').classList.toggle('rotate-180');
          

        }


        function abrir(){
            document.querySelector('#sidebar').classList.toggle('right-[0px]')
        }
    </script>
</body>
</html>