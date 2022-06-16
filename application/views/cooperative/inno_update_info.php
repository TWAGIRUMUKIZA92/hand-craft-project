<div class="cd-horizontal-timeline col-12">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol class="list-unstyled">
					<li><a href="#0" data-date="16/01/2014" class="selected">Phase one</a></li>
					<li class="inactive"><a href="#0" data-date="28/02/2014">Phase two</a></li>
					<li><a href="#0" data-date="20/04/2014">phase three</a></li>
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->

		<ul class="cd-timeline-navigation" type="none">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol class="list-unstyled">
			<li class="selected" data-date="16/01/2014">
					<?php
					$this->load->view('innovator/inno_phase1_update');
					?>
			</li>

			<li data-date="28/02/2014">
				<?php
				$this->load->view('innovator/inno_phase2_update');
				?>
			</li>

			<li data-date="20/04/2014">
				<?php
				$this->load->view('innovator/inno_phase1_update');
				?>
			</li>

		</ol>
	</div> <!-- .events-content -->
</div>
