@extends('layouts.app')
@section('content')
<style type="text/css">code{white-space: pre;}</style>
<link rel="stylesheet"
  href="/highlight/default.css"
  type="text/css" />
  <script src="/highlight/highlight.js"></script>
  <style type="text/css">
  pre:not([class]) {
  background-color: white;
  }
  </style>
  <script type="text/javascript">
  if (window.hljs && document.readyState && document.readyState === "complete") {
  window.setTimeout(function() {
  hljs.initHighlighting();
  }, 0);
  }
  </script>
  <div class="container">
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <form id="create" data-toggle="validator"  method="POST" action="{{ Route('notas.store') }}">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            {{ method_field('POST') }}
            {!! csrf_field() !!}
            <div class="card-image">
              
              <button  id="insertar" type="submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></button>
              
            </div>
            <div class="card-content">
              <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="validate">
              
              <input placeholder="Tomar una nota" id="nota"  name="nota" type="text" class="validate">
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="NotasGeneral" class="container" style="margin-left: 0px;margin-right: 0px;width: 100%;">
    @foreach($listaNotas as $objNota)
    <div id="section-{{$objNota["id"]}}" class="sections level3">
      <h3>{{$objNota["titulo"]}}</h3>
      <p>{{$objNota["nota"]}}</p>
    </div>
    @endforeach
    
    
  </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/notas.js"></script>
  
  <script>
  // add bootstrap table styles to pandoc tables
  $(document).ready(function () {
  $('tr.header').parent('thead').parent('table').addClass('table table-condensed');
  setTimeout(function(){
  colMat($(".section"));
  }, 300);
  });
  </script>
  <!-- dynamically load mathjax for compatibility with self-contained -->
  <script>
  (function () {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src  = "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML";
  document.getElementsByTagName("head")[0].appendChild(script);
  })();
  </script>
  @endsection