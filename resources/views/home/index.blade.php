<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Home - Mayoral Blog</title>

    <!-- Bootstrap -->
    <link href="{{asset('/home/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/home/assets/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    
    <!-- Navigation bar (header) -->
   @include('home.navbar')

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">

            <!-- Images + Photo -->

            <div class="col-lg-12">     <div class="row">

                <div class="col-lg-12">
                    <div class="row backgroundImage">
                        <div class="col-lg-6">
                             <div class="contentBlock">
                                 <h6>ABOUT</h6>
                                 <h1>Bringing the benefits of AI to everyone</h1>
                                 <p>We provide a platform for thousands of people to exchange ideas and to 
                                     expand our understanding of data science. While we allow
                                      authors to publish articles,
                                       we do not endorse each author’s contribution.</p>
                             </div>
                         </div>
    
                        <div class="col-lg-6"></div>
                    </div>
                </div>
                

<!--                 <div class="col-sm-6 col-md-4">     <div class="thumbnail">

                    <img src="assets/img/1.jpg" alt="Title">

                    <div class="caption">
                        <h3>Title</h3>
                        <p> Description</p>
                        <p><a href="#" class="btn btn-primary" role="button">Like</a> 
                            <a href="#" class="btn btn-primary" role="button">Comment</a>
                            <a href="#" class="btn btn-primary" role="button">Read more</a>
                        </p>
                    </div>

                </div></div> -->
                @foreach($post as $posts)
                <div class="col-sm-6 col-md-4">     <div class="thumbnail">

                    <img src="/product/{{$posts->image}}" alt="Title">
                
                    <div class="caption">
                        <h3>{{$posts->title}}</h3>
                        <p>{{$posts->description}}</p>
                        
                        <p>
                            @if(Route::has('login'))
                            @auth
                           <a href="{{url('/like_post',$posts->id)}}" class="btn btn-primary" role="button">Like</a> 
                           @endauth
                           @endif
                            <a href="{{url('/blog',$posts->id)}}" class="btn btn-primary" role="button">Read more</a>
                        </p>
                    </div>
                
                </div></div>

                @endforeach


               

            </div></div>
            

        </div></div>

        <div class="container">
            <div class="row">


            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid aboutPost aboutPostLeft">
                            <div class="jumbotron ">
                                <h6>DASHBOARD</h6>
                                <h2>Manage</h2>
                                <p>We provide a platform for thousands of people to exchange ideas and to 
                                    expand our understanding of data science. While we allow
                                     authors to publish articles,
                                      we do not endorse each author’s contribution.</p>
                                <a class="btn btn-primary btn-lg" href="{{url('/dashboard')}}" role="button">Learn more</a>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid aboutPost aboutPostRight">
                            <div class="jumbotron ">
                                <h6>BLOGS</h6>
                                <h2>Discover</h2>
                                <p>We provide a platform for thousands of people to exchange ideas and to 
                                    expand our understanding of data science. While we allow
                                     authors to publish articles,
                                      we do not endorse each author’s contribution.</p>
                                <a class="btn btn-primary btn-lg" href="{{url('/blogs')}}" role="button">Learn more</a>
                              </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

        

         <div class="container">    <div class="panel panel-default">

                <div class="panel-heading">Posts</div>
              
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th class="text-center">Likes</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($popular as $populars)
                        <tr>
                            <td class="col-lg-1 col-md-1 col-xs-2">
                                <img class="img-responsive" src="/product/{{$populars->image}}" alt="Title">
                            </td>
                            <td class="vert-align"><a href="{{url('/blog',$populars->id)}}">{{$populars->title}}</a></td>
                            <td class="text-center vert-align"><span class="badge">{{$populars->likes}}</span></td>
                        </tr>  
                        @endforeach
                    </tbody>
        
        
                  </table>
                  {!!$popular->links('pagination::bootstrap-5')!!}  

        </div>    
     </div> 
        

        <div class="clear"></div>
    </div>

    <!-- Footer -->
  @include('home.footer')
</body>

</html>



