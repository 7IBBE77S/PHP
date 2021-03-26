@extends("layout.master")


<main class="container">
  <div class="jumbotron  mt-3">
    <section class="row">
      <div class="col-sm-12 col-lg-8">
        <h1 class="display-4">ADMINISTRATION</h1>
        <P class="lead">
          Hello tom jones! A website dedicated to the administration of Airline
          data
        </P>
      </div>
      <div class="col-sm-12 col-lg-2">
        <h1 class="display-4">1.0.0</h1>
        <P class="lead version">
          Version
        </P>
      </div>
    </section>
   
  </div>
  <section class="row">
    <div class="col-sm-12 col-md">
      <h1>American Airlines</h1>
      <p>
        View the monthly bid data, import history &amp; download statistics.
      </p>
      <a href="/american-airlines" class="btn btn-outline-dark"
        >
        <!-- <i class="fa fa-external-link"> -->

        </i>View</a
      >
    </div>
    <div class="col-sm-12 col-md">
      <h1>Alaska Airlines</h1>
      <p>
        View the monthly bid data, import history &amp; download statistics.
      </p>
      <a href="/alaska-airlines" class="btn btn-outline-dark"
        >
        <!-- <i class="fa fa-external-link"> -->

        </i>View</a
      >
    </div>
  </section>
  <section class="row mt-4">
    <div class="col-sm-12 col-md">
      <h1>JetSuite</h1>
      <p>
        View the monthly bid data, import history &amp; download statistics.
      </p>
      <a href="/jetsuite" class="btn btn-outline-dark"
        >
        <!-- <i class="fa fa-external-link"> -->

        </i>View</a
      >
    </div>
    <div class="col-sm-12 col-md">
      <h1>UPS</h1>
      <p>
        View the monthly bid data, import history &amp; download statistics.
      </p>
      <a href="/ups" class="btn btn-outline-dark">
        <!-- <i class="fa fa-external-link"></i> -->
        View
        </a
      >
    </div>
  </section>



</main>