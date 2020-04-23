@extends('layout')
@section('domains')
<section class="domains">
    <h2 class="domains-title">Les trois domaines d'activité ciblés par notre entreprise</h2>
    <p class="domains-presentation"><strong>Les dirigeants</strong> de notre entreprise ont décidé de viser <strong>trois secteurs d'activité</strong> suceptible de déployer la solution : des secteurs de vente propices à la <strong>négociation</strong> et à la <strong>promotion</strong> de <strong>produits</strong> ou de <strong>services</strong></p>
    <p class="domains-intro">Ces domaines sont les suivants :</p>
    <div class="contener-fluid">
        <div class="row">
            <div data-aos="flip-left" data-aos-duration="1000" id="card-ecommerce"
                class="card bg-light text-white border-0 mt-5 col-sm-12 col-md-8 col-lg-8">
                <img src="/img/pictures/ecommerce.jpg" class="card-img" alt="...">
                <div class="card-img-overlay domains-card">
                    <div class="card-header domains-header">
                        <h3 class="card-title">L'E-Commerce</h3>
                    </div>
                    <div class="domain-content">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nisi
                            impedit quia assumenda praesentium non, magnam modi fugit rem quae? Odit dolorum culpa quis
                            laboriosam, sequi aliquam explicabo neque reiciendis.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tempora
                            libero sit laboriosam nobis excepturi eius veniam est quod perspiciatis! Explicabo ad
                            doloremque eius, ea dolore aperiam beatae quasi qui!</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore eaque nisi
                            officiis ab tempore, corrupti ut. Omnis quasi atque aliquam quis qui modi, adipisci magnam
                            dignissimos repellendus temporibus nihil molestias!</p>
                    </div>
                </div>
            </div>
            <div data-aos="flip-right" data-aos-duration="1000" id="card-pointofsale"
                class="card bg-light text-white border-0 mt-5 col-sm-12 col-md-8 col-lg-8">
                <img src="/img/pictures/pointofsale.jpg" class="card-img" alt="...">
                <div class="card-img-overlay card-domains">
                    <div class="card-header domains-header">
                        <h3 class="card-title">Les Points de vente physique</h3>
                    </div>
                    <div class="domain-content">
                        <p class="card-text card-text-domains">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Distinctio nisi impedit quia assumenda praesentium non, magnam modi fugit rem quae? Odit
                            dolorum culpa quis laboriosam, sequi aliquam explicabo neque reiciendis.</p>
                        <p class="card-text card-text-domains">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sunt tempora libero sit laboriosam nobis excepturi eius veniam est quod perspiciatis!
                            Explicabo ad doloremque eius, ea dolore aperiam beatae quasi qui!</p>
                        <p class="card-text card-text-domains">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Dolore eaque nisi officiis ab tempore, corrupti ut. Omnis quasi atque aliquam quis qui modi,
                            adipisci magnam dignissimos repellendus temporibus nihil molestias!</p>
                    </div>
                </div>
            </div>
            <div data-aos="flip-left" data-aos-duration="1000" id="card-costestimation"
                class="bg-light text-white border-0 mt-5 col-sm-12 col-md-8 col-lg-8">
                <img src="/img/pictures/costestimation.jpg" class="card-img" alt="...">
                <div class="card-img-overlay domains-card">
                    <div class="card-header domains-header">
                        <h3 class="card-title">L' Offre Personnalisée</h3>
                    </div>
                    <div class="domain-content">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nisi
                            impedit quia assumenda praesentium non, magnam modi fugit rem quae? Odit dolorum culpa quis
                            laboriosam, sequi aliquam explicabo neque reiciendis.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tempora
                            libero sit laboriosam nobis excepturi eius veniam est quod perspiciatis! Explicabo ad
                            doloremque eius, ea dolore aperiam beatae quasi qui!</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore eaque nisi
                            officiis ab tempore, corrupti ut. Omnis quasi atque aliquam quis qui modi, adipisci magnam
                            dignissimos repellendus temporibus nihil molestias!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection