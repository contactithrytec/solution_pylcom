<section class="technical-specification ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            {{--
                        <iframe width="800" height="850" src="https://ithrytec.com/crm/forms/wtl/3e5bcf81cd896aa5a7bbcd4bacd8c54d" frameborder="0" allowfullscreen></iframe>
            --}}
            <div class="col-md-9">
                <div class="row footer-top-wrap">
                    <div class="contact-us-form bg-white p-5" style="border: 1px solid #005cbf;border-radius:20px">
                        <h4 class="text-center pb-6">Contactez-nous</h4>
                        <form action="{{route('contact.store') }}" method="post" class="contact-us-form mt-3" novalidate="novalidate">
                            @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Entrez le nom complet" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Entrez l'e-mail" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
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
</section>

