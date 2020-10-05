<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark danger-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Sobkisu</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="{{url('/')}}">Home
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('/create')}}">Add new</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/Read')}}">Cheack Data</a>
    </li>

  </ul>


</div>

</nav>
<!--/.Navbar-->
