<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
  <link rel="stylesheet" href="<?=env('link')?>css/custom.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  
</head>
<body>
  
    
    <div id="app">
    <v-app>
        <v-content>
        @yield('main')
        </v-content>
    </v-app>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
  @yield('vue')
</body>
</html>
