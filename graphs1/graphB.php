<?php // content="text/plain; charset=utf-8"

include('dataGraphB.php');

require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_line.php');

$datax1 = $_SESSION['year1'];
$datay1 = $_SESSION['b1'];
//$datay2 = $_SESSION['energy1'];

$a = $_GET['b1']+1;
// Setup the graph
$graph = new Graph(1200,400,"auto");
$graph->SetScale("textlin");
//$graph->SetY2Scale("lin");
$graph->SetShadow();
$graph->img->SetAntiAliasing(false);
$graph->title->Set('b value - Area '.$a);
$graph->subtitle->Set('');
$graph->xaxis->title->Set('Month');
$graph->yaxis->title->Set('b value');
$graph->SetBox(false);
$graph->img->SetAntiAliasing(true);
$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels( $datax1 );
$graph->xgrid->SetColor('#E3E3E3');
$graph->legend->SetFrameWeight(1);
$graph->img->SetMargin(40,30,20,40);
$graph->SetMargin(40,20,20,40);
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetTextLabelInterval(1);
$graph->xaxis->SetLabelAngle(45);
// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->value->SetFormat('%.1f');
//$p1->value->Show();
//$p1->mark->SetType(MARK_FILLEDCIRCLE,'',0.5);
$p1->mark->SetColor('#55bbdd');
$p1->SetColor("#6495ED");
$p1->SetCenter();
$p1->SetFillColor('orange@0.7');
$p1->SetLegend("b value");

//$p2 = new LinePlot($datay2);
//$graph->AddY2($p2);
//$graph->y2axis->SetColor("#ff0000");
//$p2->value->SetFormat('%.0f');
//$p2->value->Show();
//$p2->mark->SetType(MARK_FILLEDCIRCLE,'',0.5);
//$p2->mark->SetColor('#55bbdd');
//$p2->SetColor("#ff0000");
//$p2->SetCenter();
//$p2->SetFillColor('orange@0.7');
//$p2->SetLegend("Energy");


$graph->legend->SetPos(0.03,0.03,'right','top');
// Output line
$graph->Stroke();

?>