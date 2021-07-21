<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url("/");?>">Rikan Al Arabi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($title === "Home") ? "active" : "";?>" href="<?= base_url("/");?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($title === "About") ? "active" : "";?>" href="<?= base_url("Pages/About");?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($title === "Contact") ? "active" : "";?>" href="<?= base_url("Pages/Contact");?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>