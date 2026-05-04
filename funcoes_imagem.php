<?php

function comprimirImagem($origem, $destino, $qualidade = 70) {

  $info = getimagesize($origem);

  if ($info['mime'] == 'image/jpeg') {
    $image = imagecreatefromjpeg($origem);
    imagejpeg($image, $destino, $qualidade);
  }

  elseif ($info['mime'] == 'image/png') {
    $image = imagecreatefrompng($origem);
    imagepng($image, $destino, 6);
  }

  elseif ($info['mime'] == 'image/webp') {
    $image = imagecreatefromwebp($origem);
    imagewebp($image, $destino, $qualidade);
  }

}

function criarThumb($origem, $destino, $largura = 300) {

  list($w, $h) = getimagesize($origem);

  $novaAltura = ($h / $w) * $largura;

  $thumb = imagecreatetruecolor($largura, $novaAltura);

  $info = getimagesize($origem);

  if ($info['mime'] == 'image/jpeg') {
    $source = imagecreatefromjpeg($origem);
  } elseif ($info['mime'] == 'image/png') {
    $source = imagecreatefrompng($origem);
  } elseif ($info['mime'] == 'image/webp') {
    $source = imagecreatefromwebp($origem);
  }

  imagecopyresampled($thumb, $source, 0, 0, 0, 0, $largura, $novaAltura, $w, $h);

  imagejpeg($thumb, $destino, 75);
}