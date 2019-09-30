<div class="wrap">

	<h1>Settings Page Title</h1>

	<form method="POST" enctype="multipart/form-data" action="dapre_settings" accept-charset="utf-8">
		<?php wp_nonce_field( 'dapre_settings_page', 'dapre_settings_page_verify' ); ?>

		<div class="postbox">
			<h3 class="hndle" style="padding-left: 5px"><?php esc_html_e("Section title","dapre-cft") ?></h3>
			<div class="inside">
				<table class="form-table">
					<tbody>

					<!-- RADIO -->
					<tr>
						<th scope="row">Description for radio buttons</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for radio buttons</span></legend>
								<label for="option_action_read_<?php echo $key ?>">
									<input id="option_action_read_<?php echo $key ?>" class="radio" type="radio" name="field_action[<?php echo $key ?>]" value="read" data-index="<?php echo $key ?>" checked />
									<?php esc_html_e("Read","dapre-cft") ?>
								</label>
								<br>
								<label for="option_action_write_<?php echo $key ?>">
									<input id="option_action_write_<?php echo $key ?>" class="radio" type="radio" name="field_action[<?php echo $key ?>]" value="write" data-index="<?php echo $key ?>" disabled />
									<?php esc_html_e("Write","dapre-cft") ?>
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
								<label for="option_empty_array_<?php echo $key ?>">
									<input id="option_empty_array_<?php echo $key ?>" type="checkbox" name="empty_array[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Add empty array","dapre-cft") ?>
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
								<label for="option_1_<?php echo $key ?>">
									<input id="option_1_<?php echo $key ?>" type="checkbox" name="checkbox_1[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Checkbox 1","dapre-cft") ?>
								</label>
								<br>
								<label for="option_2_<?php echo $key ?>">
									<input id="option_2_<?php echo $key ?>" type="checkbox" name="checkbox_2[<?php echo $key ?>]" value="1" data-index="<?php echo $key ?>" />
									<?php esc_html_e("Checkbox 2","dapre-cft") ?>
								</label>
							</fieldset>
						</td>

						<!-- SELECT -->
					<tr>
						<th scope="row"><label for="select_<?php echo $key ?>">Description for select</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Select</span></legend>
								<select id="select_<?php echo $key ?>" class="postform" name="select[<?php echo $key ?>]" data-index="<?php echo $key ?>" />
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
						<th scope="row"><label for="text_input_<?php echo $key ?>">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="text_input_<?php echo $key ?>" class="regular-text ltr" type="text" name="text_input[<?php echo $key ?>]" placeholder="Add your text here..." value="" data-index="<?php echo $key ?>" />
								<p class="description" id="textinput-description">This is a regular input field.</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXT INPUT SMALL -->
					<tr>
						<th scope="row"><label for="small_text_input_<?php echo $key ?>">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="small_text_input_<?php echo $key ?>" class="small-text ltr" type="text" name="text_input[<?php echo $key ?>]" value="" data-index="<?php echo $key ?>" />
								<p class="description" id="small_textinput-description">This is a small input field</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXT INPUT NUMBER -->
					<tr>
						<th scope="row"><label for="number_text_input_<?php echo $key ?>">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<input id="number_text_input_<?php echo $key ?>" class="small-text ltr" type="number" name="text_input[<?php echo $key ?>]" value="" step="1" min="1" value="1" data-index="<?php echo $key ?>" /> what number
								<p class="description" id="small_textinput-description">This is a number input field</p>
							</fieldset>
						</td>
					</tr>

					<!-- TEXTAREA -->
					<tr>
						<th scope="row"><label for="textarea_<?php echo $key ?>">Description for text input</label></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Legend for text input</span></legend>
								<textarea id="textarea_<?php echo $key ?>" class="large-text code" name="textarea[<?php echo $key ?>]" value="1" placeholder="Add your text here..." row="4" cols="30" data-index="<?php echo $key ?>" ></textarea>
							</fieldset>
						</td>
					</tr>

					</tbody>
				</table>
			</div>
		</div>

	</form>
</div>