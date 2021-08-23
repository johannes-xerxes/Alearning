<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dashboard_student.php">&nbsp;Back</a></li>
				<li class=""><a href="my_classmates.php<?php echo '?id='.$get_id; ?>">&nbsp;My Classmates</a></li>
				<li class=""><a href="progress.php<?php echo '?id='.$get_id; ?>">&nbsp;My Progress</a></li>
				<li class=""><a href="subject_overview_student.php<?php echo '?id='.$get_id; ?>">&nbsp;Subject Overview</a></li>
				<li class=""><a href="downloadable_student.php<?php echo '?id='.$get_id; ?>">&nbsp;Downloadable Materials</a></li>
				<li class=""><a href="assignment_student.php<?php echo '?id='.$get_id; ?>">&nbsp;Assignments</a></li>
				<li class="active"><a href="announcements_student.php<?php echo '?id='.$get_id; ?>">&nbsp;Announcements</a></li>
				<li class=""><a href="student_quiz_list.php<?php echo '?id='.$get_id; ?>">&nbsp;Quiz</a></li>
		</ul>
</div>