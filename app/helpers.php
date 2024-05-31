<?php
  function setActivo($ruta){
    return request()->routeIs($ruta) ? 'text-red-500' : '';
  }
?>