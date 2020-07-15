<?php
/**
 * 
 * Email:
 * request()->validate(['email'=> 'required|email']);
 * 
 * Mail::raw('It works', function($message) {
 *      $message->to(request('email'))
 *          ->subject('Hello There');
 * });
 * 
 * ?? how it is send?
 * 
 * .env file > mail driver > log 
 * 
 * 
 * where FROM email was defind?
 * from > global config > mail.php 
 * 
 * MAIL_FROM_ADDRESS=admin@example.com
 * 
 * 
 * FLASH MESSAGE
 * 
 * is data that put in the session for once
 * 
 * return redirect('/contact')->with('message', 'Email sent!');
 * 
 * 
 * div
 * @if(session('message'))
 *  p cass = text-green-500 text-extra-small
 * @endif
 * 
 * show mailtrap
 * 
 * in .env file update settings
 * 
 * Now we send text emails
 * 
 * how to send HTML emails
 * 
 * php artisan help make:mail ContactMe
 * 
 * new MAil folder in app folder
 * 
 * in ContactController
 * Mail::to(request(email))->send(new ContactMe());
 * 
 * some data need to be passed to emai view
 * 
 * {{$topic}}
 * add to constructor and add to new ContactMe("test")
 * return $this->view('emails.contact-me')->subject('More info')
 * 
 * more options
 * 
 * Markdown
 * 
 * return return $this->markdown('emails.contact-me')->subject('More info')
 * 
 * delete all in view add
 * 
 * @component('mail::message')
 * 
 * # A Heading
 * lorem ispum
 * - A list 
 * - item 1
 * - item 2
 * @endcomponent
 * 
 * check email
 * 1) dont intedn (tab) anything
 * 2) @component('mail::button', ['url'=> 'https:'])
 * VISIT
 * @endcomponent
 * 
 * WHERE are? load view from wendor directoryResource
 * Mail > resources> views > html >email
 * 
 * APP NAME -> .env -> APP_NAME ( email heading)
 * 
 * php artisan make:mail Contact -markdown=emails.contact
 * 
 * Mail::to(request(email))->send(new Contact());
 * 
 * Customizing emails (css);
 * 
 * php artisan help vendor:publish --tag=laravel-mail
 * will read from your local views 
 * 
 * default.css
 * 
 * tweaking default theme
 * new file in themes laracasts.css
 * copy paste code, go to config/ mail.php and change the theme from default to laracasts
 * 
 * 
 * Return email as a string to test 
 * $invoice = App\Invoice::find(1);
 * return (new App\Mail\InvoicePaid($invoice))->render();
 * 
 * Route::get('mailable', function () {
 *    $invoice = App\Invoice::find(1);
 *    return new App\Mail\InvoicePaid($invoice);
 * });
 * 
 * Notify usersData
 * route 'payments/create'
 * 
 * Notification::send(request()->user()); // to signed user
 * 
 * php artisan make:notification PaymentReceived
 * 
 * Notification??
 * 
 * Autherization
 * 
 * 
 * 
 * 
 * 
 */
?>

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Subscribe to our newsletter</div>

          <div class="card-body">

            <form  method="POST" action="/contact">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-outline-primary">
                    Contact Us
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<?php
class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conversation_id');
            $table->text('body');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('conversation_id')
                  ->references('id')
                  ->on('conversation')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}