<link rel="stylesheet" href="<?php echo("http://localhost/public/stylesheet/styles.css");?>">
<?php require_once("../../private/initialize.php")?>
<?php include (SHARED_PATH . "/header.php")?>
<h1>What can we do to help</h1>
<p>A multifaceted strategy is necessary to address the global issue of rising housing prices. 
First and foremost, it is imperative to increase the supply of housing, which can be done by building more reasonably priced homes, easing zoning regulations, and providing incentives to developers who construct affordable units.
Tax laws should also be changed to discourage speculative real estate investments and encourage the construction of affordable housing. Additionally, underutilised land or vacant properties could be taxed to encourage their use. Rent-to-own programs, low-interest loans, and down payment assistance for first-time homebuyers can all help people get into the housing market.
Additionally, increasing rental housing options and enhancing public transportation can ease the strain on urban housing markets, allowing people to live in suburban areas while still having access to jobs and amenities.</p>

<form>
    <h2>Write in your details and someone from our team be in contact with you in due course:</h2>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include (SHARED_PATH . "/footer.php") ?>