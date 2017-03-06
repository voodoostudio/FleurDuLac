@extends('main')

@section('title',trans('lang.contact'))

@section('current_page')
    <?php $current_page = 'contact'?>
@endsection

@section('content')

    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/contact.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{ trans('lang.title_contact') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_contact') }}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('contact.locale') }}">{{ trans('lang.title_contact') }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

    <!--Contact Section-->
    <section id="contact-section">
        <div class="inner-container container">
            <div class="t-sec">
                <div class="content">
                    <p>{{ trans('lang.description_contact_1') }}</p>
                    <p>{{ trans('lang.description_contact_2') }}</p>
                    <p>{{ trans('lang.description_contact_3') }}</p>
                    <!--						Chers clients, Savez-vous qu’il est toujours mieux de réserver son séjour par téléphone ou par courriel directement à l’hôtelier plutôt que de passer via des sites de réservation en ligne comme Booking, Expedia, Venere… Sachez que ces sites de réservation en ligne prennent de 15 à 17% de commission ! Si vous réservez directement auprès de nous, vous pouvez bénéficier d’un surclassement ou d’un apéritif offert ! Il suffit de nous dire que vous préférez réserver directement avec nous plutôt que par Booking ou autres sites. En évitant de reverser ces énormes commissions à des prestataires intermédiaires inutiles, vous nous aidez à rénover et à améliorer nos établissements pour mieux vous recevoir, tout comme mieux rémunérer notre personnel à votre service !-->
                </div>

                <div class="contact-info">
                    <div class="contact-inf-box">
                        <div class="icon-box">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="text">
                            Rue de Lausanne 70 <br>
                            CH - 1110 Morges
                        </div>
                    </div>
                    <div class="contact-inf-box">
                        <div class="icon-box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text">
                            <a href="info:hotel@fleur-du-lac.ch" style="color: white">info@fleur-du-lac.ch</a>
                        </div>
                    </div>
                    <div class="contact-inf-box">
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            +41 21 811 5 811
                        </div>
                    </div>
                </div>
            </div>

            <div class="b-sec clearfix">
                <div class="contact-form col-md-6">
                    <form name="contactForm" action="{{ route('contact.post') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="field-row">
                            <input id="name" name="name" type="text" placeholder="{{ trans('lang.name') }}">
                        </div>
                        <div class="field-row">
                            <input id="phone" name="phone" type="text" placeholder="{{ trans('lang.phone') }}">
                        </div>
                        <div class="field-row">
                            <input id="email" name="email" type="email" placeholder="{{ trans('lang.e_mail') }}">
                        </div>
                        <div class="field-row">
                            <textarea id="message" name="message" placeholder="{{ trans('lang.your_message') }}"></textarea>
                        </div>
                        <div class="field-row">
                            <input type="submit" value="{{ trans('lang.send') }}">
                        </div>
                    </form>
                </div>
                <div id="google-map" class="col-md-6" data-marker="/img/marker.svg"></div>
            </div>
        </div>
    </section>
    <!--End of Contact Section-->

@endsection

@section('scripts')

    <script>

        $(document).ready(function(){

            $('form[name="contactForm"]').validate({

                rules:{
                    name:{
                        required:true,
                        minlength:2
                    },

                    phone:{
                        required:true,
                        number:true
                    },

                    email:{
                        required:true,
                        email:true
                    },
                    message:"required"
                },
                messages:{
                    name:{
                        minlength:"Your name must consist at least 2 characters"
                    },

                    phone:{
                        number:"Must be only digits"
                    },

                    email:{
                        email:"Please provide a valid email address"
                    }
                },

                 submitHandler: function(form) {
                 form.submit();
                 }

            })
        })

    </script>

@endsection