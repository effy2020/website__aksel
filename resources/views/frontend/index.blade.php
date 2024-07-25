@extends('frontend.main_master')
@section('main')

@section('title')
Home | Aksel Transfert 
@endsection

<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->

<!-- services-area -->
<section class="services-area">
    <div class="container custom-container">
        <div class="row align-items-center justify-content-center section-title-margin">
            <div class="col-xl-12 text-center">
                <span class="sub-title">Nos Services</span>
                <h2 class="title">Des Solutions de Déménagement Adaptées à Vos Besoins</h2>
            </div>
        </div>
        <div class="row gx-0 services__active justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                <div class="services__item text-center">
                    <div class="services__thumb mb-3">
                        <img src="{{ asset('frontend/assets/img/type/particulier.jpg') }}" alt="Déménagement Particuliers" style="width: 380px; height: 220px;" class="img-fluid">

                    </div>
                    <div class="services__content">
                        <h3 class="title">Déménagement Particuliers</h3>
                        <p>Des services sur mesure pour vos besoins de déménagement personnel.</p>
                        <a href="#" class="btn border-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                <div class="services__item text-center">
                    <div class="services__thumb mb-3">
                    <img src="{{ asset('frontend/assets/img/type/entreprise.jpg') }}" alt="Déménagement Entreprise" style="width: 380px; height: 220px;" class="img-fluid">
                    </div>
                    <div class="services__content">
                        <h3 class="title">Déménagement Entreprises</h3>
                        <p>Des solutions efficaces pour le transfert de vos bureaux et équipements.</p>
                        <a href="#" class="btn border-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->

<!-- pourquoi-nous-choisir-area -->
<section class="choisir-area">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h2 class="title">Pourquoi Nous Choisir ?</h2>
                <div class="choisir-content">
                    <h3 class="subtitle">Meilleur service</h3>
                    <p>Notre mission est d’attirer et de fidéliser les clients en fournissant les meilleures solutions de transport de leur catégorie et en favorisant une culture rentable et disciplinée de sécurité, de service et de confiance.</p>
                    
                    <h3 class="subtitle">Réputation</h3>
                    <p>Nous avons établi une forte présence dans l’industrie du transport. Nos services primés se forgent une réputation de qualité et d’excellence que peu de gens peuvent rivaliser.</p>
                    
                    <h3 class="subtitle">Sûreté et sécurité</h3>
                    <p>La sécurité de nos employés, de nos clients et du public automobile restera toujours notre priorité dans toutes les politiques, procédures et programmes qui régissent notre entreprise.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pourquoi-nous-choisir-area-end -->

<!-- contact-area -->
<section class="homeContact homeContact__style__two contact-area-margin">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Dites bonjour</span>
                        <h2 class="title">Des questions ? N'hésitez pas <br> à nous contacter</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>Vous avez besoin d’assistance ? Notre équipe est disponible pour répondre à toutes vos questions.</p>
                        <h2 class="mail"><a href="mailto:Info@akseltrasfert.com">Info@akseltrasfert.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="#">
                            <input type="text" placeholder="Entrez votre nom*">
                            <input type="email" placeholder="Entrez votre e-mail*">
                            <input type="number" placeholder="Entrez votre numéro*">
                            <textarea name="message" placeholder="Entrez votre message*"></textarea>
                            <button type="submit">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
