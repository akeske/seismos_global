<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_line.php');
include('dataGraphMagn.php');
$datay1 = $_SESSION['sendgraphmagnD1'];
// Setup the graph
$graph = new Graph(900,600);
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Cumulative rate/year');
$graph->SetBox(false);
$graph->img->SetAntiAliasing();
$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->title->Set('Number of earthquakes');
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels( $_SESSION['xmagnD1'] );
$graph->xgrid->SetColor('#E3E3E3');
$graph->img->SetMargin(40,30,20,20);
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->Set('Magnitude (R)');
// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->mark->SetType(MARK_FILLEDCIRCLE,'',0.5);
$p1->mark->SetColor('#55bbdd');
$p1->mark->SetFillColor('#55bbdd');
$p1->SetColor("#6495ED");
$p1->SetLegend($_SESSION['fromdate1']." - ".$_SESSION['todate1']);
$p1->SetCenter();

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>