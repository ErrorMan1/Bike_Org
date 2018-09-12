
<?php
session_start();
$check_line = isset($_SESSION['line_token']);
?>

@extends('main.head')

@section('main')
<template>
    <v-container>
        <div>
            <v-carousel>
                <v-carousel-item
                    v-for="(item,i) in items"
                    :key="i"
                    :src="item.src"
                ></v-carousel-item>
            </v-carousel>
        </div>
        <div toolbar>
            <v-toolbar>
                <v-toolbar-side-icon></v-toolbar-side-icon>
                <v-toolbar-title>Title</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">
                  <v-btn flat>รายการแข่งขัน</v-btn>
                  <v-btn flat>ติดต่อ</v-btn>
                  <v-btn flat @click="dialog=true">เข้าสู่ระบบ</v-btn>
                  <v-dialog v-model="dialog">
                            <v-card>
                            <v-card-title  class="headline grey lighten-2" primary-title>เข้าสู่ระบบ</v-card-title>
                    
                            <v-flex xs6>
                                <v-card dark color="secondary">
                                                <v-text-field
                                                  v-model="name"
                                                  :rules="nameRules"
                                                  :counter="10"
                                                  label="Name"
                                                  required
                                                ></v-text-field>
                                                <v-text-field
                                                  v-model="email"
                                                  :rules="emailRules"
                                                  label="E-mail"
                                                  required
                                                ></v-text-field>
                                </v-card>
                                <v-btn flat text-center>เข้าสู่ระบบ</v-btn>
                            </v-flex>
                            
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
                    
                            <v-divider></v-divider>
                    
                            <v-card-actions>
                              <v-spacer></v-spacer>
                              <v-btn
                                color="primary"
                                flat
                                @click="dialog = false"
                              >
                                I accept
                              </v-btn>
                            </v-card-actions>
                          </v-card>
                        </v-dialog>
                </v-toolbar-items>
              </v-toolbar>
        </div>
    </v-container>
</template>

@endsection

@section('vue')
<script>
    new Vue({
        el:"#app",
        data(){
            return{
                items:[
                    {
                        src:"https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg"
                    },
                    {
                        src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg'
                    }
                ],
                dialog: false
            }
        },
        methods(){

        },
        mounted() {

        },
    });
</script>
@endsection
