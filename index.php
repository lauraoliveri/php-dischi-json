
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <main id="app">


            <!-- navbar -->
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">
                       <h3>
                        Music
                       </h3>
                    </span>
                </div>
            </nav>

            <!-- Container music cards -->
            <div class="d-flex flex-wrap">

                <!-- Card -->
                <div class="card m-4" style="width: 18rem;" v-for="disc in discs" :key="index">
                    <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                    <div class="card-body">
                        <h4 class="card-title">{{ disc.title }}</h4>
                        <h6>
                            {{ disc.author }} 
                        </h6>
                        <strong>
                            {{ disc.year }}
                        </strong>
                    </div>
                </div>
            </div>

        </main>

        
        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- JS -->
        <script src="js\scripts.js"></script>

    </body>
</html>