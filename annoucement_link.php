<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li class=""><a href="dasboard_teacher.php">&nbsp;Back</a></li>
				<li class=""><a href="my_students.php<?php echo '?id='.$get_id; ?>">&nbsp;My Students</a></li>
				<li class=""><a href="subject_overview.php<?php echo '?id='.$get_id; ?>">&nbsp;Subject Overview</a></li>
				<li class=""><a href="downloadable.php<?php echo '?id='.$get_id; ?>">&nbsp;Upload Files</a></li>
				<li class=""><a href="assignment.php<?php echo '?id='.$get_id; ?>">&nbsp;Assignments</a></li>
				<li class="active"><a href="announcements.php<?php echo '?id='.$get_id; ?>">&nbsp;Announcements</a></li>
				<li class=""><a href="class_quiz.php<?php echo '?id='.$get_id; ?>">&nbsp;Quiz</a></li>
			</ul>
			<?php include('search_other_class.php'); ?>		
</div>

