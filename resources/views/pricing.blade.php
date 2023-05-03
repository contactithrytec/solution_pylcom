@extends('master')

@section('content')

    <!--pricing with switch section start-->
    <section class="pricing-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Tarifs</h2>
                        <p class="lead">
                            Un plan qui correspond le mieux à vos besoins.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-md-7">
                    <div class="text-center mb-5 radio-box-wrap billingCycle">
                        <div class="single-radio-box">
                            <input name="billingPlan" id="monthly-plan" value="monthly" class="radio" type="radio" checked>
                            <label for="monthly-plan"><span class="custom-check"></span> Nos Tarifs </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Gratuit <span class="badge text-white bg-success">Gratuit </span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">Gratuit pour<span>:durée</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-success">✔ 1</span> Sites commerciaux</li>
                                <li><span class="text-success">✔ 1</span> Utilisateurs</li>
                                <li><span class="text-success">✔ 10</span> Des produits</li>
                                <li><span class="text-success">✔ 10</span> Factures</li>
                            </ul>
                            <a href="https://demo.pylcom.app/business/register?package=1" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Basic <span class="badge color-1 color-1-bg">Payant</span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">DA 20 000.00<span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Sites commerciaux</li>
                                <li><span class="text-danger">✔ 2</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> Illimité Des produits</li>
                                <li><span class="text-danger">✔ </span> Illimité Factures</li>
                            </ul>
                            <a href="https://demo.pylcom.app/business/register?package=2" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Standard <span class="badge color-1 color-1-bg">Payant</span></h5>

                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">DA 35 000.00 <span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Sites commerciaux</li>
                                <li><span class="text-danger">✔ 8</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> Illimité Des produits</li>
                                <li><span class="text-danger">✔ </span> Illimité Factures</li>
                            </ul>
                            <a href="https://demo.pylcom.app/business/register?package=3" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Professionnel <span class="badge color-1 color-1-bg">Payant</span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">DA 55 000.00<span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Sites commerciaux</li>
                                <li><span class="text-danger">✔ 8</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> Illimité Des produits</li>
                                <li><span class="text-danger">✔ </span> Illimité Factures</li>
                                <li><span class="text-danger">✔ </span> Module Crm</li>
                            </ul>
                            <a href="https://demo.pylcom.app/business/register?package=4" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="support-cta mt-5">
                        <h5 class="mb-1 d-flex align-items-center justify-content-center"><span class="ti-loop color-primary mr-3 icon-sm"></span>Choisissez votre  <a href="#" class="ml-2">plans de pylcom</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->


@endsection
