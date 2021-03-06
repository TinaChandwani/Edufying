@extends('layout') 
@section('content') {{-- chatbox --}}
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c8af72bc37db86fcfcdece7/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();

</script>



{{-- navbar --}}
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Student's Page</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>
<div class="w3-container">
  <div class="w3-container">
    <div class="row" style="width:47%">
      <nav class="col-md-3 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only"></span>
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="file"></span>
             Books Details
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Books 
            </a>
            </li>
            {{--
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
            </li> --}} {{--
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
            </li> --}}
          </ul>

          {{--
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
            </li> --}}
          </ul>
        </div>
      </nav>
@endsection