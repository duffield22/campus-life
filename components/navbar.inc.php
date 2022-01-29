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
                CLUBS
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="club1.php">Club 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Club 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Club 3</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Club 4</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Club 5</a></li>
              </ul>
            </li>
            <!-- Dropdown menu Fraternities -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                FRATERNITIES
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
                SORORITIES
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

            <ul>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php"  role="button"  aria-expanded="false">CONTACT</a></li>
              </li>
            </ul>
          </ul>


          <form class="search d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>


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
              <li class="nav-item">
                  <a class="nav-link" href="contact.php"  role="button"  aria-expanded="false">CONTACT</a></li>
              </li>
            </ul>

          <ul>
            <li class="nav-item">
                <a class="nav-link" href="login.php"  role="button"  aria-expanded="false">LOGIN</a></li>
            </li>
          </ul>
        </ul>
  </ul>


        </div>

      </div>

    </nav>
  </section>

<?php } ?>
