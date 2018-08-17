<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="<?=env('link')?>css/custom.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
        <div class="w3-bar blueONblue">
                <a href="#" class="w3-bar-item w3-button">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small">Link 2</a>
                <?php
                if(!$check_line){
                    ?>
                        <a class="w3-bar-item w3-button w3-hide-small w3-right" href="https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1596406680&redirect_uri=http://localhost/line/public/line/&state=rlli2b9eqr2mvll2a0cnieo9p5">Line Login</a>
                    <?php
                }else{
                    $profile =$_SESSION['line_profile'];
                    ?>
                     <div class="w3-dropdown-hover w3-right">
                            <button class="w3-button">{{$profile['displayName']}}</button>
                            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                              <a href="#" class="w3-bar-item w3-button">Link 1</a>
                              <a href="#" class="w3-bar-item w3-button">Link 2</a>
                              <a href="<?=env('link')?>logout" class="w3-bar-item w3-button">ออกจากระบบ</a>
                            </div>
                        </div>
                    <?php
                }
                ?>
                <a   href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
             </div>


              <div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
                  <a href="#" class="w3-bar-item w3-button">หน้าแรก</a>
                <a href="#" class="w3-bar-item w3-button">แก้ไขข้อมูล</a>
                <a href="#" class="w3-bar-item w3-button">รายการที่สมัคร</a>
                <?php
                if(!$check_line){
                    ?>
                        <a   class="w3-bar-item w3-button w3-hide-small w3-right"  href="https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1596406680&redirect_uri=http://localhost/line/public/line/&state=rlli2b9eqr2mvll2a0cnieo9p5">ออกจากระบบ</a>
                    <?php
                }else{
                    ?>

                    <?php
                }
                ?>
              </div>

              <script>
                function myFunction() {
                            var x = document.getElementById("demo");
                            if (x.className.indexOf("w3-show") == -1) {
                                x.className += " w3-show";
                            } else {
                                x.className = x.className.replace(" w3-show", "");
                            }
                        }
              </script>
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
