<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "game") ? 'active' : '' }}" href="/game">Game</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{ ($title === "register") ? 'active' : '' }} href="/register">Registrasion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>