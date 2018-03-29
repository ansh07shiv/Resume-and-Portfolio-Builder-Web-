    <?php
   session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" >
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles.css">
      </head>
      <body>
    
    <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class= "display-3">Welcome <?php echo $_SESSION['emailid']?></h1>
                    <p>Just like the old Bootstrap, but better,afadasafd loorem adfaddasfgrseaserjjf aporeioe s'oftgesjg oresjoijslr siorjtoresjio jsirjtsrl;gsoi rtyorjytorij rejtgojhgrdjkpospejkr seroapor srkta reotoajsg srijoir jriojtsaio</p>
                    
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label class = "sr-only">Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder = "Username">
                        </div>
                        <div class="form-group">
                            <label class = "sr-only">Email</label>
                            <input type="text" class="form-control form-control-lg" placeholder = "abc@exmaple.com">
                        </div>
                        <button type = "submit" class="btn btn-success btn-lg">Login</button>
                    </form>
                    
                    <br>
                    
                    <a href="#nav-main" class="btn btn-secondary-outline btn-sm" role = "button">&darr;</a>
                </div>
            </div>
        </div>
    </section>
    
        <nav class="navbar navbar-dark bg-inverse navbar-full" id = "nav-main">
          <a class="navbar-brand" href="#">BRO</a>
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
        <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-success-outline" type="submit">Search</button>
        </form>
      </nav>
      
      
      <section id="carousel">
        <div id="carousel-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
            <li data-target="#carousel-home" data-slide-to="2">
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/woman-camera.jpg" alt="Resume">
                <div class = "carousel-caption">
                    <h3>Build Your Resume</h3>
                    <p>Get one step closer to your DREAM</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/spiderweb.jpg" alt="Portfolio ">
              <div class = "carousel-caption">
                    <h3>Build Your Portfolio</h3>
                    <p>Impress Peoples by presenting your achievements in a Stylish Manner</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/hearthand.jpg" alt="Resume Templates">
              <div class = "carousel-caption">
                    <h3>Resume Templates</h3>
                    <p>Check Out New Resume Templates</p>
                </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
        
        <section id="what-we-do">
            <div class="section-content">
                <div class="container">
                    <h2>What we do</h2>
                    <p>We provide enchanced templates to create resume and portfolio based on your information.</p>
            
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-group">
                               <div class="card">
                                   <div class="card-block">
                                       <h4 class="card-title">Build Resumes &amp; Portfolio</h4>
                                       <h6 class="card-subtitle">Support Card Subtitles</h6>
                                   </div>
                                   <img src="img/chalkboard.jpg" alt="A Chalkboard">
                                   <div class="card-block">
                                       <p class="card-text">Lorem Ipsum Intent Lorem Ipsum Intent</p>
                                       <button type="button" class="btn btn-success-outline" data-toggle="modal" data-target="#myModal">Learn More</button>
                                   </div>
                               </div>

                               <div class="card">
                                   <div class="card-block">
                                       <h4 class="card-title">Creative &amp; Design</h4>
                                       <h6 class="card-subtitle">Support Card Subtitles</h6>
                                   </div>
                                   <img src="img/working.jpg" alt="Working on Laptop">
                                   <div class="card-block">
                                       <p class="card-text">Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent</p>
                                       <button type="button" class="btn btn-success-outline" data-toggle="modal" data-target="#myModal">Learn More</button>
                                   </div>
                               </div>

                               <div class="card">
                                   <div class="card-block">
                                       <h4 class="card-title">Programming &amp; Technical</h4>
                                       <h6 class="card-subtitle">Support Card Subtitles</h6>
                                   </div>
                                   <img src="img/programming.jpg" alt="Fingers tping on a keyboard">
                                   <div class="card-block">
                                       <p class="card-text">Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent Lorem Ipsum Intent</p>
                                       <button type="button" class="btn btn-success-outline" data-toggle="modal" data-target="#myModal">Learn More</button>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="about">
            <div class="section-content">
                <div class="container">
                    <div class="col-md-6">
                        <div class="about-text">
                            <h3>About me</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, amet similique alias beatae natus ratione? Animi unde libero similique beatae minus, consequuntur vero, qui excepturi deleniti recusandae porro dicta, rem!</p>
                            
                            <h5>Follow me on the web</h5>
                            <a href="" class="btn btn-sm btn-secondary-outline" role = "button">Twitter</a>
                            <a href="" class="btn btn-sm btn-secondary-outline">Facebook</a>
                            <a href="" class="btn btn-sm btn-secondary-outline">Youtube</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="news">
            <div class="section-content">
                <div class="container">
                    <h3>Latest News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quae, accusantium reprehenderit, nemo iure aut provident ipsum pariatur dolorem. Quisquam porro vitae incidunt obcaecati illo adipisci totam reiciendis, ad illum?</p>
                    
                    <br>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-columns">
                              <div class="card">
                                <img class="card-img-top img-fluid" src="img/SendResume.jpg" alt="Send Resume">
                                <div class="card-block">
                                  <h4 class="card-title">Card title that wraps to a new line</h4>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                              <div class="card p-3">
                                <blockquote class="card-block card-blockquote">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                  <footer>
                                    <small class="text-muted">
                                      Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                  </footer>
                                </blockquote>
                              </div>
                              <div class="card">
                                <img class="card-img-top img-fluid" src="img/portfoliovlc.jpg" alt="Portfolio">
                                <div class="card-block">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                              <div class="card card-inverse card-warning p-3 text-center">
                                <blockquote class="card-blockquote">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                  <footer>
                                    <small>
                                      Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                  </footer>
                                </blockquote>
                              </div>
                              <div class="card text-center">
                                <div class="card-block">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                              <div class="card">
                                <img class="card-img img-fluid" src="img/CreativeResume.jpg" alt="Resume Example">
                              </div>
                              <div class="card p-3 text-right">
                                <blockquote class="card-blockquote">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                  <footer>
                                    <small class="text-muted">
                                      Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                  </footer>
                                </blockquote>
                              </div>
                              <div class="card">
                                <div class="card-block">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                            
                            <hr>
                            <nav aria-label="Page navigation example" class="text-xs-center">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer id="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p>uncopyright 2017 do whatever you want to do</p>
                        <p>coded by Avinash</p>
                    </div>
                    <div class="col-sm-3">
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">What We Do</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">latest News</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul class="list-unstyled">
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Youtube</a></li>
                            <li><a href="">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h6>A Tiny Header</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos voluptas earum possimus quaerat sed pariatur illum, unde minima, amet dolorum dignissimos, quibusdam fuga impedit rerum incidunt veritatis. Porro, laudantium?</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      </body>
    </html>