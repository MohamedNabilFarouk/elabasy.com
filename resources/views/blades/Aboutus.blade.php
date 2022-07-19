@extends('blades.master')
@section('content')


<!-- Page Content -->
       <main class="page-content">

<?php
           // echo App::getLocale();
            if(App::getLocale() === 'ar'){
               
                $ph=$phone[0]->ar;
                $add=$address[0]->ar;
                $e=$email[0]->ar;
                $abd=$aboutdes[0]->ar;
                 $abt=$abuttitle[0]->ar;
               // echo $ph;
            }else{
                $ph=$phone[0]->value;
                $add=$address[0]->value;
                $e=$email[0]->value;
                 $abd=$aboutdes[0]->value;
                  $abt=$abuttitle[0]->value;
            }
            
            ?>

<!-- Aboout Area -->
<div class="tm-about-area tm-padding-section bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="tm-about-image">
                    <img src="{{asset('/images/logo.png')}}" alt="about image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tm-about-content">
                    <h4>{{$abt}}</h4>

                    <p>{{$abd}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!--// Aboout Area -->





</main>
<!--// Page Content -->
@stop
