@extends('auth.master')

 @section('content')
          <div class="container">
               @if(session()->has('flash_message'))
               <div class="alert alert-success alert-dismissible">
                    {{ session()->get('flash_message') }}
               </div>
               @endif
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <p></p>
                         <h3 class="panel-title">User information</h3>
                    </div>

                    <div class="panel-body">
                         <form action="{{ route('users.store') }}" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group">
                                   <label for="naziv">Username</label>
                                   <input type="text" class="form-control" id="username" name="username" placeholder="Insert your username">
                              </div>
                              <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="email" name="email" placeholder="Insert your email">
                              </div>
                              <div class="form-group">
                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" name="password" placeholder="Insert your password">
                              </div>
                              <div class="form-group">
                                   <label for="confirm_password">Confirm password</label>
                                   <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                              </div>
                              <button type="submit" class="btn btn-primary">Confirm</button>
                              <a href="{{ route('users.index')}}" class="btn btn-danger" role="button">Back</a>
                         </form>
                    </div>
               </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
