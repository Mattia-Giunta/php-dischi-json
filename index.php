<?php 
// Descrizione

// Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

// Stack
// Html, CSS, VueJS (importato tramite CDN), axios, PHP

// Consigli
// Nello svolgere l’esercizio seguite un approccio graduale.

// Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

// Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

// Bonus
// Al click su un disco, recuperare e mostrare i dati del disco selezionato.





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dischi PHP</title>
</head>
<body data-bs-theme="dark">
   
    <div id="app">


        <main class="text-center position-relative vh-100 ">
    
            <h1>Dischi</h1>
    
    
            <section class="container mt-2z ">
    
                <div class="row row-cols-4 g-2" >
    
                    <div 
                    class=" p-2 col"  
                    v-for="(element,index) in list"
                    :key="index"
                    >
    
                        <div class="card" style="background-color: #112030;">
                            
                            <img :src="element.poster" class="card-img-top" alt="element.title">
        
                            <div class="card-body h-25 ">
        
                                <h5 class="card-title">{{element.title}}</h5>
                                <p class="card-text">{{element.author}}</p>
                                <h4 class="card-text">{{element.year}}</h4>
        
                            </div>

                        </div>

    
                    </div>
    
    
                </div>
    
            </section>

            <section class="position-absolute  w-75 h-75 top-50 start-50 translate-middle "
            style="background-color: rgba(17, 32, 49, 0.89); ">

                <div class="position-absolute top-50 start-50 translate-middle ">

                    <div class="card" >

                        <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg" class="card-img-top" alt="...">

                        <div class="card-body">

                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Authore</p>
                          <p class="card-text">Anno</p>

                        </div>

                    </div>

                </div>


            </section>
    
        </main>
        
    </div>




    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
    
    <!-- link axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- link vuejs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- link mio js -->
    <script src="./js/main.js"></script>
</body>
</html>