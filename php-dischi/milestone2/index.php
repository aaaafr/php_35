<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue Dischi</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body>

  <div id="app">
    <nav><img src="./dist/img/logo.png" alt=""></nav>


    <div class="disks" v-if="!error">
      <div class="disk" v-for="album in albums">
        <!-- Dati disco -->
        <img :src="album.poster" alt="">
        <h3>{{album.title}}</h3>

        <div class="metadata">
          <div>{{album.author}}</div>
          <div>{{album.year}}</div>
        </div>


      </div>
    </div>
    <div v-else>
      <h3>😱 {{ error}} </h3>
    </div>




  </div>


  <!-- VUE JS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Js file -->
  <script src="./dist/js/app.js"></script>
</body>

</html>