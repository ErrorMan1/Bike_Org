<?php
if(!$check_line){
    ?>
        <a href="https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1596406680&redirect_uri=http://localhost/line/public/line/&state=rlli2b9eqr2mvll2a0cnieo9p5">เข้าสู่ระบบผ่าน Line</a>
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
<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>


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