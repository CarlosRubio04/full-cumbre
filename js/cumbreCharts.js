// Bar chart

function groupsChart(labelsChart,dataChart){ 

	var ctx = document.getElementById("barGroupsChart");
	var mybarChart = new Chart(ctx, {
		type: 'bar',
		data: {
		labels: labelsChart,
		datasets: [{
			label: 'Metros',
			backgroundColor: [
			"#455C73",
			"#9B59B6",
			"#BDC3C7",
			"#26B99A",
			"#3498DB",
			"#ff00ff",
			"#03586a",
			"#ff557f",
			"#455C73",
			"#9B59B6",
			"#BDC3C7",
			"#26B99A"
		],
			data: dataChart
		}]
		},

		options: {
		scales: {
			yAxes: [{
			ticks: {
				beginAtZero: true
			}
			}]
		}
		}
	});
}

function groupMembersMeters(labelsChart,dataChart){ 
	var ctx = document.getElementById("DoughnutGroupMembersChart");
	var data = {
		labels: labelsChart,
		datasets: [{
		data: dataChart,
		backgroundColor: [
			"#455C73",
			"#9B59B6",
			"#BDC3C7",
			"#26B99A",
			"#3498DB",
			"#ff00ff",
			"#03586a",
			"#ff557f"
		],
		hoverBackgroundColor: [
			"#34495E",
			"#B370CF",
			"#CFD4D8",
			"#36CAAB",
			"#49A9EA",
			"#ff00ff",
			"#03586a",
			"#ff557f"
		]

		}]
	};

	var canvasDoughnut = new Chart(ctx, {
		type: 'doughnut',
		tooltipFillColor: "rgba(51, 51, 51, 0.55)",
		data: data
	});

} 

function userCampMeters(dataChart){ 
	var ctx = document.getElementById("DoughnutMyMetersChart");
	var data = {
		labels: [
		"Alistamiento",
		"Campamento Base",
		"Campamento Uno",
		"Campamento Dos",
		],
		datasets: [{
		data: dataChart,
		backgroundColor: [
			"#455C73",
			"#9B59B6",
			"#BDC3C7",
			"#3498DB"
		],
		hoverBackgroundColor: [
			"#34495E",
			"#B370CF",
			"#CFD4D8",
			"#36CAAB"
		]

		}]
	};

	var canvasDoughnut = new Chart(ctx, {
		type: 'doughnut',
		tooltipFillColor: "rgba(51, 51, 51, 0.55)",
		data: data
	});

} 
