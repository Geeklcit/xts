@extends('layouts.default')


@section('content')

<!--Section: Contact v.2-->


    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter directement.
			 Notre équipe reviendra vers vous en quelques heures pour vous aider.</p>

    <div class="row">

        <!--Grid column-->
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="col-md-9 mb-md-0 mb-5">
            <form name="contact-form" action="{{ route('contact') }}" method="POST">
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 has-error">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">NOM</label>
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 has-error">
                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0 has-error">
                            <input type="text" id="subject" name="phone" class="form-control">
                            <label for="subject" class="">téléphone</label>
                            {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form has-error">
                            <textarea type="text" id="message" name="msg" rows="2" cols="3" class="form-control md-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            

            <div class="text-center text-md-left">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="status"></div>
        </form>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Mermoz,Dakar ,SENEGAL</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+221 77 226 28 90</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>mortallageek@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>



            


@endsection

