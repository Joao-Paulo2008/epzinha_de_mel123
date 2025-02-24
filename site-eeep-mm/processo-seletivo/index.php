<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>EEEP Manoel Mano - Site Oficial</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
      
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
        <img src="./imgs/image.png" alt="" class="w-15 h-15 mt-5">
    <div class="h-25 border-r-5 border-green-700"></div>
    <p class="text-4xl mt-2 ">Processo seletivo - <br> EEEP Manoel Mano 2024/2025</p>
   
    </div>

    <div class="mx-20 mt-14">
      <p class="text-lg">
     
          Com grande alegria que divulgamos a população dos Sertões de Crateús o processo seletivo para novatos da 
      <br>Escola Estadual de Educação Profissional Manoel Mano, as inscrições para interessados começam no dia 29 de 
      <br>Novembro até o dia 08 de Dezembro de 2023.

      <br><br>
Abaixo segue o edital com mais detalhes e a arte de divulgação com a documentação necessária.
      </p>

    
      <div class="bg-green-700 hover:bg-green-800 text-white font-bold rounded cursor-pointer w-55 h-8 mt-6 mx-5">
    <p class="mt-4 mx-12 text-xl">Baixar edital</p>
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