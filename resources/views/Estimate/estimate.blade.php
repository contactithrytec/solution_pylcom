<section class="pricing-section my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-md-0 mb-lg-5">
                    <h2>Contacter <font color="#302e69">Pyl</font><font color="#5669de">Com</font></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="feature-content-wrap">
                    <ul class="nav nav-tabs feature-tab border-bottom-0 mb-5 d-flex justify-content-center" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gray-light-bg active" href="#tab6-1" data-toggle="tab">
                                <img src="{{asset('img/pylcom/contact.png')}}" width="40" alt="wp hosting" class="mr-1" />
                                <h6 class="mb-0">Contactez-nous</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gray-light-bg" href="#tab6-2" data-toggle="tab">
                                <img src="{{asset('img/pylcom/estimate.png')}}" width="40" alt="wp hosting" class="mr-1" />
                                <h6 class="mb-0">Demander un Devis</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane active" id="tab6-1">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="card popular-price  single-pricing-pack">
                                        <div class="pt-5 text-center">
                                            <h4 class="text-center mb-0 monthly-price">Contactez-nous</h4>
                                        </div>
                                        <div class="card-header pb-4 border-0 pricing-header">
                                            {{--<div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>--}}
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('contact.store') }}" method="post" class="contact-us-form mt-3" novalidate="novalidate">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="name" style="font-size:medium;color: #302e69"><b>Nom complet</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Entrez le nom complet" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email" style="font-size:medium;color: #302e69"><b>Email</b><font color="red"> * </font>:</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez l'e-mail" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="message" style="font-size:medium;color: #302e69"><b>Message</b><font color="red"> * </font>:</label>
                                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message" required="required"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="country" style="font-size:medium;color: #302e69"><b>ReCaptcha :</b></label>
                                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-3">
                                                        <button type="submit" class="btn primary-solid-btn" id="btnContactUs">
                                                            Envoyer le message
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6-2">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="card popular-price  single-pricing-pack">
                                        <div class="pt-5 text-center">
                                            <h4 class="text-center mb-0 monthly-price">Demander un Devis</h4>
                                        </div>
                                        <div class="card-header pb-4 border-0 pricing-header">
                                            {{--<div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>--}}
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('estimate.store') }}" method="post" class="contact-us-form mt-3" novalidate="novalidate">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first_name" style="font-size:medium;color: #302e69"><b>Nom</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Entrez le Nom" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="last_name" style="font-size:medium;color: #302e69"><b>Prénom</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Entrez le Prénom" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email" style="font-size:medium;color: #302e69"><b>Email</b><font color="red"> * </font>:</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez l'e-mail" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="business" style="font-size:medium;color: #302e69"><b>Nom de l'entreprise</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="business" id="business" placeholder="Entrez le nom de l'entreprise" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="phone" style="font-size:medium;color: #302e69"><b>Numéro de téléphone</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Entrez le numéro de téléphone" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="post" style="font-size:medium;color: #302e69"><b>Poste occupé</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="post" id="post" placeholder="Entrez le poste occupé" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="address" style="font-size:medium;color: #302e69"><b>Addresse</b><font color="red"> * </font>:</label>
                                                            <input type="text" class="form-control" name="address" id="address" placeholder="Entrez l'adresse" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-12" hidden>
                                                        <div class="form-group" >
                                                            <label for="address1" style="font-size:medium;color: #302e69" ><b>Addresse 1 :</b></label>
                                                            <input type="text" class="form-control" name="address1" id="address1" placeholder="Entrez l'adresse 1" >
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="country" style="font-size:medium;color: #302e69"><b>pays : </b></label>
                                                            <select id="country" name="country" class="form-control has-value">
                                                                <option data-display="Entrez le pays">Entrez le pays</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="country" style="font-size:medium;color: #302e69"><b>Ville : </b></label>
                                                            <input type="text" class="form-control" name="city" id="city" placeholder="Entrez la ville ">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="country" style="font-size:medium;color: #302e69"><b>Vos besoins :</b></label>
                                                            <textarea name="needs" id="needs" class="form-control" rows="3" cols="25" placeholder="Quels sont vos besions"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="country" style="font-size:medium;color: #302e69"><b>ReCaptcha :</b></label>
                                                            <div class="form-group"><div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 mt-3">
                                                        <button type="submit" class="btn primary-solid-btn" id="btnContactUs">
                                                            Envoyer le message
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

