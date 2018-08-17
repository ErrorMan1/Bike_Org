
<?php
session_start();
$check_line = isset($_SESSION['line_token']);
?>

@extends('main.head')

@section('main')

@endsection

@section('vue')
<script>
    new Vue({
        el:"#app",
        data:{

        },
        methods:{

        },
        mounted() {

        },
    });
</script>
@endsection
