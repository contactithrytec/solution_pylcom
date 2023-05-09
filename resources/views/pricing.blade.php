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
                            Un plan qui correspond mieux à vos besoins.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-md-7">
                    <div class="text-center mb-5 radio-box-wrap billingCycle">
                        <div class="single-radio-box">
                            <input name="billingPlan" id="monthly-plan" value="monthly" class="radio" type="radio" checked>
                            <label for="monthly-plan"><span class="custom-check"></span> Gratuit</label>
                        </div>
                        <div class="single-radio-box">
                            <input name="billingPlan" id="yearly-plan" value="yearly" class="radio" type="radio">
                            <label for="yearly-plan"><span class="custom-check"></span> Payant</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 col-md-12 col-12 mb-3 monthly-price">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Gratuit <span class="badge text-white bg-success">Gratuit </span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            {{--
                                                        <div class="price text-center mb-0 monthly-price">Gratuit pour<span>:durée</span></div>
                            --}}
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-success">✔ 1</span> Stock</li>
                                <li><span class="text-success">✔ 1</span> Utilisateurs</li>
                                <li><span class="text-success">✔ 10</span> Des produits</li>
                                <li><span class="text-success">✔ 10</span> Factures</li>
                                <li><span class="text-success">✔ </span> Gestion des dépenses</li>
                                <li><span class="text-success">✔ </span> Notifications par mail</li>
                                <li><span class="text-success">✔ </span> Gestion des contacts</li>
                                <li><span class="text-success">✔ </span> Rapport détaillé</li>
                                <li><span class="text-success">✔ </span> Sauvegarde </li>
                                <li><span class="text-success">✔ </span> Support</li>
                            </ul>
                            <a href="https://app.pylcom.app/business/register?package=1" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3 yearly-price">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Basic <span class="badge color-1 color-1-bg">Payant</span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 yearly-price">28 000.00 DA<span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Stock </li>
                                <li><span class="text-danger">✔ 2</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> produits Illimités </li>
                                <li><span class="text-danger">✔ </span> Factures illimitées </li>
                                <li><span class="text-danger">✔ </span>  Envoie de facture par e-mail</li>
                                <li><span class="text-danger">✔ </span>  Gestion des dépenses</li>
                                <li><span class="text-danger">✔ </span>  Notifications par mail </li>
                                <li><span class="text-danger">✔ </span>  Gestion des contacts</li>
                                <li><span class="text-danger">✔ </span>  Gestion des documents</li>
                                <li><span class="text-danger">✔ </span>  Gestion des rôles</li>
                                <li><span class="text-danger">✔ </span>  Livre blanc</li>
                                <li><span class="text-danger">✔ </span>  Bilan</li>
                                <li><span class="text-danger">✔ </span>  Flux de trésorerie</li>
                                <li><span class="text-danger">✔ </span>  Rapport de stock</li>
                                <li><span class="text-danger">✔ </span>  Rapport de compte de paiement</li>
                                <li><span class="text-danger">✔ </span>  Sauvegarde </li>
                                <li><span class="text-danger">✔ </span>  Support</li>
                                <li><br></li>
                            </ul>
                            <a href="https://app.pylcom.app/business/register?package=2" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3 yearly-price">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Standard <span class="badge color-1 color-1-bg">Payant</span></h5>

                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 yearly-price">45 000.00 DA<span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Stock </li>
                                <li><span class="text-danger">✔ 5</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> produits Illimités</li>
                                <li><span class="text-danger">✔ </span> Factures illimitées </li>
                                <li><span class="text-danger">✔ </span>  Envoie de facture par e-mail</li>
                                <li><span class="text-danger">✔ </span>  Gestion des dépenses</li>
                                <li><span class="text-danger">✔ </span>  Notifications par mail </li>
                                <li><span class="text-danger">✔ </span>  Gestion des contacts</li>
                                <li><span class="text-danger">✔ </span>  Gestion des documents</li>
                                <li><span class="text-danger">✔ </span>  Gestion des rôles</li>
                                <li><span class="text-danger">✔ </span>  Livre blanc</li>
                                <li><span class="text-danger">✔ </span>  Bilan</li>
                                <li><span class="text-danger">✔ </span>  Flux de trésorerie</li>
                                <li><span class="text-danger">✔ </span>  Rapport de stock</li>
                                <li><span class="text-danger">✔ </span>  Rapport de compte de paiement</li>
                                <li><span class="text-danger">✔ </span>  Sauvegarde </li>
                                <li><span class="text-danger">✔ </span>  Support</li>
                                <li><br></li>
                            </ul>
                            <a href="https://app.pylcom.app/business/register?package=3" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3 yearly-price">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-5">
                            <h5 class="mb-0">Professionnel <span class="badge color-1 color-1-bg">Payant</span></h5>
                        </div>
                        <div class="card-header pb-4 border-0 pricing-header">
                            <div class="price text-center mb-0 yearly-price">65 000.00 DA<span>/Années</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span class="text-danger">✔ 1</span> Stock </li>
                                <li><span class="text-danger">✔ 5</span> Utilisateurs</li>
                                <li><span class="text-danger">✔ </span> produits Illimités</li>
                                <li><span class="text-danger">✔ </span> Factures illimitées </li>
                                <li><span class="text-danger">✔ </span>  Envoie de facture par e-mail</li>
                                <li><span class="text-danger">✔ </span>  Gestion des dépenses</li>
                                <li><span class="text-danger">✔ </span>  Notifications par mail </li>
                                <li><span class="text-danger">✔ </span>  Gestion des contacts</li>
                                <li><span class="text-danger">✔ </span>  Gestion des documents</li>
                                <li><span class="text-danger">✔ </span>  Gestion des rôles</li>
                                <li><span class="text-danger">✔ </span>  Livre blanc</li>
                                <li><span class="text-danger">✔ </span>  Bilan</li>
                                <li><span class="text-danger">✔ </span>  Flux de trésorerie</li>
                                <li><span class="text-danger">✔ </span>  Rapport de stock</li>
                                <li><span class="text-danger">✔ </span>  Rapport de compte de paiement</li>
                                <li><span class="text-danger">✔ </span>  Sauvegarde </li>
                                <li><span class="text-danger">✔ </span>  Support</li>
                                <li><span class="text-danger">✔ </span> Module <b>CRM</b></li>
                            </ul>
                            <a href="https://app.pylcom.app/business/register?package=4" class="btn primary-solid-btn mb-3" target="_blank">Acheter maintenant</a>
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
