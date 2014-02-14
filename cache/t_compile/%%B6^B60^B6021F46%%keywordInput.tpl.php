<?php /* Smarty version 2.6.26, created on 2013-11-01 12:25:59
         compiled from form/keywordInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/keywordInput.tpl', 9, false),array('modifier', 'escape', 'form/keywordInput.tpl', 9, false),)), $this); ?>
<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['FBV_uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<?php if ($this->_tpl_vars['FBV_multilingual'] && count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo $this->_tpl_vars['FBV_id']; ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").tagit({
					itemName: "keywords",
					fieldName: "<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
",
					allowSpaces: true,
					<?php if ($this->_tpl_vars['FBV_sourceUrl'] && ! $this->_tpl_vars['FBV_disabled']): ?>
						tagSource: function(search, showChoices) {
							$.ajax({
								url: "<?php echo $this->_tpl_vars['FBV_sourceUrl']; ?>
", 								data: search,
								success: function(choices) {
									showChoices(choices);
								}
							});
						}
					<?php else: ?>
						availableTags: [<?php $_from = $this->_tpl_vars['FBV_availableKeywords'][$this->_tpl_vars['thisFormLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['availableKeywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['availableKeywords']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['availableKeyword']):
        $this->_foreach['availableKeywords']['iteration']++;
?>"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['availableKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
"<?php if (! ($this->_foreach['availableKeywords']['iteration'] == $this->_foreach['availableKeywords']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?>]
					<?php endif; ?>
				});

								<?php if ($this->_tpl_vars['FBV_disabled']): ?>
					$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
").find('.tagit-close, .tagit-new').remove();
				<?php endif; ?>
			});
		</script>
	<?php endforeach; endif; unset($_from); ?>

	<script type="text/javascript">
		$(function() {
			$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
').pkpHandler(
				'$.pkp.controllers.form.MultilingualInputHandler'
				);
		});
		</script>
		<span id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
" class="localization_popover_container pkpTagit">
			<ul class="localization_popover_container localizable <?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['currentLocale']): ?> locale_<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
">
				<?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?>
			</ul>
			<?php if ($this->_tpl_vars['FBV_label_content']): ?><span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span><?php endif; ?>
			<br />
			<span>
				<div class="localization_popover">
					<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['thisFormLocale']): ?>
						<ul class="multilingual_extra flag flag_<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
">
							<?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['thisFormLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?>
						</ul>
					<?php endif; ?><?php endforeach; endif; unset($_from); ?>
				</div>
			</span>
		</span>

<?php else: ?> 	<script type="text/javascript">
		$(document).ready(function(){
			$("#<?php echo $this->_tpl_vars['FBV_id']; ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").tagit({
				itemName: "keywords",
				fieldName: "<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
",
				allowSpaces: true,
				<?php if ($this->_tpl_vars['FBV_sourceUrl'] && ! $this->_tpl_vars['FBV_disabled']): ?>
					tagSource: function(search, showChoices) {
						$.ajax({
							url: "<?php echo $this->_tpl_vars['FBV_sourceUrl']; ?>
", 							data: search,
							success: function(choices) {
								showChoices(choices);
							}
						});
					}
				<?php else: ?>
					availableTags: [<?php $_from = $this->_tpl_vars['FBV_availableKeywords'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['availableKeywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['availableKeywords']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['availableKeyword']):
        $this->_foreach['availableKeywords']['iteration']++;
?>"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['availableKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
"<?php if (! ($this->_foreach['availableKeywords']['iteration'] == $this->_foreach['availableKeywords']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?>]
				<?php endif; ?>
			});

						<?php if ($this->_tpl_vars['FBV_disabled']): ?>
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").find('.tagit-close, .tagit-new').remove();
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
:empty").removeClass('tagit');
			<?php endif; ?>
		});
	</script>

	<!-- The container which will be processed by tag-it.js as the interests widget -->
	<ul id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"><?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?></ul>
	<?php if ($this->_tpl_vars['FBV_label_content']): ?><span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span><?php endif; ?>
	<br />
<?php endif; ?>