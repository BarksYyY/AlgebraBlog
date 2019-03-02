<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
     </head>
     <body>

          @foreach ($posts as $key => $post)
               <a href="posts/{{ $post->id }}">

               <li>{{ $post->title }}</li>

               </a>

               <section>
                    {{ $post->body }}
               </section>
          @endforeach

     </body>
</html>
