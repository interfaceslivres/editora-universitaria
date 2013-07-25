<?php /* Smarty version 2.6.26, created on 2013-07-25 14:43:56
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'common/footer.tpl', 16, false),array('function', 'url', 'common/footer.tpl', 40, false),array('function', 'translate', 'common/footer.tpl', 40, false),array('function', 'call_hook', 'common/footer.tpl', 45, false),array('function', 'get_debug_info', 'common/footer.tpl', 49, false),)), $this); ?>

</div><!-- pkp_structure_main -->
</div><!-- pkp_structure_content -->
</div><!-- pkp_structure_body -->

<div class="pkp_structure_foot">

<?php if (count($this->_tpl_vars['footerCategories']) > 0): ?>	<div class="pkp_structure_subfoot">
		<div class="pkp_structure_content">
			<?php $_from = $this->_tpl_vars['footerCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category']):
        $this->_foreach['loop']['iteration']++;
?>
				<?php $this->assign('links', $this->_tpl_vars['category']->getLinks()); ?>
				<div class="unit size1of<?php echo count($this->_tpl_vars['footerCategories']); ?>
 <?php if (($this->_foreach['loop']['iteration'] == $this->_foreach['loop']['total'])): ?>lastUnit<?php endif; ?>">
					<h4><?php echo $this->_tpl_vars['category']->getLocalizedTitle(); ?>
</h4>
					<ul>
						<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
							<li><a href="<?php echo $this->_tpl_vars['link']->getUrl(); ?>
"><?php echo $this->_tpl_vars['link']->getLocalizedTitle(); ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						<?php if (count($this->_tpl_vars['links']) < $this->_tpl_vars['maxLinks']): ?>
							<?php unset($this->_sections['padding']);
$this->_sections['padding']['name'] = 'padding';
$this->_sections['padding']['start'] = (int)count($this->_tpl_vars['links']);
$this->_sections['padding']['loop'] = is_array($_loop=$this->_tpl_vars['maxLinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['padding']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['padding']['show'] = true;
$this->_sections['padding']['max'] = $this->_sections['padding']['loop'];
if ($this->_sections['padding']['start'] < 0)
    $this->_sections['padding']['start'] = max($this->_sections['padding']['step'] > 0 ? 0 : -1, $this->_sections['padding']['loop'] + $this->_sections['padding']['start']);
else
    $this->_sections['padding']['start'] = min($this->_sections['padding']['start'], $this->_sections['padding']['step'] > 0 ? $this->_sections['padding']['loop'] : $this->_sections['padding']['loop']-1);
if ($this->_sections['padding']['show']) {
    $this->_sections['padding']['total'] = min(ceil(($this->_sections['padding']['step'] > 0 ? $this->_sections['padding']['loop'] - $this->_sections['padding']['start'] : $this->_sections['padding']['start']+1)/abs($this->_sections['padding']['step'])), $this->_sections['padding']['max']);
    if ($this->_sections['padding']['total'] == 0)
        $this->_sections['padding']['show'] = false;
} else
    $this->_sections['padding']['total'] = 0;
if ($this->_sections['padding']['show']):

            for ($this->_sections['padding']['index'] = $this->_sections['padding']['start'], $this->_sections['padding']['iteration'] = 1;
                 $this->_sections['padding']['iteration'] <= $this->_sections['padding']['total'];
                 $this->_sections['padding']['index'] += $this->_sections['padding']['step'], $this->_sections['padding']['iteration']++):
$this->_sections['padding']['rownum'] = $this->_sections['padding']['iteration'];
$this->_sections['padding']['index_prev'] = $this->_sections['padding']['index'] - $this->_sections['padding']['step'];
$this->_sections['padding']['index_next'] = $this->_sections['padding']['index'] + $this->_sections['padding']['step'];
$this->_sections['padding']['first']      = ($this->_sections['padding']['iteration'] == 1);
$this->_sections['padding']['last']       = ($this->_sections['padding']['iteration'] == $this->_sections['padding']['total']);
?>
								<li class="pkp_helpers_invisible">&nbsp;</li>
							<?php endfor; endif; ?>
						<?php endif; ?>
					</ul>
				</div>
			<?php endforeach; endif; unset($_from); ?>
		</div><!-- pkp_structure_content -->
	</div><!-- pkp_structure_subfoot -->
<?php endif; ?>
<div class="pkp_structure_subfoot">
	<div class="pkp_structure_content">
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'aboutThisPublishingSystem'), $this);?>
"><img class="pkp_helpers_align_right" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.openMonographPress"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/omp_brand.png"/></a>
		<a href="http://pkp.sfu.ca/omp"><img class="pkp_helpers_align_right pkp_helpers_clear" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.publicKnowledgeProject"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/pkp_brand.png"/></a>
	</div><!-- pkp_structure_content -->
	<div class="pkp_structure_content">
		<?php if ($this->_tpl_vars['pageFooter']): ?><?php echo $this->_tpl_vars['pageFooter']; ?>
<?php endif; ?>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

	</div><!-- pkp_structure_content -->
</div><!-- pkp_structure_subfoot -->

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

</div><!-- pkp_structure_foot -->

</div><!-- pkp_structure_page -->

<?php echo $this->_tpl_vars['additionalFooterData']; ?>

</body>
</html>
