<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){?>

  <section id="nav">
    <nav class="navbar navbar-expand-xl navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img class="logo" src="images/mulogo.png" alt="MU Logo" height="150px" width="180px">
       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <!-- Dropdown menu clubs-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clubs
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="anime.php">Anime and Manga</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="archery.php">Archery</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="thunder.php">Marching Thunder</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="climbing.php">Ascenders Climbing</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="fencing.php">Fencing</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="smash.php">Marshall Smashers</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="kings.php">King of Kings Chess</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="rugby.php">Rugby Football</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="esports.php">Esports Association</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="forceofwill.php">Force of Thundering Will</a></li>
              </ul>
            </li>
            <!-- Dropdown menu Fraternities -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fraternities
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Fraternity 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Fraternity 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Fraternity 3</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Fraternity 4</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Fraternity 5</a></li>
              </ul>
            </li>
            <!-- Dropdown menu Sororities -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sororities
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sorority 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sorority 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sorority 3</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sorority 4</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sorority 5</a></li>
              </ul>
            </li>




          </ul>


              <li class="navbar-nav d-flex ms-auto">
                <ul>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php"  role="button"  aria-expanded="false">Contact</a></li>
                  </li>
                </ul>

                <ul>
                  <!-- Dropdown menu Account -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="components/logout.php">Sign Out</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="components/reset-password.php">Reset Password</a></li>
                    </ul>
                  </li>
            </ul>


        </div>

      </div>

    </nav>
  </section>

<?php }


else { ?>

  <section id="nav">
    <nav class="navbar navbar-expand-xl navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img class="logo" src="images/mulogo.png" alt="MU Logo" height="150px" width="180px">
       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


            <ul>
              <li class="nav-item navLogin">
                  <a class="nav-link" href="login.php"  role="button"  aria-expanded="false">Login</a></li>
              </li>
            </ul>


  </ul>


        </div>

      </div>

    </nav>
  </section>

<?php } ?>
