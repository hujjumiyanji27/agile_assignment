<?php include('db_connect.php'); ?>
<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Schedule</b>
						<span class="float:right"><button class="btn btn-primary btn-block btn-sm col-sm-2 float-right"
								id="new_schedule">
								<i class="fa fa-plus"></i> New Entry
							</button></span>
					</div>
					<div class="card-body">
						<div class="row">
							<label for="" class="control-label col-md-2 offset-md-2">View Schedule of:</label>
							<div class=" col-md-4">
								<select name="faculty_id" id="faculty_id" class="custom-select select2">
									<option value="">Select Faculty</option>
									<option value="all">All</option>
									<?php
									$faculty = $conn->query("SELECT *, concat(lastname, ', ', firstname, ' ', middlename) as name FROM faculty order by concat(lastname, ', ', firstname, ' ', middlename) asc");
									while ($row = $faculty->fetch_array()):
										?>
										<option value="<?php echo $row['id'] ?>">
											<?php echo ucwords($row['name']) ?>
										</option>
									<?php endwhile; ?>
								</select>

							</div>
						</div>
						<hr>
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>


<style>
	.container {
		max-width: 800px;
		margin: auto;
		padding: 20px;
		background-color: #f9f9f9;
		border-radius: 8px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	h1 {
		color: #333;
		font-size: 24px;
		text-align: center;
		margin-bottom: 20px;
	}

	.feedback-item {
		background-color: #fff;
		border: 1px solid #ddd;
		padding: 10px;
		margin-bottom: 10px;
		border-radius: 4px;
	}

	.feedback-item p {
		margin: 5px 0;
		color: #666;
	}

	.feedback-item .session-id,
	.feedback-item .staff-id {
		font-weight: bold;
	}

	.feedback-item .submitted-at {
		text-align: right;
		font-style: italic;
		color: #999;
	}
</style>
<div class="container">
	<h1>Feedback From Staff For the session...</h1>
</div>
<?php


// Database connection
// Assuming $conn is your MySQLi connection variable

$sql = "SELECT session_id, staff_id, feedback, submitted_at FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "Session ID: " . $row["session_id"] . " - Staff ID: " . $row["staff_id"] . " - Feedback: " . $row["feedback"] . " - Submitted At: " . $row["submitted_at"] . "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>


<style>
	td {
		vertical-align: middle !important;
	}

	td p {
		margin: unset
	}

	img {
		max-width: 100px;
		max-height: :150px;
	}

	.avatar {
		display: flex;
		border-radius: 100%;
		width: 100px;
		height: 100px;
		align-items: center;
		justify-content: center;
		border: 3px solid;
		padding: 5px;
	}

	.avatar img {
		max-width: calc(100%);
		max-height: calc(100%);
		border-radius: 100%;
	}

	input[type=checkbox] {
		/* Double-sized Checkboxes */
		-ms-transform: scale(1.5);
		/* IE */
		-moz-transform: scale(1.5);
		/* FF */
		-webkit-transform: scale(1.5);
		/* Safari and Chrome */
		-o-transform: scale(1.5);
		/* Opera */
		transform: scale(1.5);
		padding: 10px;
	}

	a.fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-past {
		cursor: pointer;
	}

	a.fc-timegrid-event.fc-v-event.fc-event.fc-event-start.fc-event-end.fc-event-past {
		cursor: pointer;
	}
</style>



<script>

	$('#new_schedule').click(function () {
		uni_modal('New Schedule', 'manage_schedule.php', 'mid-large')
	})
	$('.view_alumni').click(function () {
		uni_modal("Bio", "view_alumni.php?id=" + $(this).attr('data-id'), 'mid-large')

	})
	$('.delete_alumni').click(function () {
		_conf("Are you sure to delete this alumni?", "delete_alumni", [$(this).attr('data-id')])
	})

	function delete_alumni($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_alumni',
			method: 'POST',
			data: { id: $id },
			success: function (resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function () {
						location.reload()
					}, 1500)

				}
			}
		})
	}
	var calendarEl = document.getElementById('calendar');
	var calendar;
	document.addEventListener('DOMContentLoaded', function () {


		calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
			},
			initialDate: '<?php echo date('Y-m-d') ?>',
			weekNumbers: true,
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			selectable: true,
			nowIndicator: true,
			dayMaxEvents: true, // allow "more" link when too many events
			// showNonCurrentDates: false,
			events: []
		});
		calendar.render();


	});
	$('#faculty_id').change(function () {
		calendar.destroy()
		start_load()
		$.ajax({
			url: 'ajax.php?action=get_schecdule',
			method: 'POST',
			data: { faculty_id: $(this).val() },
			success: function (resp) {
				if (resp) {
					resp = JSON.parse(resp)
					var evt = [];
					if (resp.length > 0) {
						Object.keys(resp).map(k => {
							var obj = {};
							obj['title'] = resp[k].title
							obj['data_id'] = resp[k].id
							obj['data_location'] = resp[k].location
							obj['data_description'] = resp[k].description
							if (resp[k].is_repeating == 1) {
								obj['daysOfWeek'] = resp[k].dow
								obj['startRecur'] = resp[k].start
								obj['endRecur'] = resp[k].end
								obj['startTime'] = resp[k].time_from
								obj['endTime'] = resp[k].time_to
							} else {

								obj['start'] = resp[k].schedule_date + 'T' + resp[k].time_from;
								obj['end'] = resp[k].schedule_date + 'T' + resp[k].time_to;
							}

							evt.push(obj)
						})
						console.log(evt)

					}
					calendar = new FullCalendar.Calendar(calendarEl, {
						headerToolbar: {
							left: 'prev,next today',
							center: 'title',
							right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
						},
						initialDate: '<?php echo date('Y-m-d') ?>',
						weekNumbers: true,
						navLinks: true,
						editable: false,
						selectable: true,
						nowIndicator: true,
						dayMaxEvents: true,
						events: evt,
						eventClick: function (e, el) {
							var data = e.event.extendedProps;
							uni_modal('View Schedule Details', 'view_schedule.php?id=' + data.data_id, 'mid-large')

						}
					});
				}
			}, complete: function () {
				calendar.render()
				end_load()
			}
		})
	})
</script>