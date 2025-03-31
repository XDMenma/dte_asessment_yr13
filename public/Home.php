<link rel="stylesheet" href="<?php echo("http://localhost/stylesheet/styles.css");?>">
<?php require_once("../private/initialize.php")?>
<?php include (SHARED_PATH . "/header.php")?>
<h1>HOME PAGE</h1>
<div class="carousel">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo("https://www.barfoot.co.nz/media/w5onnctc/auckland-house-styles-3.jpg")?>" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-item">
        <img src="<?php echo("https://res.listglobally.com/listings/6135767/102356346/f52a569c13fae6dbd6f06801dcda5542?mode=crop&height=300")?>" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
	  </div>
  </div>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-item">
        <img src="<?php echo("https://stonewood.co.nz/wp-content/uploads/The-Best-House-Designs-for-Small-Houses.jpg")?>" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
	    </div>
	  </div>
  </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="Information">
<h2>Global House pricing</h2>
<p>Housing is a critical issue that affects communities globally, impacting not only the individuals and families directly affected but also the broader social and economic fabric of neighborhoods. 
With rising property prices and skyrocketing rental costs, combined with limited affordable housing options, many communities around the world are grappling with a housing crisis that deepens inequality and hampers access to basic necessities. 
The steep cost of housing often forces individuals and families to allocate a disproportionate amount of their income toward rent or mortgages, leading to financial instability. 
This, in turn, can result in displacement, overcrowding, and increased pressure on social services, which affects education, health, and overall quality of life. 
Addressing the housing problem, including the challenge of inflated housing prices, is essential for creating sustainable, equitable communities globally, where everyone has the opportunity to thrive.</p>
</div>
<?php include (SHARED_PATH . "/footer.php") ?>