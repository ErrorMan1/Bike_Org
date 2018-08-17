<?php
session_start();
$check_line = isset($_SESSION['line_token']);
?>


@extends('main.head')
@section('main')

<pre>
    @{{profileData}}
</pre>
@endsection

@section('vue')
    <script>
        new Vue({
        el:"#app",
        data:{

            profileData:{},

        },
        methods:{

            load(){
                let result =  axios.get('<?=env('link');?>api/profileData')
                .then((r) => {
                    this.profileData = r.data;
                    if(this.profileData == 0){
                        window.location = "<?=env('link');?>";
                    }
                }).catch((e) => {
                    alert('error');
                });
            }
        },
        mounted() {
            this.load();
        },
    });

    </script>
@endsection
