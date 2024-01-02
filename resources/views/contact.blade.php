@extends('baseContact')
@section('title', 'Nous contactez')

@section('content')

    <section class="contact">
        <div class="contact-title">
            <h1>Contactez-nous</h1>
        </div>

        <div class="contactFlex">
            <div class="contactInfo">
                <p>Pour toute demande d'information, de devis ou de prestation, n'hesitez pas à prendre contact avec notre groupe par téléphone. Nous sommes à votre disposition tout au long de la semaine pour discuter avec vous afin d'intégrer vos événements et festivals, ou de produire nos perfomances musicales et chorégraphiques dans le cadre d'un concert.</p>

                <p>Vous pouvez également nous joindre en utilisant le formulaire de contact à votre disposition ci-contre. Nous vous répondrons avec soin dans les plus brefs delais.</p>

                <div class="nos_cordonnees">
                    <h1>Coordonnées Knalson Music</h1>
                    
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <p class="footerParagrapheRouge">06 66 12 31 79</p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <p class="footerParagrapheRouge">duckgeoffroy@yahoo.com</p>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <p>3, rue d'Arras 44800 Saint-Herblain</p>
                    </div>
                </div>
            </div>
            
            <div class="formulaire__de__contact">
                <div class="formError-js"></div>

                <form action="" method="post" onsubmit="validateForm(event)">
                    @csrf
                    @include('shared.input', ['class' => 'input', 'label' => 'Nom(s) et prénom(s)', 'name' => 'username'])
                    @include('shared.input', ['class' => 'input', 'label' => 'Téléphone', 'name' => 'number_phone'])
                    @include('shared.input', ['type' => 'email', 'class' => 'input', 'label' => 'Adresse mail', 'name' => 'email'])
                    @include('shared.input', ['type' => 'email', 'class' => 'input', 'label' => 'Adresse mail (confirmer)', 'name' => 'email_confirmed'])
                    @include('shared.input', ['type' => 'textarea', 'class' => 'textarea', 'label' => 'Votre message', 'name' => 'message'])
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

@endsection