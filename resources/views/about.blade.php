@extends('layout')
@section('about')
<section class="about">
    <h1 class="about-title">Negopricing est un médiateur de prix:</h1>
    <article class="negochart-group">
        <div class="background-logo-container">
            <img class="background-logo img-fluid" src="/img/logos/svg/negopricing-logo-pure-gray.svg"
                alt="logo de negopricing">
        </div>
        <div class="negochart-explainations">
            <p data-aos="fade-right" data-aos-duration="2000" class="negochart-text">Notre entreprise se positionne
                comme un intermédiaire de prix entre un <strong class="buyer-emphasis">acheteur</strong> et un <strong
                    class="seller-emphasis">vendeur</strong>.</p>
            <p data-aos="fade-up" data-aos-duration="2000" class="negochart-text">Nous avons pour objectif de vous
                permettre de trouver <strong>simplement</strong> et <strong>rapidement</strong> un accord sur
                <strong>vos prix</strong> en prenant en compte l'aspect negociatif et communicatif de ce dernier.</p>
            <p data-aos="fade-left" data-aos-duration="2000" class="negochart-text">Par le biais de notre application
                qui automatise le rapport Acheteur/Vendeur, vous vous épargnez les aléas de planification de rencontres
                que nécessite une négociation de vive voix .</p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="2000" class="negochart-container">
            <div class="container">
                <canvas id="myChart" height="100"></canvas>
            </div>
        </div>
    </article>
    <article class="roles">
        <h2 class="roles-title">Les Roles au cours de la negociation</h2>
        <div class="role seller">
            <div class="row seller-group">
                <div class="col-md-6">
                    <div>
                        <img data-aos="fade-left" data-aos-duration="2000" alt="seller" class="img-fluid seller-img"
                            src="/img/pictures/seller.jpg" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
                    <div class="seller-content">
                        <h3 class="seller-title">Le Vendeur</h3>
                        <p class="margin-top-s seller-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque harum voluptatum tempore quasi in. In, voluptatum. Eligendi, accusantium excepturi
                            tempora minus nesciunt eum amet distinctio quasi totam quo, natus vel.</p>
                        <p class="margin-top-s seller-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Debitis perferendis animi, provident adipisci sint consequatur numquam repellat blanditiis
                            ratione cupiditate tempore neque voluptas laboriosam nostrum, amet voluptatum soluta, itaque
                            aperiam.</p>
                        <p class="margin-top-s seller-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Suscipit velit laboriosam harum deserunt odio nemo cupiditate voluptatibus vitae, reiciendis
                            aperiam magni numquam alias, beatae quibusdam voluptatum, quam placeat aliquam. Tempore.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="role buyer">
            <div class="row buyer-group">
                <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
                    <div class="buyer-content">
                        <h3 class="buyer-title">L'Acheteur</h3>
                        <p class="margin-top-s buyer-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Nobis ea soluta, repellat est commodi facere autem error quae rerum delectus, distinctio sed
                            nemo! Laborum quis blanditiis exercitationem placeat sequi minima?</p>
                        <p class="margin-top-s buyer-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto a alias suscipit. Error
                            libero sit illum ratione soluta tempore voluptatum, aliquid fugit quod, illo culpa
                            reprehenderit sapiente officiis a itaque?
                        </p>
                        <p class="margin-top-s buyer-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Alias architecto quisquam harum! Doloremque error id assumenda. Repellendus culpa quam ipsa.
                            Cumque doloremque velit ipsum neque saepe id ut architecto. Perferendis?</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <img data-aos="fade-right" data-aos-duration="2000" alt="buyer" class="img-fluid buyer-img"
                            src="/img/pictures/buyer.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="principles">
        <h2 class="principles-title">Les Principes de Push/Pull</h2>
        <div class="principles-cards">
            <div class="card card-push">
                <div class="card-header push-header">
                    <h3 class="push-title">Le Push</h3>
                </div>
                <figure class="push-illustration">
                    <img data-aos="fade-right" data-aos-duration="2000" class="img-push img-fluid"
                        src="/img/logos/png/push.png" alt="logo push">
                    <figcaption data-aos="fade-right" data-aos-duration="2000" class="push-subtitle ml-4">" Lorsque le
                        vendeur est à l'initiative de la négocition on parle de Push. "</figcaption>
                </figure>
                <div class="card-body push-body">
                    <p class="push-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, dolorum
                        id animi corrupti molestias vitae repudiandae temporibus, delectus doloribus minima fugit
                        accusamus veritatis exercitationem esse adipisci debitis, explicabo ducimus nisi!</p>
                </div>
            </div>
            <div class="card card-pull">
                <div class="card-header pull-header">
                    <h3 class="pull-title">Le Pull</h3>
                </div>
                <figure class="pull-illustration">
                    <img data-aos="fade-left" data-aos-duration="2000" class="img-pull img-fluid"
                        src="/img/logos/png/pull.png" alt="logo pull">
                    <figcaption data-aos="fade-left" data-aos-duration="2000" class="pull-subtitle ml-4">" À contrario,
                        lorsque c'est l'acheteur qui lance la négociation on parle alors de Pull. "</figcaption>
                </figure>
                <div class="card-body pull-body">
                    <p class="pull-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente
                        magnam rem, illum repellat doloremque maxime sequi nemo fuga iusto, fugit cupiditate minus nisi
                        nostrum, repudiandae natus esse! Doloribus, eum harum.</p>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection