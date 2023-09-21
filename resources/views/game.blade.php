@extends('layouts.main')

@section('container')
<head><script src="{{ asset ('admin/assets/js/color-modes.js')}}"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Offcanvas navbar template · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">

  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="{{asset ('admin/assets/dist/css/bootstrap.min.css')}}">

<div class="d-flex text-body-secondary pt-3">
  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
  <p class="pb-3 mb-0 small lh-sm border-bottom">
    <strong class="d-block text-gray-dark">@Ghost</strong>
    Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
  </p>
</div>
<div class="d-flex text-body-secondary pt-3">
  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
  <p class="pb-3 mb-0 small lh-sm border-bottom">
    <strong class="d-block text-gray-dark">@WPAO</strong>
    Some more representative placeholder content, related to this other user. Another status update, perhaps.
  </p>
</div>
<div class="d-flex text-body-secondary pt-3">
  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
  <p class="pb-3 mb-0 small lh-sm border-bottom">
    <strong class="d-block text-gray-dark">@ByMe</strong>
    This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
  </p>
</div>

@endsection