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
                         <p>

                         </p>
                         <a href="{{ route('users.create') }}" class="btn btn-primary" role="button">Add new user</a>
                    </div>

                    <div class="panel-body">
                         @if($users->count())
                         <table class="table table-striped">
                              <thead>
                                   <tr>
                                        <th scope="col">iD</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($users as $user)
                                   <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                        <td>
                                             <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                  {{ method_field('DELETE') }}
                                                  {{ csrf_field() }}
                                                  <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm" role="button">Edit</a>
                                                  <button class="btn btn-danger btn-sm">Delete</button>
                                             </form>

                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                         @else
                         <div class="well">
                              <h3>There is no user in database.</h3>
                         </div>
                         @endif
                    </div>
               </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     @endsection
