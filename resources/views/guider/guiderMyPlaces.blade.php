<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/traveliaStyle.css">
  <link rel="stylesheet" href="/css/animate.css"> <!-- included in wow js -->
  <link rel="stylesheet" href="/css/all.min.css">
  <title>TRAVELIA!</title>
</head>

<style>

</style>

<body>

  <!-- header part starts -->

  <header class="header-part">
    <div class="items container-fluid bg-dark">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <img class="wow rotateIn" src="/images/travelia/logo.png" data-wow-duration="3s" data-wow-iteration="40"
            height="50" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active pr-4">
              <a class="" href="/guider">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="dhover1 nav-item dropdown pr-4 pb-0">
              <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                destinations
              </a>
              <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/guider/guiderDestination">CHITTAGONG</a>
                <a class="dropdown-item" href="/guider/guiderDestination2">SYLHET</a>
                <a class="dropdown-item" href="">RAJSHAHI</a>
                <a class="dropdown-item" href="">KHULNA</a>
                <a class="dropdown-item" href="">BARISHAL</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">DHAKA</a>
              </div>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="">how it works <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="/guider/guiderAddPlace">Add a place <span class="sr-only">(current)</span></a>
            </li>


          </ul>
          <form class="form-inline my-2 my-lg-0">
                      
            <li class="account nav-item dropdown pr-4 pb-0">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                         Account
                    </a>
                    <div class="dropdown-menu bg-dark account-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/guider/guiderProfile">My info</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/guider/guiderMyPlaces">My Places</a>
                        
                    </div>
                </li>
            <a href="" class="bell mr-4">
                <i class="fas fa-bell"></i>
            </a>

            <a href="/logout" role="button" class="btn btn-outline-success mr-4">Log out</a>
        </form>
        </div>
      </nav>
    </div>
  </header>

  <!-- header part ends -->



  <!-- my places starts -->
  <section class="my-places mt-2">
    <div class="container-fluid">
            <table class="table table-hover wow flipInX table-dark">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">picture</th>
                        <th scope="col">guider mail</th>
                        <th scope="col">travel place</th>
                        <th scope="col">division</th>
                        <th scope="col">location</th>
                        <th scope="col">description</th>
                        <th scope="col">status</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        $count =0;
                        ?>
                        @foreach($result as $result)
                           <?php $count++; ?>
                            @if($result->status=="permitted")
                              <?php $btn="success"; ?>
                            
                            @else
                               <?php $btn = "danger"; ?>
                            
                            @endif

                           <form action="" method="post">
                               <input type="hidden" name="travelid" value="{{ $result->id }}">
                                <tr>
                                        <th scope="row"><?= $count ?></th>
                                        <td>
                                            <img width="300px" src="/images/travelplace/{{$result->division}}/{{ $result->pictures }}.jpg" alt="">
                                        </td>
                                        <td>{{ $result->travelguidermail }}</td>
                                        <td>{{ $result->travelplace }}</td>
                                        <td>{{ $result->division }}</td>
                                        <td>{{ $result->location }}</td>
                                        <td>{{ $result->description }}</td>
                                        <td> {{ $result->status}}</td>
                                        <td>
                                            <input type="submit" class="btn btn-warning" name="submit" value="delete this">
                                            <br>
                                            <br>
                                            <input type="submit" class="btn btn-primary" name="submit" value="update info">
                                        </td>
                                </tr>
                           </form>
                         @endforeach
                </tbody>

            </table>
    </div>
  </section>
  <!-- my places ends -->







  



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <!-- <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/wow.js"></script>
  <script src="/js/jquery.hover3d.js"></script>




  <script>


    $('.dhover1, .dmenu1').mouseenter(function () {
      $('.dmenu1').fadeIn();
    });
    $('.dhover1').mouseleave(function () {
      $('.dmenu1').fadeOut();
    });


    $('.dhover2, .dmenu2').mouseenter(function () {
      $('.dmenu2').fadeIn();
    });
    $('.dhover2').mouseleave(function () {
      $('.dmenu2').fadeOut();
    });

    $('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });


    var wow = new WOW();
    wow.init();


  </script>
  <script></script>


</body>

</html>