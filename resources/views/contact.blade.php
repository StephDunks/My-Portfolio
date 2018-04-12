{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Me</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .invalid-feedback {
          display: block;
        }
    </style>
  </head>
  <body> --}}

@section('contact-form')



      <div class="container">
          <h1>Contact Me</h1>
          <div class="row">
              <div class="col-md-6">
                  @if (Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                  @endif
                  <form method="post" action="/contact">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label>Name:</label>
                        @if ($errors->has('name'))
                        <input type="text" name="name" class="form-control is-invalid" value="{{ old('name') }}">
                        @else
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @endif
                        @if ($errors->has('name'))
                          <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Email Address:</label>
                        @if ($errors->has('email'))
                        <input type="text" name="email" class="form-control is-invalid" value="{{ old('email') }}">
                        @else
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        @endif
                        @if ($errors->has('email'))
                          <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Message:</label>
                        @if ($errors->has('message'))
                        <textarea name="message" class="form-control is-invalid" value="{{ old('message') }}"></textarea>
                        @else
                        <textarea name="message" class="form-control" value="{{ old('message') }}"></textarea>
                        @endif
                        @if ($errors->has('message'))
                          <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                        @endif
                      </div>

                      <button class="btn btn-primary">Submit</button>
                  </form>
              </div>
            </div>
        </div>

@endsection



  </body>
</html>
