<?php /* Smarty version 2.6.26, created on 2013-11-01 12:30:26
         compiled from workflow/review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/review.tpl', 31, false),array('function', 'translate', 'workflow/review.tpl', 31, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "workflow/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#reviewTabs').pkpHandler(
			'$.pkp.controllers.TabHandler',
			{
				<?php $this->assign('roundIndex', $this->_tpl_vars['lastReviewRoundNumber']-1); ?>
				selected: <?php echo $this->_tpl_vars['roundIndex']; ?>

			}
		);
	});
</script>

<?php if ($this->_tpl_vars['reviewRounds']): ?>
	<div id="reviewTabs">
		<ul>
			<?php $_from = $this->_tpl_vars['reviewRounds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewRound']):
?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.workflow.ReviewRoundTabHandler",'op' => $this->_tpl_vars['reviewRoundOp'],'monographId' => $this->_tpl_vars['monograph']->getId(),'stageId' => $this->_tpl_vars['reviewRound']->getStageId(),'reviewRoundId' => $this->_tpl_vars['reviewRound']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.round",'round' => $this->_tpl_vars['reviewRound']->getRound()), $this);?>
</a>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['newRoundAction']): ?>
				<li>
										<a id="newRoundTabContainer" href="/" style="padding-left: 0px; padding-right: 0px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('image' => 'add_item','action' => $this->_tpl_vars['newRoundAction'],'contextId' => 'newRoundTabContainer')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a>
				</li>
			<?php endif; ?>
		</ul>
	</div>
<?php else: ?>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.review.notInitiated"), $this);?>
</p>
<?php endif; ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>