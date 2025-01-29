@extends('layouts.default')
@section('content')
@if ($__env->yieldContent('code') === '404')
<section class="content d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center error-page">
        <h2 class="headline text-danger display-1 fw-bold">404</h2>

        <div class="error-content">
            <h3 class="mt-3">
                <i class="fas fa-exclamation-triangle text-danger"></i>
                Oops! Page not found.
            </h3>

            <p class="mt-2">
                The page you are looking for does not exist or has been moved.
                You may <a href="../../index.html" class="text-primary fw-bold">return to the dashboard</a>
                or try using the search form below.
            </p>

            <form class="mt-4 search-form">
                <div class="mx-auto input-group w-50">
                    <input
                        type="text"
                        name="search"
                        class="form-control rounded-start"
                        placeholder="Search..."
                    >
                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-danger rounded-end"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>

  @elseif ($__env->yieldContent('code') === '500')

  <section class="content d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center">
      <div class="card shadow-lg p-4 border-0">
        <h2 class="headline text-danger display-1 fw-bold">500</h2>
        <div class="error-content">
          <h3 class="text-dark">
            <i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.
          </h3>
          <p class="fs-5 text-secondary">
            We will work on fixing that right away.<br>
            Meanwhile, you may <a href="../../index.html" class="fw-bold text-danger">return to dashboard</a> or try using the search form.
          </p>
          <form class="search-form mt-3">
            <div class="input-group mx-auto" style="max-width: 400px;">
              <input type="text" name="search" class="form-control rounded-pill px-3" placeholder="Search">
              <button type="submit" name="submit" class="btn btn-danger rounded-pill ms-2">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  @endif
  @yield('code')
  @yield('message')

@endsection
