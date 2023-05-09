<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-overlay" {{--style="background-color:#ffffff;border-radius: 20px;border: 1px solid #035ded"--}}>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <img src="{{asset('img/logo_pylcom.png')}}" alt="" style="width:150px;height: auto">
                                <ul class="list-inline security-icon-list">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" >
                                                <img src="{{asset('img/pylcom/phone.png')}}" width="20" alt="wp hosting" class="mr-1" />
                                                +213 542 39 61 79</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" >
                                                <img src="{{asset('img/pylcom/email.png')}}" width="20" alt="wp hosting" class="mr-1" />
                                                 contact@pylcom.app
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" >
                                                <img src="{{asset('img/pylcom/localisation.png')}}" width="20" alt="wp hosting" class="mr-1" />
                                                Résidence les palmiers, Beni messous,Alger</a>
                                        </li>

                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">Services</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('main')}}">Fonctionnalités de PylCom</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('estimate')}}">Contactez_Nous</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-md-4 col-sm-6">
                             <div class="footer-nav-wrap text-white">
                                 <h4 class="text-white">Solutions</h4>
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">About</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">Affiliates</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">Blog</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">Careers</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">Community</a>
                                     </li>
                                </ul>

                            </div>
                        </div>--}}
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">Liens</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://ithrytec.com/" target="_blank">ithrytec.com</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://app.pylcom.app/" target="_blank">app.pylcom.app</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about')}}" >À propos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('pricing')}}" >Tarifs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
  <div class="footer-bottom gray-light-bg py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2023. All
                        rights reserved by
                        <a href="https://app.pylcom.app/" target="_blank">PylCom</a>
                    </p>
                </div>
                {{--<div class="col-md-7 col-lg-6">
                    <div class="payment-method text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="{{asset('img/payment-amex.svg')}}" alt="amex" width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('img/payment-visa.svg')}}" alt="visa" width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('img/payment-mastercard.svg')}}" alt="mastercard" width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('img/payment-paypal.svg')}}" alt="paypal" width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('img/payment-bitcoin.svg')}}" alt="bitcoin" width="50" />
                            </li>
                        </ul>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
