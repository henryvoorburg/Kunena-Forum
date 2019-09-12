<?php
/**
 * Kunena Component
 * @package         Kunena.Template.Crypsis
 * @subpackage      Layout.Announcement
 *
 * @copyright       Copyright (C) 2008 - 2019 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

echo $this->subLayout('Widget/Datepicker');
?>
<h2>
	<?php echo Text::_('COM_KUNENA_ANN_ANNOUNCEMENTS'); ?>:
	<?php echo $this->announcement->exists() ? Text::_('COM_KUNENA_ANN_EDIT') : Text::_('COM_KUNENA_ANN_ADD'); ?>
</h2>

<div class="well well-small">
	<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=announcement'); ?>" method="post"
	      name="editform" class="form-horizontal" id="editform">
		<input type="hidden" name="task" value="save"/>
		<?php echo $this->displayInput('id'); ?>
		<?php echo HTMLHelper::_('form.token'); ?>

		<div class="control-group">
			<label class="control-label" for="ann-title">
				<?php echo Text::_('COM_KUNENA_ANN_TITLE'); ?>
			</label>
			<div class="controls" id="ann-title">
				<?php echo $this->displayInput('title', 'class="input-xxlarge" required placeholder="' . Text::_('COM_KUNENA_ANN_LABEL_PLACEHOLDER_TITLE') . '"'); ?>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-short">
				<?php echo Text::_('COM_KUNENA_ANN_SORTTEXT'); ?>
			</label>
			<div class="controls" id="ann-short">
				<?php echo $this->displayInput('sdescription', 'rows="9" class="input-xxlarge" required placeholder="' . Text::_('COM_KUNENA_ANN_LABEL_PLACEHOLDER_SDESCRIPTION') . '"'); ?>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-long">
				<?php echo Text::_('COM_KUNENA_ANN_LONGTEXT'); ?>
			</label>
			<div class="controls" id="ann-long">
				<?php echo $this->displayInput('description', 'rows="12" class="input-xxlarge" placeholder="' . Text::_('COM_KUNENA_ANN_LABEL_PLACEHOLDER_DESCRITPION') . '"'); ?>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-date">
				<?php echo Text::_('COM_KUNENA_ANN_DATE'); ?>
			</label>
			<div class="controls" id="ann-date">
				<div class="input-append date">
					<?php echo $this->displayInput('created', '<span class="add-on">' . KunenaIcons::grid() . '</span>', 'created'); ?>
				</div>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-date2">
				<?php echo Text::_('COM_KUNENA_ANN_DATE_UP'); ?>
			</label>
			<div class="controls" id="ann-date2">
				<div class="input-append date">
					<?php echo $this->displayInput('publish_up', '<span class="add-on">' . KunenaIcons::grid() . '</span>', 'publish_up'); ?>
				</div>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-date3">
				<?php echo Text::_('COM_KUNENA_ANN_DATE_DOWN'); ?>
			</label>
			<div class="controls" id="ann-date3">
				<div class="input-append date">
					<?php echo $this->displayInput('publish_down', '<span class="add-on">' . KunenaIcons::grid() . '</span>', 'publish_down'); ?>
				</div>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-showdate">
				<?php echo Text::_('COM_KUNENA_ANN_SHOWDATE'); ?>
			</label>
			<div class="controls" id="ann-showdate">
				<?php echo $this->displayInput('showdate'); ?>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ann-publish">
				<?php echo Text::_('COM_KUNENA_ANN_PUBLISH'); ?>
			</label>
			<div class="controls" id="ann-publish">
				<?php echo $this->displayInput('published'); ?>
			</div>
		</div>

		<div class="control-group">
			<div class="controls center" id="ann-publish">
				<input name="submit" class="btn btn-primary" type="submit"
				       value="<?php echo Text::_('COM_KUNENA_SAVE'); ?>"/>
				<input onclick="window.history.back();" name="cancel" class="btn" type="button"
				       value="<?php echo Text::_('COM_KUNENA_CANCEL'); ?>"/>
			</div>
		</div>
	</form>
</div>