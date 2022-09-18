<?php include('header.php'); 

?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url();?>index.php/dashboard">Code3</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-material" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="d-flex align-items-center nav-icon nav-link active" aria-current="page" href=""><i class="bi bi-person-circle"></i><span class="pb-1 ps-2"> </span> <?php echo 	$this->session->userdata('username'); ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
