<!doctype html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery UI Droppable - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="styles/custom.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<?php
 echo "TEST ";
?>

<body>
	<div class="container-fluid vierkant">
		<div id="ticket" class="ticket">
			<div id="draggable" class="ui-widget-content">
				<p>Ticket 1: Computertje stuk</p>
			</div>
		</div>

		<div class="row">
			<div id="ocm">
				<div id="droppable" class="ui-widget-header">
					<h3>OCM</h3>
        </div>
        <!-- droppable -->
      </div>
      <!-- ocm div -->
			<div id="acm">
				<div id="droppable" class="ui-widget-header">
					<h3>ACM</h3>
        </div>
        <!-- droppable -->
      </div>
      <!-- acm -->
    </div>
    <!-- row -->


		<div class="row">
				<div id="sturend">
					<div id="dropppable" class="ui-widget-header">
						<h3>Sturende processen</h3>
					</div>
					<!-- droppable -->
				</div>
				<!-- sturend -->
		</div>
		<!-- row -->
		<div class="row">
			<div id="beheer">
				<div id="droppable" class="ui-widget-header">
					<h3>Beheer</h3>
        </div>
        <!-- droppable -->
      </div>
      <!-- div beheer -->
			<div id="verbindend">
				<div id="triangle">verbindende</div>
				<div id="triangle" style="border-color: transparent transparent rgb(163, 163, 163); border-width: 0px 50px 100px;">processen</div>

			</div>
			<div id="onderhoud">
				<div id="droppable" class="ui-widget-header">
					<h3>Onderhoud / vernieuwing</h3>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>

<script>
	var ticket_id = 3;

	//Data in droppable area
	$("#ocm").data("ocm", { id: 0, name: "OCM" });
	$("#acm").data("acm", { id: 1, name: "ACM" });
	$("#sturend").data("sturend", { id: 2, name: "Sturend" });
	$("#beheer").data("beheer", { id: 3, name: "Beheer" });
	$("#verbindend").data("verbindend", { id: 4, name: "Verbindend" });
	$("#onderhoud").data("onderhoud", { id: 5, name: "Onderhoud" });

//Ticket data
	$("#ticket").data("ticket", { ticket_id });

	$(function () {
		$("#draggable").draggable();
		$("#droppable,#dropppable").droppable({
			drop: function (event, ui) {
				console.log($("#ticket").data())

				// Send the ticket ID here

				console.log($("#ocm").data())
				
				$(this).addClass("ui-state-highlight").find("p").html("Dropped!");
				$(this).find("#ticket").remove();
			}
		}
		);
	}

	);
</script>