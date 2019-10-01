<div class="wrap">

	<h1>Settings Page Title</h1>

	<form method="POST" enctype="multipart/form-data" action="dapre_settings" accept-charset="utf-8">
		<?php wp_nonce_field( 'dapre_settings_page', 'dapre_settings_page_verify' ); ?>

		<div class="postbox">
			<h3 class="hndle" style="padding-left: 5px"><?php esc_html_e("Section title","dapre-wpspb") ?></h3>
			<div class="inside">
				<table class="form-table">
					<tbody>

					<!-- RADIO -->
					<tr>
						<th scope="row">Description for radio buttons</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for radio buttons</span></legend>
								<label for="radio_1">
									<input id="radio_1" class="radio" type="radio" name="field_action[<?php echo $key ?>]" value="read" data-index="<?php echo $key ?>" checked />
									<?php esc_html_e("Read","dapre-wpspb") ?>
								</label>
								<br>
								<label for="radio_2">
									<input id="radio_2" class="radio" type="radio" name="field_action[<?php echo $key ?>]" value="write" data-index="<?php echo $key ?>" disabled />
									<?php esc_html_e("Write","dapre-wpspb") ?>
								</label>
							</fieldset>
						</td>
					</tr>

					<!-- CHECKBOX -->
					<tr>
						<th scope="row">Description for checkbox</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for checkbox buttons</span></legend>
								<label for="option_empty_array">
									<input id="option_empty_array" type="checkbox" name="empty_array[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Add empty array","dapre-wpspb") ?>
								</label>
							</fieldset>
						</td>
					</tr>

					<!-- CHECKBOX MULTIPLE -->
					<tr>
						<th scope="row">Description for checkbox multiple</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for checkbox multiple</span></legend>
								<label for="option_1">
									<input id="option_1" type="checkbox" name="checkbox_1[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Checkbox 1","dapre-wpspb") ?>
								</label>
								<br>
								<label for="option_2">
									<input id="option_2" type="checkbox" name="checkbox_2[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Checkbox 2","dapre-wpspb") ?>
								</label>
							</fieldset>
						</td>

						<!-- SELECT -->
					<tr>
						<th scope="row"><label for="select">Description for select</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Select</span></legend>
								<select id="select" class="postform" name="select[<?php echo $key ?>]" data-index="<?php echo $key ?>" />
								<option value="0">Monday</option>
								<option value="1">Tuesday</option>
								<option value="2" selected>Wednesday</option>
								<option value="3">Thursday</option>
								<option value="4">Friday</option>
								<option value="5">Saturday</option>
								<option value="6">Sunday</option>
								</select>
							</fieldset>
						</td>
					</tr>

					<!-- TEXT INPUT REGULAR  -->
					<tr>
						<th scope="row"><label for="text_input">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="text_input" class="regular-text ltr" type="text" name="text_input[<?php echo $key ?>]" placeholder="Add your text here..." value="" data-index="<?php echo $key ?>" />
								<p class="description" id="textinput-description">This is a regular input field.</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXT INPUT SMALL -->
					<tr>
						<th scope="row"><label for="small_text_input">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="small_text_input" class="small-text ltr" type="text" name="text_input[<?php echo $key ?>]" value="" data-index="<?php echo $key ?>" />
								<p class="description" id="small_textinput-description">This is a small input field</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXT INPUT NUMBER -->
					<tr>
						<th scope="row"><label for="number_text_input">Description for number input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for number input</span></legend>
								<input id="number_text_input" class="regular-text ltr" type="number" name="text_input[<?php echo $key ?>]" value="" step="1" min="1" value="1" data-index="<?php echo $key ?>" /> what number
								<p class="description" id="small_textinput-description">This is a number input field</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXTAREA -->
					<tr>
						<th scope="row"><label for="textarea">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<textarea id="textarea" class="large-text code" name="textarea[<?php echo $key ?>]" value="1" placeholder="Add your text here..." row="4" cols="30" data-index="<?php echo $key ?>" ></textarea>
							</fieldset>
						</td>
					</tr>

					<!-- DATE INPUT -->
					<tr>
						<th scope="row"><label for="date_text_input">Description for date input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="date_text_input" class="regular-text ltr" type="date" name="date_input[<?php echo $key ?>]" value="" data-index="<?php echo $key ?>" /> what date
								<p class="description" id="small_textinput-description">This is a date input field</p>
							</fieldset>
						</td>
					</tr>

					<!-- EMAIL INPUT  -->
					<tr>
						<th scope="row"><label for="email_input">Description for email input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for email input</span></legend>
								<input id="email_input" class="regular-text ltr" type="text" name="email_input[<?php echo $key ?>]" placeholder="name@youremail.com" value="" data-index="<?php echo $key ?>" />
								<p class="description" id="textinput-description">This is a regular email field.</p>
							</fieldset>
						</td>
					</tr>

					<!-- PASSWORD INPUT  -->
					<tr>
						<th scope="row"><label for="password_input">Description for password input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for password input</span></legend>
								<input id="password_input" class="regular-text ltr" type="password" name="password_input[<?php echo $key ?>]" placeholder="********" value="" data-index="<?php echo $key ?>" />
								<p class="description" id="textinput-description">This is a regular password field.</p>
							</fieldset>
						</td>
					</tr>

					<!-- COLOR INPUT  -->
					<tr>
						<th scope="row"><label for="color_input">Description for color input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for color input</span></legend>
								<input id="color_input" class="small-text ltr" type="color" name="color_input[<?php echo $key ?>]" value="" data-index="<?php echo $key ?>" />
								<p class="description" id="textinput-description">This is a regular color field.</p>
							</fieldset>
						</td>
					</tr>

					<!-- PRIMARY SUBMIT BUTTON  -->
					<tr>
						<td scope="row">
							<p class="submit">
								<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
							</p>
						</td>
						<td>
						</td>
					</tr>

					<!-- SECONDARY SUBMIT BUTTON  -->
					<tr>
						<td scope="row">
							<p class="submit">
								<input type="submit" name="submit" id="submit" class="button button-secondary" value="Save Changes">
							</p>
						</td>
						<td>
						</td>
					</tr>

					</tbody>
				</table>
			</div>
		</div>

	</form>
</div>