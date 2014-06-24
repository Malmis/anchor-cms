<?php theme_include('header'); ?>
<section id="content"<?php if(PLAIN_NO_SIDEBAR == true): echo 'class="no-sidebar"'; endif; ?>>

    <!-- Your page title -->
    <h2><?php echo page_title(); ?></h2>

    <!-- Your page content -->
    <div><?php echo page_content(); ?></div>

    <!-- Notification message -->
    <div><?php echo Notify::read(); ?></div>

    <!-- The contact form -->
    <form method="post" action="<?php echo current_url(); ?>">

		<p><input name="contact-subject" type="text" placeholder="Hej!" value="<?php echo Input::previous('contact-subject'); ?>"> <label>Rubrik</label></p>
		<p><input name="contact-name" type="text" placeholder="Jag heter&hellip;" value="<?php echo Input::previous('contact-name'); ?>"> <label>Ditt namn</label></p>
		<p><input name="contact-email" type="email" placeholder="email@domain.com" value="<?php echo Input::previous('contact-email'); ?>"> <label>Din e-mail</label></p>
		<p><textarea name="contact-message" style="width:100%;height:150px;" placeholder="Skriv något!"><?php echo Input::previous('contact-message'); ?></textarea></p>
		<?php

			$digit_1 = mt_rand(1, 20);
			$digit_2 = mt_rand(1, 20);

			if(mt_rand(0, 1) === 1) {
				$math = $digit_1 . ' + ' . $digit_2;
				Session::put('contact-math-session', $digit_1 + $digit_2);
			}
			else {
				$math = $digit_1 . ' - ' . $digit_2;
				Session::put('contact-math-session', $digit_1 - $digit_2);
			}

			echo $math . ' = <input name="contact-math" type="text" value="" autocomplete="off">';

		?><br>
		<p><button type="submit">Skicka meddelande!</button></p>

	</form>

  </section>

<?php if(PLAIN_NO_SIDEBAR == false): ?>
<section id="sidebar">
	<?php include "includes/sidebar.php"; ?>
</section>
<?php endif; ?>
<?php theme_include('footer'); ?>