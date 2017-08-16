<?php

include ("../../../../clases/jpgraph-2.2/src/jpgraph.php");
include ("../../../../clases/jpgraph-2.2/src/jpgraph_bar.php");

// We need some data
$datay=array(55,40,65,10,85,70,60,45,50,55,40,65,10,55,40,65,200);

// Setup the graph. 
$graph = new Graph(395,210,"auto");    
$graph->SetScale("textlin");
$graph->img->SetMargin(25,15,25,25);


$graph->title->Set('"GEANUT"');
$graph->title->SetColor('darkred');

// Setup font for axis
$graph->xaxis->SetFont(FF_FONT1);
$graph->yaxis->SetFont(FF_FONT1);

// Create the bar pot
$bplot = new BarPlot($datay);
$bplot->SetWidth(0.6);

// Setup color for gradient fill style 
//$bplot->SetFillGradient("navy","lightsteelblue",GRAD_MIDVER);
$bplot->SetFillGradient("black","chartreuse1",GRAD_MIDVER);

// Set color for the frame of each bar
$bplot->SetColor("navy");
$graph->Add($bplot);

// Finally send the graph to the browser
$graph->Stroke();
?>