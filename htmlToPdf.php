<?php

require 'pdfcrowd-4.3.7/pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("ozimnad", "41585894e102b0e393e7ea412c311607");
    $client->setOrientation("landscape");
    $client->setNoMargins(true);

    // run the conversion and write the result to a file
//    $client->convertUrlToFile("https://ozimnadius.github.io/kp.io/", "example.pdf");
    $client->convertFileToFile("index.html", "example.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
