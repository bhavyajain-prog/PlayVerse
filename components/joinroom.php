<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PlayVerse-JoinRoom</title>
          <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous"
        />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script
          src="https://kit.fontawesome.com/91c32085df.js"
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../public/createroom.css">
</head>
<body>
          <div class="container bg-dark m-1 p-2">
                    <div class="gameimg">
                    <img src="../images/freefire1.webp" alt="img">
                    </div>
                    <div class="gameinfo p-2">
                              <h2>Free Fire</h2>
                              <div class="rating p-1">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <p class="d-inline-block">34 reviews</p>
                              </div>
                              <div class="gamedetails">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis cupiditate, eos quod odio voluptate aut quibusdam modi hic laboriosam! Maiores nesciunt ipsam sequi blanditiis minima eveniet quasi quo saepe placeat?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dolorem rerum iste dolores nemo commodi eaque voluptatum inventore. Minima labore ipsum ducimus adipisci, excepturi voluptatibus nemo aut eveniet quos? Iure!</p>
                              </div>
                              <div class="code">
                               <input type="text" placeholder="Enter Room Code" class="form-control" disabled = "true" value="454542493857450392847dfsjdfn4954">
                               <i class="fa-solid fa-copy copy mx-1"></i>
                               <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Team Size
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Solo</a>
                                          <a class="dropdown-item" href="#">Duo</a>
                                          <a class="dropdown-item" href="#">Squad</a>
                                        </div>
                                      </div>
                              </div>
                    </div>
          </div>
          <script src="../public/script.js"></script>
</body>
</html>