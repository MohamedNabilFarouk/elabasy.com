@extends('blades.master')
@section('content')


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

   <!-- Page Content -->
   <main class="page-content">



<!-- Contact Area -->
<div class="tm-section tm-contact-area tm-padding-section bg-white">
    <div class="container">
        <div class="tm-contact-blocks">
            <div class="row mt-30-reverse justify-content-center">

                <!-- Contact block -->
                <div class="col-lg-4 col-md-6  mt-30">
                    <div class="tm-contact-block text-center">
                        <i class="ion-android-call"></i>
                        <h6>{{trans('index.call_us')}}</h6>
                        <p>{{trans('index.phone')}} : <a href="tel:{{$phone[0]->value}}">{{$phone[0]->value}}</a></p>

                    </div>
                </div>
                <!--// Contact block -->

                <!-- Contact block -->
                <div class="col-lg-4 col-md-6  mt-30">
                    <div class="tm-contact-block text-center">
                        <i class="ion-location"></i>
                        <h6>{{trans('index.our_location')}}</h6>
                        <p>{{$add}}</p>
                    </div>
                </div>
                <!--// Contact block -->

                <!-- Contact block -->
                <div class="col-lg-4 col-md-6  mt-30">
                    <div class="tm-contact-block text-center">
                        <i class="ion-email"></i>
                        <h6>{{trans('index.email')}}</h6>
                        <p><a href="mailto:{{$email[0]->value}}">{{$email[0]->value}}</a></p>

                    </div>
                </div>
                <!--// Contact block -->

            </div>
        </div>

        <div class="tm-contact-forms tm-padding-section-top">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="tm-sectiontitle text-center">
                        <h3>{{trans('index.send_message')}}</h3>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form id="" action="" class="tm-contact-forminner tm-form" method="POST">
                        @csrf
                        <div class="tm-form-inner">
                            <div class="tm-form-field tm-form-fieldhalf">
                                <label for="contact-form-name">{{trans('index.name')}}</label>
                                <input type="text" id="contact-form-name" placeholder="Your name here"
                                    name="name" required>
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <label for="contact-form-email">{{trans('index.email')}}</label>
                                <input type="email" id="contact-form-email" placeholder="surose@example.com"
                                    name="email" required>
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <label for="contact-form-phone">{{trans('index.phone')}}</label>
                                <input type="text" id="contact-form-phone"
                                    placeholder="Your phone number here" name="phone" required>
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <label for="contact-form-subject">{{trans('index.subject')}}</label>
                                <input type="text" id="contact-form-subject" placeholder="Your subjert"
                                    name="subject">
                            </div>
                            <div class="tm-form-field">
                                <label for="contact-form-message">{{trans('index.message')}}</label>
                                <textarea cols="30" rows="5" id="contact-form-message"
                                    placeholder="Write your message" name="message"></textarea>
                            </div>
                            <div class="tm-form-field text-center">
                                <button type="submit" name="submit" class="tm-button tm-button-block">{{trans('index.send_message')}}</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messages"></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--// Contact Area -->

</main>
<!--// Page Content -->




@stop
